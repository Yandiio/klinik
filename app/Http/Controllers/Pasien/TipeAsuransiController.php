<?php

namespace App\Http\Controllers\Pasien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tipeAsuransi;

class TipeAsuransiController extends Controller
{
    //

    public function tipeAsuransiList(){

        $tipeAsuransi = tipeAsuransi::all();

        return response()->json($tipeAsuransi);
    }


}
