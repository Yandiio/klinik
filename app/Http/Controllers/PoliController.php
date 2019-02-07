<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function tipePoli()
    {
        return view('poli.list');
    }
}
