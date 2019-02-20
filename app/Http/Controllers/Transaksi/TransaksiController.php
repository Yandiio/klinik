<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    //
    public function listRawatJalan(){
        return view('transaksi.rawat-jalan');
    }
    public function invoice(){
        return view ('transaksi.invoice');
    }
    
}
