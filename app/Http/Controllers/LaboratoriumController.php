<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    public function list()
    {
        return view('laboratorium.list');
    }

    public function tambah()
    {
        return view('laboratorium.tambah');
    }
}
