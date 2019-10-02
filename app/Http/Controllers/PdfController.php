<?php

namespace App\Http\Controllers;

use App\Packs;
use App\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function download(Request $request)
    {

        $pack = Product::where('id', $request->pack)->first();

        $nombre = $pack->name;
        $comprador = auth()->user();
        //$vendedor = User::where('id', $producto->user_id)->first();

        $pdf = App::make('dompdf.wrapper');
        $pdf = Facade::loadView('pdf.factura', compact('pack', 'comprador'));
        return $pdf->download('factura-'. auth()->user()->user_name . '-' . $nombre .'.pdf');
    }
}
