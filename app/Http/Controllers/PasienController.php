<?php

namespace App\Http\Controllers;

use validator;
use Illuminate\Http\Request;
use App\Model\pasien;
use App\Model\penjamin;

class PasienController extends Controller
{
    public function getPasien_Index(){
        return view('pasien.listPendaftaran');
    }

    public function getPasien_list(){
        $res = pasien::select('id','id_penjamin','nik','tanggal_lahir','nama_lengkap','telepone','hp','tempat_lahir','usia','jenis_kelamin','golongan_darah','agama','keterangan')
        ->with([
            'penjamin'      => function($query){
                return $query->select('id', 'id_tipe_asuransi');
            }
        ])->get()
        ->map(function($key){
            return [
                'id'                    =>$key->id,
                'id_penjamin'           =>$key->id_penjamin,
                'nik'                   =>$key->nik,
                'tanggal_lahir'         =>$key->tanggal_lahir,
                'nama_lengkap'          =>$key->nama_lengkap,
                'telepone'              =>$key->telepon,
                'hp'                    =>$key->hp,
                'tempat_lahir'          =>$key->tempat_lahir,
                'usia'                  =>$key->usia,
                'jenis_kelamin'         =>$key->jenis_kelamin,
                'golongan_darah'        =>$key->golongan_darah,
                'agama'                 =>$key->agama,
                'keterangan'            =>$key->keterangan,
            ];
        });
        // return Datatable::of($res)->make(true);
        return response()->json($res);
    }
}
