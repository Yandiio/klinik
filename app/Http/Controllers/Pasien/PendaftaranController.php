<?php

namespace App\Http\Controllers\Pasien;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\pasien;
use App\Model\alamat_pasien;
use App\Model\tipeAsuransi;
use App\Model\hubungan;
use App\Model\penjamin;
use App\Model\pendaftaran;


class PendaftaranController extends Controller
{
    //
    public function pendaftranList(){
        $pasien = pasien::all();
        return response()->json();
    }
    public function tambahPendaftaran(Request $request){
        //dd($request);
        $pasien = new pasien;
        $pasien->nik = $request->input('nik');
        $pasien->nama_lengkap = $request->input('namaLengkap');
        $pasien->tempat_lahir = $request->input('tempatLahir');
        $pasien->tanggal_lahir = $request->input('tanggalLahir');
        $pasien->telepone = $request->input('telepone');
        $pasien->usia = $request->input('umur');
        $pasien->jenis_kelamin = $request->input('jenisKelamin');
        $pasien->golongan_darah = $request->input('golongan_darah');
        $pasien->agama = $request->input('agama');
        $pasien->keterangan = $request->input('keterangan');
        $pasien->save();



        // return response($request);
    }
    
}
