<?php

namespace App\Http\Controllers\Pasien;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\pasien;
use App\Model\alamat_pasien;
use App\Model\tipeAsuransi;
use App\Model\hubungan;
use App\Model\penjamin;
use App\Model\pendaftaran;

class PendaftaranController extends Controller
{
    //
    public function pendaftranList(){
        $pasien = pasien::all();
        return response()->json();
    }
    public function postDataPribadi(Request $request){
        dd($request);
    }
    public function postPenjamin(Request $request){
        dd($requeat);
    }
    public function postDaftar(Request $request){
        dd($request);
    }
}
