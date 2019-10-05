<?php

namespace App\Http\Controllers\rekamMedis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\laboratorium;
use Yajra\Datatables\Datatables;

class LabController extends Controller
{
    //
    public function labList(){

        $lab = laboratorium::all();

        return Datatables::of($lab)->make(true);
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
    public function deleteTipeAsuransi(Request $request){
        
        $asuransi = tipeAsuransi::find($request->id);
        $asuransi->delete();
    }
    public function getAsuransiData(){
        $asuransi = tipeAsuransi::all();
        return response()->json($asuransi);
    }
}
