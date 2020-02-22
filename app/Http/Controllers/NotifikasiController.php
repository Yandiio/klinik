<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\pendaftaran;
use App\Model\rekamMedis;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    //
    public function rekamnotifList(){
        $listPasien = pendaftaran::select('status')->where('status',0)->get()->count();
        
        // $listPasien = pendaftaran::all();
        return response()->json($listPasien);
       
    }
    public function dokternotifList(Request $request){

        $user = Auth::user()->id_dokter;
        //dd($request);
        $listPasien = rekamMedis::where('id_dokter',$user)->get()
        ->map(function($key){

            return [
                'id' => $key->id,
                'norekammedis' => $key->no_medis,
                'status'    => $key->pendaftaran->status

            ];
        });
        $listPasien = $listPasien->where('status',2)->count();
        //dd($hitung);
        
        
        // $listPasien = pendaftaran::all();
        return response()->json($listPasien);
       
    }

}
    
