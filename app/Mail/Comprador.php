<?php

namespace App\Mail;

use App\Product;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade;
use Illuminate\Support\Facades\App;

class Comprador extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $pack;
    //private $vendedor;
    private $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $pack, $pdf)
    {
        $this->user = $user;
        $this->pack = $pack;
        //$this->vendedor = $vendedor;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.comprador')->with('user', $this->user)
            ->with('pack', $this->pack)
            ->attachData($this->pdf->output(), 'factura-'. auth()->user()->user_name . '-' . $this->pack->name .'.pdf')->subject('Compra realizada en Comunio');
    }
}
