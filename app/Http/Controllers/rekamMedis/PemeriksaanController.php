<?php

namespace App\Http\Controllers\rekamMedis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\pendaftaran;
use App\Model\penjamin;
use App\Model\rekamMedis;
use App\Model\tindakanDiagnosa;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

class PemeriksaanController extends Controller
{
    //

    public function list(){
        $user = Auth::user()->id_dokter;
        //dd($user);
        $daftar = rekamMedis::where('id_dokter',$user)->get()
        ->map(function($key){
            $diagnosa = tindakanDiagnosa::select('hasil_diagnosa')->where('id_rekammedis',$key->id)->get();
            //dd($diagnosa);
            $kalimat = [];
            // dd($kalimat);
            for ($i=0; $i <count($diagnosa) ; $i++) { 
                # code...
                $kalimat[] = $diagnosa[$i]['hasil_diagnosa'];
            }
            $kalimat = implode(", ",$kalimat);
            
            //dd($kalimat);
            return [
                'id' => $key->id,
                'noDaftar' => $key->pendaftaran->no_daftar,
                'noMedis' =>$key->no_medis,
                'nama' => $key->pendaftaran->pasien->nama_lengkap,
                'umur' => $key->pendaftaran->pasien->usia,
                'tanggaldaftar' => $key->pendaftaran->tgl_daftar,
                'status' => $key->pendaftaran->status,
                'dokter' => $key->dokter->nama_lengkap,
                'idDokter' => $key->dokter->id,
                'keluhan'   => $key->pendaftaran->keluhan,
                'diagnosa'      =>$kalimat
                
            ];
        });
        $daftar = $daftar->where('status',"2");
        return Datatables::of($daftar)->make(true);
         return response()->json($daftar);
    }
    public function dataAntrian(Request $request){
        $daftar = rekamMedis::where('id_dokter',$request->id)->get()
        ->map(function($key){
            return [
                'id' => $key->id,
                'noDaftar' => $key->pendaftaran->no_daftar,
                'noMedis' =>$key->no_medis,
                 'nama' => $key->pendaftaran->pasien->nama_lengkap,
                'umur' => $key->pendaftaran->pasien->usia,
                'tanggaldaftar' => $key->pendaftaran->tgl_daftar,
                'status' => $key->pendaftaran->status,
                'dokter' => $key->dokter->nama_lengkap,
                'idDokter' => $key->dokter->id
                
                 
            ];
        });
        $daftar = $daftar->whereNotIn('status',"2");
        return Datatables::of($daftar)->make(true);
        return response()->json($daftar);

    }
    public function detailAntrianDaftar(Request $request){
        
        $pasien = rekamMedis::where('id',$request->id)->get()
        ->map(function($key){
            return [
                'id' => $key->id,
                'idPendaftaran' => $key->pendaftaran->id,
                'noDaftar' => $key->pendaftaran->no_daftar,
                'noMedis' => $key->no_medis,
                'nama' => $key->pendaftaran->pasien->nama_lengkap,
                'umur' => $key->pendaftaran->pasien->usia,
                'tanggaldaftar' => $key->pendaftaran->tgl_daftar,
                'keluhan'       => $key->pendaftaran->keluhan
                
            ];
        });
        return response()->json($pasien);
    }

    public function pemeriksaanUpadte(Request $request){
        //dd($request);

        $hasilDiagnosa = $request->hasilDiagnosa;

        $pendaftaran = pendaftaran::find($request->idDaftar);
        $pendaftaran->status = 2;
        $pendaftaran->keluhan = $request->keluhan;
        $pendaftaran->save();



        for ($i=0; $i <count($hasilDiagnosa) ; $i++) { 
            # code...
                $lab = new tindakanDiagnosa;
                $lab->id_rekammedis = $request->idMedis;
                $lab->hasil_diagnosa = $hasilDiagnosa[$i];
                $lab->save();
        }

        return response("mantap");


       
    }
}
