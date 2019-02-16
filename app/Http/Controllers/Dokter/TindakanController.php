<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TindakanController extends Controller
{
    public function buatTindakan()
    {
        return view('dokter.tindakan.buat');
    }
    public function listTindakan()
    {
        return view('dokter.tindakan.list');
    }
    public function lihatTindakan()
    {
        return view('dokter.tindakan.lihat');
    }
    public function getMasterTindakan(){
        return view('dokter.tindakan.master-tindakan');
    }
}
