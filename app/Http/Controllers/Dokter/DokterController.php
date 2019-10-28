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
        //dd($request);

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

    public function getDokter_Edit(Request $request , $id){
        //dd($id);
        $dokter = dokter::find($id);
        // dd($dokter);
        // $dokter = dokter::where('id', 'id_tipe_poli')->where('id',$id)->get()
        // ->map(function($key){
        //     return [
        //         'id'                =>$key->id,
        //         'kode_dokter'       =>$key->kode_dokter,
        //         'poli'              =>$key->poli->nama,
        //         'alamat_dokter'     =>$key->alamatdokter->id,
        //         'nik'               =>$key->nik,
        //         'tanggal_lahir'     =>$key->tanggal_lahir,
        //         'nama_lengkap'      =>$key->nama_lengkap,
        //         'telepon'           =>$key->telepon,
        //         'hp'                =>$key->hp,
        //         'tempat_lahir'      =>$key->tempat_lahir,
        //         'usia'              =>$key->usia,
        //         'jenis_kelamin'     =>$key->jenis_kelamin,
        //         'agama'             =>$key->agama,
        //         'keterangan'        =>$key->keterangan
        //     ];
        // });
        //dd($dokter);
        return view('dokter.editDokter',['dokter'=>$dokter]);
        // return response()->json($dokter->id);
    }

    public function postDokter_Update(Request $request){
         //dd($request);
        // $dokterLama = dokter::find($request->id);
        // $idDokter = $dokterLama;
        // $idAlamat = $dokterLama->$alamatDokter;

        $alamat = alamatDokter::find($request->input('id_alamat'));
        $alamat->alamat     = $request->input('alamat');
        $alamat->kelurahan  = $request->input('kelurahan');
        $alamat->kecamatan  = $request->input('kecamatan');
        $alamat->provinsi   = $request->input('provinsi');
        $alamat->kabupaten  = $request->input('kota');
        $alamat->save();

        $dokter = dokter::find($request->input('id_dokter_aja'));
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

    public function postDokter_Delete() {

        $id = request()->input('id'); //Crypt::decryptString();
        
        $alamat = alamatDokter::find($id);
        // dd($alamat); 
        $alamat->delete();
        // $dokter = dokter::find($id);
        // $dokter->delete();

    }

}