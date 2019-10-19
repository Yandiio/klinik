<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\dokter;
use App\Model\alamat_dokter;
use App\Model\alamatDokter;
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
        // dd($request);
        $cekData = dokter::select('id')->orderBy('created_at','desc')->first();
        if($cekData){
            $car = "00";
            $nomor = $car . $cekData->id += 1 ;
        }else{
            $car = "00";
            $nomor = $car . '1';
        }
        // dd($nomor);

        $alamat = new alamatDokter;
        $alamat->alamat     = $request->input('alamat');
        $alamat->kelurahan  = $request->input('kelurahan');
        $alamat->kecamatan  = $request->input('kecamatan');
        $alamat->provinsi   = $request->input('provinsi');
        $alamat->kabupaten  = $request->input('kota');
        $alamat->save();

        $dokter = new dokter;
        $dokter->alamat_dokter  = $alamat->id;
        $dokter->kode_dokter    = $request->input('kd_dokter');
        $dokter->tipe_dokter    = $request->input('tipe_dokter');
        $dokter->id_tipe_poli   = $request->input('poli');
        $dokter->keterangan     = $request->input('keterangan');
        $dokter->nik            = $request->input('nik');
        $dokter->nama_lengkap   = $request->input('namaLengkap');
        $dokter->tanggal_lahir  = $request->input('tanggalLahir');
        $dokter->tempat_lahir   = $request->input('tempatLahir');
        $dokter->telepon       = $request->input('telepon');
        $dokter->hp             = $request->input('hp');
        $dokter->jenis_kelamin  = $request->input('jenisKelamin');
        // $dokter->email          = $request->input('email');
        $dokter->usia           = $request->input('usia');
        $dokter->agama          = $request->input('agama');
        $dokter->save();
        return response()->json($dokter->id);
    }

    public function getDokter_Edit($id){
        
        $dokter = dokter::where('id',$id)->get();
        return view ('dokter.editDokter', compact('dokter'));
    }

}