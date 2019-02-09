<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    //
    public function listPasien(){
        return view ('pasien.type_pendaftaran');
    }
    public function tipePasien(){
        return view('pasien.tipe-pasien');
    }
    public function Pendaftaran(){
        return view ('pasien.pendaftaran');
    }
    public function listPendaftaran(){
        return view('pasien.list-pendaftaran');
    }
    public function editPendaftaran(){
        return view('pasien.edit-pendaftaran');
    }
    public function tambahPendaftaran(){
        return view('pasien.tambah-pendaftaran');
    }
}
