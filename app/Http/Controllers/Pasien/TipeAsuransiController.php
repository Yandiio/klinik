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
    public function postTipeAsuransi(Request $request){

        //dd($request);
        $asuransi = new tipeAsuransi;
        $asuransi->nama = $request->input('name');
        $asuransi->save();
    }
    public function editTipeAsuransi(Request $request){
        //dd($request);
        $asuransi = tipeAsuransi::find($request->id);

        return response()->json($asuransi);
    }
    public function updateTipeAsuransi(Request $request){
        //dd($request);
        $asuransi = tipeAsuransi::find($request->id);
        $asuransi->nama = $request->input('name');
        $asuransi->save();

        return response()->json($asuransi);
    }


}
