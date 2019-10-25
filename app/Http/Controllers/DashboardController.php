<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\pasien;
use App\Model\dokter;
use App\Model\rekamMedis;
use App\Model\tipePoli;
use App\Model\pendaftaran;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function jumlahPasien(){

        $jumlah = pasien::count();

        return response()->json($jumlah);
    }
    public function jumlahDokter(){

        $jumlah = dokter::count();

        return response()->json($jumlah);
    }
    public function jumlahRekamMedis(){

        $jumlah = rekamMedis::count();

        return response()->json($jumlah);
    }
    public function jumlahPoli(){

        $jumlah = tipePoli::count();

        return response()->json($jumlah);
    }

    public function detailChart(){

        $pendaftaran = pendaftaran::get()
        ->map(function($key){
        $hariini = Carbon::now()->format('d-m-Y');
        $lastWeek = Carbon::now()->subWeek()->format('d-m-Y');
        

        //$pendaftaran = pendaftaran::whereBetween('tgl_daftar', [$lastWeek,$hariini])->get();
        $minenol = pendaftaran::where('tgl_daftar',Carbon::now())->get()->count();
        $minsatu = pendaftaran::where('tgl_daftar',Carbon::now()->addDay(-1))->get()->count();
        $mindua = pendaftaran::where('tgl_daftar',Carbon::now()->addDay(-2))->get()->count();
        $mintiga = pendaftaran::where('tgl_daftar',Carbon::now()->addDay(-3))->get()->count();
        $minempat = pendaftaran::where('tgl_daftar',Carbon::now()->addDay(-4))->get()->count();
        $minlima = pendaftaran::where('tgl_daftar',Carbon::now()->addDay(-5))->get()->count();
        $minenam = pendaftaran::where('tgl_daftar',Carbon::now()->addDay(-6))->get()->count();

        
        $hariminsatu = pendaftaran::select('tgl_daftar')->where('tgl_daftar',Carbon::now()->addDay(-1))->first();
        $harimindua = pendaftaran::select('tgl_daftar')->where('tgl_daftar',Carbon::now()->addDay(-2))->first();
        $harimintiga = pendaftaran::select('tgl_daftar')->where('tgl_daftar',Carbon::now()->addDay(-3))->first();
        $hariminempat = pendaftaran::select('tgl_daftar')->where('tgl_daftar',Carbon::now()->addDay(-4))->first();
        $hariminlima = pendaftaran::select('tgl_daftar')->where('tgl_daftar',Carbon::now()->addDay(-4))->first();
        $hariminenam = pendaftaran::select('tgl_daftar')->where('tgl_daftar',Carbon::now()->addDay(-6))->first();
        
        $hariminsatu = $hariminsatu->tgl_daftar;
        $harimindua = $harimindua->tgl_daftar;
        $harimintiga = $harimintiga->tgl_daftar;
        $hariminempat = $hariminempat->tgl_daftar;
        $hariminlima = $hariminlima->tgl_daftar;
        $hariminenam = $hariminenam->tgl_daftar;
        //$tes = Carbon::parse($hariminsatu)->format('d-m-Y');
            return [
                'hariini' => $hariini,
                'lastweek' => $lastWeek,
                'data0' => $minenol,
                'data1' => $minsatu,
                'data2' => $mindua,
                'data3' => $mintiga,
                'data4' => $minempat,
                'data5' => $minlima,
                'data6' => $minenam,
                'hari1' => $hariminsatu,
                'hari2' => $harimindua,
                'hari3' => $harimintiga,
                'hari4' => $hariminempat,
                'hari5' => $hariminlima,
                'hari6' => $hariminenam,
            ];
        });


        

        return response()->json($pendaftaran);

    }
    public function tableDashboard(){

        $pendaftaran = pendaftaran::where('tgl_daftar',Carbon::now())->get()
        ->map(function($key){
            return [
                'nama' => $key->penjamin->nama_lengkap,
                'poli' => $key->poli->nama,
                'asuransi' => $key->penjamin->asuransi->nama,
                'tanggal' => $key->tgl_daftar,
                'status'    =>$key->status,
                'id'        =>$key->id

            ];
        });
        
        return Datatables::of($pendaftaran)->make(true);
        return response()->json($pendaftaran);
    }
    
    

}
