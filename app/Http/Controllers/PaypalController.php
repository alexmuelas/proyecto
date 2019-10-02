<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\Mail\Comprador;
use App\Mail\Vendedor;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;

class PaypalController extends Controller
{
    private $_api_context;


    public function __construct()
    {
        /** PayPal api context **/
         $paypal_conf = \Config::get('paypal');
        //$paypal_conf = config('paypal');

        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payPaypal(Request $request)
    {
        $pack = session('pack');
        $nombre = session('nombre');
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName($nombre)
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice($pack->price);


        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $amount = new Amount();
        $amount->setCurrency("EUR")
            ->setTotal($pack->price);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Descripcion de la transaccion");

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(url('paypal/status')) /** Specify return URL **/
        ->setCancelUrl(url('paypal-status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                session()->put('error', 'Connection timeout');
                return redirect('/home')->with('message', ['danger', 'Producto no comprado']);
            } else {
                session()->put('error', 'Some error occur, sorry for inconvenient');
                return redirect('/home')->with('message', ['danger', 'Producto no comprado']);
            }
        }
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        /** add payment ID to session **/
        session()->put('paypal_payment_id', $payment->getId());
        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return redirect($redirect_url);
        }
        session()->put('error', 'Unknown error occurred');
        return redirect('/home')->with('message', ['danger', 'Producto no comprado']);


    }

    public function getStatus(Request $request)
    {

        $pack = session('pack');

        /** Get the payment ID before session clear **/
        $pay_id = session('paypal_payment_id');


        /** clear the session payment ID **/


        if (empty($request->PayerID) || empty($request->token)) {
            session()->put('error', 'Payment failed');
            return redirect('/home')->with('message', ['danger', 'Producto no comprado']);
        }

        $payment = Payment::get($pay_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);


        session()->forget('paypal_payment_id');
        if ($result->getState() == 'approved') {

            /*$product->status = 'Vendido';
            $product->comprador = auth()->user()->id;
            $product->save();*/

            $comprador = auth()->user();
            $comprador->money = $comprador->money + $pack->money;
            $comprador->save();


            //Generamos el pdf para las facturas adjuntas
            $pdf = App::make('dompdf.wrapper');
            $pdf = PDF::loadView('pdf.factura', compact('pack', 'comprador'));

            //Email al comprador
            Mail::to(auth()->user())->send(new Comprador(auth()->user(), $pack,$pdf));

            //Email al vendedor
            //Mail::to($vendedor)->send(new Vendedor(auth()->user(), $pack, $vendedor));


            //return redirect('/')->with('message', ['success', 'Producto comprado'])->with('modal', [$vendedor->id, auth()->user()->id]);
            return redirect('/home');
        }else{
            session()->put('error', 'Payment failed');

            return redirect('/home')->with('message', ['danger', 'Producto no comprado']);
        }



    }


}
