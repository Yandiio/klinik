<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoliController extends Controller
{
    public function tipePoli()
    {
        return view('dokter.poli.list');
    }
}
