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
    public function postLab(Request $request){

        //dd($request);
        $lab = new laboratorium;
        $lab->nama = $request->input('nama');
        $lab->keterangan = $request->input('keterangan');
        $lab->save();
    }
    public function editLab(Request $request){
        //dd($request);
        $lab = laboratorium::find($request->id);

        return response()->json($lab);
    }
    public function updateLab(Request $request){
        //dd($request);
        $lab = laboratorium::find($request->id);
        $lab->nama = $request->input('editNama');
        $lab->keterangan = $request->input('editKeterangan');
        $lab->save();

        return response()->json($lab);
    }
    public function deleteLab(Request $request){
        
        $lab = laboratorium::find($request->id);
        $lab->delete();
    }
    public function getAsuransiData(){
        $lab = laboratorium::all();
        return response()->json($lab);
    }
}
