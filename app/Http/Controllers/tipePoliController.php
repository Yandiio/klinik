<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function gettipePoli_Data() {
        $res = tipePoli::get();
        return response()->json($res);
    }

    public function posttipePoli_Input(Request $request) {
        dd($request);
        $poli = new tipePoli;
        $poli->nama = $request->input('name');
        $poli->save();
    }

    public function gettipePoli_Edit(Request $request)  {
        dd($request);
        $poli = tipePoli::find($request->id);
        return response()->json($poli);
    }

    public function posttipePoli_Update(Request $request) {
        // dd($request);
        $poli = tipePoli::find($request->id);
        $poli->nama = $request->input('name');
        $poli->save();
        return response()->json($poli);
    }

    public function posttipePoli_Delete() {
        $id = request()->input('id');
        $poli = tipePoli::find($id);
        $poli->delete();
    }
}
