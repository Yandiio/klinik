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
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportExport;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

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
                'namapasien' =>$key->pendaftaran->pasien->nama_lengkap,
                'jk' => $key->pendaftaran->penjamin->pasien->jk,
                'beratbadan' => $key->berat_badan,
                'poli' => $key->pendaftaran->poli->nama,
                'hasildiagnosa' => $kalimat,
                'status' => $key->pendaftaran->status,
                'tanggal' => $key->created_at->format('Y-m-d')

           ];
        });
        return Datatables::of($datamedis)->make(true);
        // return response()->json($datamedis);

    }
    public function postLaporan(Request $request){
        //dd($request);
        $poli = $request->poli;
        $dari = $request->from;
        $sampai = $request->to;
       
        //dd($dari);

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
                'namapasien' =>$key->pendaftaran->pasien->nama_lengkap,
                'jk' => $key->pendaftaran->penjamin->pasien->jk,
                'beratbadan' => $key->berat_badan,
                'poli' => $key->pendaftaran->poli->nama,
                'idPoli' => $key->pendaftaran->poli->id,
                'hasildiagnosa' => $kalimat,
                'status' => $key->pendaftaran->status,
                'tanggal' => $key->created_at->format('Y-m-d')

           ];
        });

        
        if ($dari != null && $sampai != null){
            $res = $datamedis->whereBetween('tanggal',[$dari, $sampai]);
        }else if($poli != null){
            $res = $datamedis->where('idPoli', $poli);
        }else{
            $res = $datamedis;
        }

        //return view('report.laporanpdf',['res' => $res ]);
        return Datatables::of($res)->make(true);
         
    }
}
