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
        $dari = $request->dari;
        $sampai = $request->sampai;
       

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

        $res = $datamedis->where('idPoli', $poli);
        if ($dari != null && $sampai != null){
            $res = $res->whereBetween('tanggal',[$dari, $sampai]);
        }

       
            // Dump array with object-arrays
        //dd($res[0]['id']);
        //return response()->json($res[0]);
        //return response()->json($datamedis);
        // return Datatables::of($res)->make(true);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'STOCK OPNAME');
        $sheet->setCellValue('A3', 'Number');
        $sheet->setCellValue('A4', 'Name');
        $sheet->setCellValue('E3', 'Date');
        $sheet->setCellValue('E4', 'Warehouse');
        $sheet->setCellValue('A6', 'Id');
        $sheet->setCellValue('B6', 'Code');
        $sheet->setCellValue('C6', 'Description');
        $sheet->setCellValue('D6', 'Price');
        $sheet->setCellValue('E6', 'UOM');
        $sheet->setCellValue('F6', 'QTY');

        $writer = new Xlsx($spreadsheet);
        $fileName = 'laporan.xlsx';
        $writer->save('export/'.$fileName);
        // $writer->save('php://ouput');
        $result['message'] = 'Success.';
        $result['downloadUrl'] = url('export/' . $fileName);


        //return view('report.laporanpdf',['res' => $res ]);
        return response()->json($result, 200);
         
    }
}
