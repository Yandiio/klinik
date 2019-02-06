<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//test
class ApotikController extends Controller
{
    public function listAPotik()
    {
        return view('apotik.list');
    }
}
