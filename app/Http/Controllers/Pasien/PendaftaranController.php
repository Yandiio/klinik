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
use App\Model\alamatPasien;
use Yajra\Datatables\Datatables;
use Dompdf\Dompdf;
use PDF;




class PendaftaranController extends Controller
{
    //
    public function pendaftaranList(){

        $listPasien = pendaftaran::select('id','id_penjamin','id_tipe_poli','tgl_daftar')->get()
        ->map(function($key){
            return [
                'id'            => $key->id,
                'nikPasien'     => $key->penjamin->pasien->nik,
                'idPasien'     => $key->penjamin->pasien->id,
                'nama'          => $key->penjamin->pasien->nama_lengkap,
                'jenisKelamin'  => $key->penjamin->pasien->jk,
                'golonganDarah' => $key->penjamin->pasien->gd,
                'agama'         => $key->penjamin->pasien->ag,
                'poli'          => $key->poli->nama,
                'tanggalDaftar' => $key->tgl_daftar,
                'asuransi'      => $key->penjamin->asuransi->nama,
                'provinsi'      => $key->penjamin->pasien->alamatpasien->prvns->name,
                'kabupaten'     => $key->penjamin->pasien->alamatpasien->kbptn->name,
                'kecamatan'     => $key->penjamin->pasien->alamatpasien->kcmtn->name,
                'kelurahan'     => $key->penjamin->pasien->alamatpasien->klrhn->name,
                
                
            ];
        });
        
        return Datatables::of($listPasien)->make(true);
        return response()->json($listPasien);
    }
    public function pendaftaranDetail(Request $request){

        $listPasien = pendaftaran::select('id','id_penjamin','id_tipe_poli','tgl_daftar')->where('id',$request->id)->get()
        ->map(function($key){
            return [
                'id'            => $key->id,
                'nikPasien'     => $key->penjamin->pasien->nik,
                'idPasien'     => $key->penjamin->pasien->id,
                'nama'          => $key->penjamin->pasien->nama_lengkap,
                'jenisKelamin'  => $key->penjamin->pasien->jk,
                'golonganDarah' => $key->penjamin->pasien->gd,
                'agama'         => $key->penjamin->pasien->ag,
                'usia'          => $key->penjamin->pasien->usia,
                'poli'          => $key->poli->nama,
                'tanggalDaftar' => $key->tgl_daftar,
                'asuransi'      => $key->penjamin->asuransi->nama,
                'provinsi'      => $key->penjamin->pasien->alamatpasien->prvns->name,
                'kabupaten'     => $key->penjamin->pasien->alamatpasien->kbptn->name,
                'kecamatan'     => $key->penjamin->pasien->alamatpasien->kcmtn->name,
                'kelurahan'     => $key->penjamin->pasien->alamatpasien->klrhn->name,
                'alamat'     => $key->penjamin->pasien->alamatpasien->alamat,
                
                
            ];
        });
        
        // return Datatables::of($listPasien)->make(true);
        return response()->json($listPasien);
    }

    public function tambahPendaftaran(Request $request){
        dd($request);
        $cekData = pendaftaran::select('id')->orderBy('created_at','desc')->first();
        
        if($cekData){
            // dd($car);
            $car = "00";
            $nomor = $car . $cekData->id += 1 ;
        }else{
            $car = "00";
            $nomor = $car .'1';
        }
        //dd($nomor);

        $alamat = new alamatPasien;
        $alamat->alamat = $request->input('alamat');
        $alamat->kelurahan = $request->input('kelurahan');
        $alamat->kecamatan = $request->input('kecamatan');
        $alamat->provinsi = $request->input('provinsi');
        $alamat->kabupaten = $request->input('kota');
        $alamat->save();

        $pasien = new pasien;
        $pasien->nik = $request->input('nik');
        $pasien->alamat_pasien = $alamat->id;
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
        $pendaftaran->id_penjamin = $penjamin->id;
        $pendaftaran->id_tipe_poli = $request->input('poli');
        $pendaftaran->no_daftar = $nomor;
        $pendaftaran->tgl_daftar = $request->input('tanggalDaftar');
        $pendaftaran->keluhan = $request->input('keluhan');
        $pendaftaran->save();
        return response()->json($pendaftaran->id);
    }

    public function editPendaftaran($id){
        //dd($id);

        $pendaftaran = pendaftaran::where('id',$id)->get();
        //dd($pasien);
        // return response()->json($listPasien);
        // $pasien = pendaftaran::where('id',$id)->get();

        //dd($listPasien);

        return view('pasien.editPendaftaran',compact('pendaftaran'));

    }
    public function updatePendaftaran(Request $request){
        //dd($request->iddaftar);

        $pendaftaranLama = pendaftaran::find($request->iddaftar);
        $idAlamat = $pendaftaranLama->penjamin->pasien->alamatpasien->id;
        $idPasien = $pendaftaranLama->penjamin->pasien->id;
        $idPenjamin = $pendaftaranLama->penjamin->id;


        $cekData = pendaftaran::select('id')->orderBy('created_at','desc')->first();
        
        if($cekData){
            // dd($car);
            $car = "00";
            $nomor = $car . $cekData->id += 1 ;
        }else{
            $car = "00";
            $nomor = $car .'1';
        }
        
        $alamat = alamatPasien::find($idAlamat);
        $alamat->alamat = $request->input('alamat');
        $alamat->kelurahan = $request->input('kelurahan');
        $alamat->kecamatan = $request->input('kecamatan');
        $alamat->provinsi = $request->input('provinsi');
        $alamat->kabupaten = $request->input('kota');
        $alamat->save();

        $pasien = pasien::find($idPasien);
        $pasien->nik = $request->input('nik');
        $pasien->alamat_pasien = $alamat->id;
        $pasien->nama_lengkap = $request->input('namaLengkap');
        $pasien->tempat_lahir = $request->input('tempatLahir');
        $pasien->tanggal_lahir = $request->input('tanggalLahir');
        $pasien->telepone = $request->input('telepone');
        $pasien->usia = $request->input('umur');
        $pasien->jenis_kelamin = $request->input('jenisKelamin');
        $pasien->golongan_darah = $request->input('golonganDarah');
        $pasien->agama = $request->input('agama');
        $pasien->save();

        $penjamin = penjamin::find($idPenjamin );
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
        $pendaftaran->id_penjamin = $penjamin->id;
        $pendaftaran->id_tipe_poli = $request->input('poli');
        $pendaftaran->no_daftar = $nomor;
        $pendaftaran->tgl_daftar = $request->input('tanggalDaftar');
        $pendaftaran->keluhan = $request->input('keluhan');
        $pendaftaran->save();
        return response()->json($pendaftaran->id);
    }
    
    public function print(Request $request){       
        $nomer = pendaftaran::find($request->id);
        //dd($soaja);
        // $dompdf = new Dompdf();
        $dompdf = PDF::loadView('print.printnomer',['nomer' => $nomer ]);
        return $dompdf->stream();
    }
}
