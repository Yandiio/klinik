<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendapatanController extends Controller
{
    //
    public function pendapatan(){
        return view('dokter.pendapatan.pendapatan');
    
    }
}
