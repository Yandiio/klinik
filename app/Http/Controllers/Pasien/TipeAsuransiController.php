<?php

namespace App\Http\Controllers\Pasien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\tipeAsuransi;
use Yajra\Datatables\Datatables;

class TipeAsuransiController extends Controller
{
    //

    public function tipeAsuransiList(){

        $tipeAsuransi = tipeAsuransi::all();

        return Datatables::of($tipeAsuransi)->make(true);
    }


}
