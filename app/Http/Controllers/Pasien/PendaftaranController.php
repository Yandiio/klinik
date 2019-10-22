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
use QrCode;




class PendaftaranController extends Controller
{
    //
    public function pendaftaranList(){

        $listPasien = pasien::get()
        ->map(function($key){
            return [
                'id'            => $key->id,
                'nikPasien'     => $key->nik,
                'idPasien'     => $key->id,
                 'nama'          => $key->nama_lengkap,
                 'jenisKelamin'  => $key->jk,
                 'golonganDarah' => $key->gd,
                'agama'         => $key->ag,
                'provinsi'      => $key->alamatpasien->prvns->name,
                 'kabupaten'     => $key->alamatpasien->kbptn->name,
                 'kecamatan'     => $key->alamatpasien->kcmtn->name,
                'kelurahan'     => $key->alamatpasien->klrhn->name,
                'alamat'     => $key->alamatpasien->alamat,
                'usia'      => $key->usia,
                'lahir'      => $key->tempat_lahir
                
            ];
        });
        
         return Datatables::of($listPasien)->make(true);
        return response()->json($listPasien);
    }
    public function pendaftaranDetail(Request $request){
            //dd($request->id);
        $listPasien = pasien::where('id',$request->id)->get()
        ->map(function($key){
                
                
            $qr = $key->nik.'-'.$key->nama_lengkap;
            return [
                'id'            => $key->id,
                'nikPasien'     => $key->nik,
                'idPasien'     => $key->id,
                'nama'          => $key->nama_lengkap,
                'jenisKelamin'  => $key->jk,
                'golonganDarah' => $key->gd,
                'agama'         => $key->ag,
                'usia'          => $key->usia,
                'tanggalDaftar' => $key->tgl_daftar,
                'provinsi'      => $key->alamatpasien->prvns->name,
                'kabupaten'     => $key->alamatpasien->kbptn->name,
                'kecamatan'     => $key->alamatpasien->kcmtn->name,
                'kelurahan'     => $key->alamatpasien->klrhn->name,
                'alamat'     => $key->alamatpasien->alamat,
                'qrcode' => $qr,
                
            ];
        });
        
        // return Datatables::of($listPasien)->make(true);
        return response()->json($listPasien);
    }

    public function tambahPendaftaran(Request $request){
        //dd($request);
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
        $pendaftaran->status = 0;
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
        $pendaftaran->status = 0;
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
