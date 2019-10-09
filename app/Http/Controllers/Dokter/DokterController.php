<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\dokter;
use App\Model\alamat_dokter;
use Yajra\Datatables\Datatables;
use Dompdf\Dompdf;
use PDF;

class DokterController extends Controller
{


    public function getDokter_List() {
        $listDokter = dokter::get()
        ->map(function($key){
            return [
                'id'                =>$key->id,
                'kode_dokter'       =>$key->kode_dokter,
                'poli'              =>$key->poli->nama,
                'alamat_dokter'     =>$key->alamatdokter->id,
                'nik'               =>$key->nik,
                'tanggal_lahir'     =>$key->tanggal_lahir,
                'nama_lengkap'      =>$key->nama_lengkap,
                'telepon'           =>$key->telepon,
                'hp'                =>$key->hp,
                'tempat_lahir'      =>$key->tempat_lahir,
                'usia'              =>$key->usia,
                'jenis_kelamin'     =>$key->jenis_kelamin,
                'agama'             =>$key->agama,
                'keterangan'        =>$key->keterangan
            ];
        });
        return Datatables::of($listDokter)->make(true);
        return response()->json($listDokter);
        }

    public function postDokter_Input(Request $request) {
        dd($request);
        $cekData = dokter::select('id')->orderBy('created_at','desc')->first();
    }


}