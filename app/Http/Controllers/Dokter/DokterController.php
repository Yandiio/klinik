<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DokterController extends Controller
{
    public function listDokter()
    {
        return view('dokter.list');
    }
    public function tambahDokter()
    {
        return view('dokter.tambah');
    }
    public function editDokter()
    {
        return view('dokter.edit');
    }
    public function lihatDokter()
    {
        return view('dokter.lihat');
    }
}
