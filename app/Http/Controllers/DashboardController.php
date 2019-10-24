<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\pasien;
use App\Model\dokter;
use App\Model\rekamMedis;
use App\Model\tipePoli;

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
    
    

}
