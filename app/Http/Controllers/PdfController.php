<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $name = 'Md. Kamrul Hasan';
        $data = ['name' => $name];
        $pdf = Pdf::loadView('index', $data)->setPaper('a4', 'landscape');

        return $pdf->stream('dom-pdf'. time() . '.pdf');
    }
}
