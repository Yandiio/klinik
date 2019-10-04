<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\dokter;
use Yajra\Datatables\Datatables;

class DokterController extends Controller
{
    public function getDokter_List() {
        $res = Dokter::get();
        return Datatables::of($res)->make(true);
        return response()->json($res);
    }
}
