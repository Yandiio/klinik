<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;

class LokasiController extends Controller
{
    //
    public function getProvinsi(){
        $provinsi = Province::get();
        return response()->json($provinsi);
    }
    public function getKota(Request $request){
        
        $kota = City::where('province_id',$request->id)->get();
        return response()->json($kota);
    }
    public function getKecamatan(Request $request){
        //dd($request);
        $kecamatan = District::where('city_id',$request->id)->get();
        return response()->json($kecamatan);
    }
    public function getKelurahan(Request $request){
        //dd($request);
        $kelurahan = Village::where('district_id',$request->id)->get();
        return response()->json($kelurahan);
    }
}
