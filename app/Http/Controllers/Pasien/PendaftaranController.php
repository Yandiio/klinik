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
use Yajra\Datatables\Datatables;


class PendaftaranController extends Controller
{
    //
    public function pendaftaranList(){
        $listPasien = pendaftaran::get()
        ->map(function($key){
            return [
                'id'            => $key->id,
                'nikPasien'     => $key->pasien->nik,
                'nama'          => $key->pasien->nama_lengkap,
                'jenisKelamin'  => $key->pasien->jk,
                'golonganDarah' => $key->pasien->gd,
                'agama'         => $key->pasien->ag,
                'poli'          => $key->poli->nama,
                'tanggalDaftar' => $key->tgl_daftar,
                'ansuransi'     => $key->pasien->get(),
            ];
        });
        
        return Datatables::of($listPasien)->make(true);
    }
    public function tambahPendaftaran(Request $request){
        //dd($request);
        $cekData = pendaftaran::select('id')->orderBy('created_at','desc')->first();
        
        if($cekData){
            // dd($car);
             $car = "00";
             $nomor = $car . $cekData->id += 1 ;
         }else{
             $nomor = $car .'1';
         }
         //dd($nomor);

        $pasien = new pasien;
        $pasien->nik = $request->input('nik');
        $pasien->nama_lengkap = $request->input('namaLengkap');
        $pasien->tempat_lahir = $request->input('tempatLahir');
        $pasien->tanggal_lahir = $request->input('tanggalLahir');
        $pasien->telepone = $request->input('telepone');
        $pasien->usia = $request->input('umur');
        $pasien->jenis_kelamin = $request->input('jenisKelamin');
        $pasien->golongan_darah = $request->input('golonganDarah');
        $pasien->agama = $request->input('agama');
        $pasien->save();

        $penjamin = new penjamin;
        $penjamin->id_tipe_asuransi = $request->input('ansuransiAs');
        $penjamin->hubungan = $request->input('hubunganAs');
        $penjamin->id_pasien = $pasien->id;
        $penjamin->nik = $request->input('nikAs');
        $penjamin->nama_lengkap = $request->input('namaLengkapAs');
        $penjamin->telepone = $request->input('teleponeAs');
        $penjamin->hp = $request->input('hpAs');
        $penjamin->kode_karyawan = $request->input('kodeKaryawanAs');
        $penjamin->no_polis = $request->input('noPolisAs');
        $penjamin->tanggal_akhir_polis = $request->input('tanggalAkhirPolisAs');
        $penjamin->keterangan = $request->input('keteranganAs');
        $penjamin->save();

        $pendaftaran = new pendaftaran;
        $pendaftaran->id_pasien = $pasien->id;
        $pendaftaran->id_tipe_poli = $request->input('poli');
        $pendaftaran->no_daftar = $nomor;
        $pendaftaran->tgl_daftar = $request->input('tanggalDaftar');
        $pendaftaran->keluhan = $request->input('keluhan');
        $pendaftaran->save();




        return response("mantap");
    }
    
}