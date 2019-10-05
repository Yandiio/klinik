<?php

namespace App\Http\Controllers\rekamMedis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Diagnosa;
use Yajra\Datatables\Datatables;

class DiagnosaController extends Controller
{
    public function getDiagnosa_Index() {
        return view('rekamMedis.Diagnosa');
    }

    public function getDiagnosa_List() {
        $res = Diagnosa::get();
        return Datatables::of($res)->make(true);
        return response()->json($res);
    }

    public function postDiagnosa_Input(Request $request) {
        //dd($request);
        $diag = new Diagnosa;
        $diag->kode_diagnosa = $request->input('NewKode');
        $diag->nama = $request->input('NewNama');
        $diag->hasil_diagnosa = $request->input('NewHasil');
        $diag->keterangan = $request->input('NewKeterangan');
        $diag->save();
    }

    public function getDiagnosa_Edit(Request $request) {
        //dd($request);
        $diag = Diagnosa::find($request->id);
        return response()->json($diag);
    }

    public function postDiagnosa_Update(Request $request) {
        // dd($request);
        $diag = Diagnosa::find($request->id);
        $diag->kode_diagnosa = $request->input('editKode');
        $diag->nama = $request->input('editNama');
        $diag->hasil_diagnosa = $request->input('editHasil');
        $diag->keterangan = $request->input('editKeterangan');
        $diag->save();
        return response()->json($diag);
    }

    public function postDiagnosa_Delete() {
        $id = request()->input('id');
        $diag = Diagnosa::find($id);
        $diag->delete();
    }
}
