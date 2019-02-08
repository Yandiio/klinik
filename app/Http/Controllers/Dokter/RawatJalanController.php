<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RawatJalanController extends Controller
{
    public function cariDokter()
    {
        return view('dokter.rawatjalan.caridokter');
    }
}
