<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
class PDFController extends Controller
{
     public function pdf()
    {
       $pdf =PDF::loadView('pdf');
       return $pdf->stream('custom.pdf');
    }
}
