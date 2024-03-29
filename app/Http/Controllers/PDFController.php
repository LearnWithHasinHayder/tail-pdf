<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\LaravelPdf\Facades\Pdf as LaravelPdf;

class PDFController extends Controller
{
    function getPdf(){
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];

        $pdf = Pdf::loadView('invoice', ['data' => $data]);
        return $pdf->download('ostad.pdf');
        //return view('invoice',['data'=>$data]);
    }

    function getHtml(){
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];

        return view('invoice',['data'=>$data]);
    }

    function getSpatiePDF(){
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];
        return LaravelPdf::view('invoice', ['data' => $data])
        ->format('A4')
        ->save('invoice.pdf');
    }
}
