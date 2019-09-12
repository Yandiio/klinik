<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\tipePoli;
use Yajra\Datatables\Datatables;

class tipePoliController extends Controller
{
    public function gettipePoli_Index() {
        return view('dokter.tipePoli');
    }

    public function gettipePoli_List() {
        $res = tipePoli::get();
        return Datatables::of($res)->make(true);
        return response()->json($res);
    }
}
