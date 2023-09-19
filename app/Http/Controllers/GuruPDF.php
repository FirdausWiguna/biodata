<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruM;
use PDF;

class GuruPDF extends Controller
{
    public function pdf(){
        $GuruM = GuruM::all();
        // return view('pesertadidik_pdf', compact('pesertaM'));
        $pdf = PDF::loadview('guru_pdf', [
            'guruM' => $guruM
        ]);
        return $pdf->download('guru.pdf');
    }
}
