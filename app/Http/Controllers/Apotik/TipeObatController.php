<?php

namespace App\Http\Controllers\Apotik;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipeObatController extends Controller
{
    public function listTipeobat()
    {
        return view('apotik.tipeobat.list');
    }
}
