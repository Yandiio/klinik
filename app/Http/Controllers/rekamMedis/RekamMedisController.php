<?php

namespace App\Http\Controllers\rekamMedis;

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
use App\Model\rekamMedis;
use App\Model\tindakanDiagnosa;
use App\Model\tindakanLab;

class RekamMedisController extends Controller
{
    //
    public function rekamMedisList(){

        $listPasien = pendaftaran::select('id','id_penjamin','id_tipe_poli','tgl_daftar','status','no_daftar')->get()
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
                'status'     => $key->status,
                'sts'     => $key->ts,
                'noDaftar'     => $key->no_daftar,
                'usia'     => $key->penjamin->pasien->usia,
                
                
            ];
        });
        // $listPasien = pendaftaran::all();
        return Datatables::of($listPasien)->make(true);
        //return response()->json($listPasien);
    }
    public function rekamMedisDetail(Request $request){

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
                'status'     => $key->status,
                
            ];
        });
        
        // return Datatables::of($listPasien)->make(true);
        return response()->json($listPasien);
    }

    public function tambahrekamMedis(Request $request){
        //dd($request);

        $iddiagnosa = $request->input('diagnosa');
        //dd($iddiagnosa);
        $idlab = $request->input('lab');
        $cekData = rekamMedis::select('id')->orderBy('created_at','desc')->first();
        
        if($cekData){
            // dd($car);
             $car = "RM-0";
             $nomor = $car . $cekData->id += 1 ;
         }else{
            $car = "RM-0";
             $nomor = $car .'1';
         }
         //dd($nomor);


        $rekamanmedis = new rekamMedis;
        $rekamanmedis->id_pendaftaran = $request->input('idDaftar');
        $rekamanmedis->id_dokter = 1;
        $rekamanmedis->no_medis = $nomor;
        $rekamanmedis->suhu_badan = $request->input('suhuBadan');
        $rekamanmedis->berat_badan = $request->input('beratBadan');
        $rekamanmedis->tinggi_badan = $request->input('tinggiBadan');
        $rekamanmedis->tekanan_darah = $request->input('tekananDarah');
        $rekamanmedis->save();

        $daftar = pendaftaran::find($request->idDaftar);
        $daftar->status = 1;
        $daftar->save();


        for ($i=0; $i <count($iddiagnosa) ; $i++) { 
            # code...
            $tindakan = new tindakanDiagnosa;
            $tindakan->id_diagnosa = $iddiagnosa[$i];
            $tindakan->id_rekammedis = $rekamanmedis->id;
            $tindakan->save();
        }

        for ($i=0; $i <count($idlab) ; $i++) { 
            # code...
                $lab = new tindakanLab;
                $lab->id_laboratorium = $idlab[$i];
                $lab->id_rekammedis = $rekamanmedis->id;
                $lab->save();
        }

        // return redirect('rekam-medis/list-rekam-medis');
    }

    public function editrekamMedis($id){
        //dd($id);

        $pendaftaran = pendaftaran::where('id',$id)->get();
        

        return view('rekamMedis.tambahRekamMedis',['pendaftaran'=>$pendaftaran]);

    }
    public function updaterekamMedis(Request $request){
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
