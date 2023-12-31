<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertadidikM;
use PDF;

class PesertadidkPDF extends Controller
{
    public function pdf(){
        $pesertaM = PesertadidikM::all();
        // return view('pesertadidik_pdf', compact('pesertaM'));
        $pdf = PDF::loadview('pesertadidik_pdf', [
            'pesertaM' => $pesertaM
        ]);
        return $pdf->download('pesertadidik.pdf');
    }
}
