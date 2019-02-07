<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
