<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
    public function jadwalDokter()
    {
        return view('dokter.jadwal.list');
    }
}
