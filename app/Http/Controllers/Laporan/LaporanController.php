<?php

namespace App\Http\Controllers\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\rekamMedis;
use App\Model\pasien;
use App\Model\alamat_pasien;
use App\Model\tipeAsuransi;
use App\Model\hubungan;
use App\Model\penjamin;
use App\Model\pendaftaran;
use App\Model\alamatPasien;
use Yajra\Datatables\Datatables;
use App\Model\tindakanDiagnosa;
use App\Model\tindakanLab;

class LaporanController extends Controller
{
    //

    public function listLaporan(){

        $datamedis = rekamMedis::get()
        ->map(function($key){
            //cari diagnosa
            $diagnosa = tindakanDiagnosa::select('hasil_diagnosa')->where('id_rekammedis',$key->id)->get();
            //dd($diagnosa);
            $kalimat = [];
            // masukan ke array;
            for ($i=0; $i <count($diagnosa) ; $i++) { 
                # code...
                $kalimat[] = $diagnosa[$i]['hasil_diagnosa'];
            }
            //menjadikan koma
            $kalimat = implode(", ",$kalimat);
           return [
                'id' => $key->id,
                'nomedis' => $key->no_medis,
                'asuransi' => $key->pendaftaran->penjamin->asuransi->nama,
                'namapasien' =>$key->pendaftaran->penjamin->pasien->nama_lengkap,
                'jk' => $key->pendaftaran->penjamin->pasien->jk,
                'beratbadan' => $key->berat_badan,
                'poli' => $key->pendaftaran->poli->nama,
                'hasildiagnosa' => $kalimat,
                'status' => $key->pendaftaran->status

           ];
        });
        return Datatables::of($datamedis)->make(true);
        // return response()->json($datamedis);

    }
    public function postLaporan(Request $request){
        //dd($request);
        $dariTanggal = $request->dari;
        $sampaiTanggal = $request->sampai;
        $poli = $request->poli;

        $data = rekamMedis::all();
        return responso()->json($data);
    }
}
