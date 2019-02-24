<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsuransiController extends Controller
{
    public function listAsuransi()
    {
        return view('asuransi.list');
    }
    public function masterAsuransi()
    {
        return view('asuransi.masterasuransi');
    }
}
