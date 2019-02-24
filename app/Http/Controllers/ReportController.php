<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ReportController extends Controller
{
    public function datareportPasien()
    {
        return view('report.datapasien');
    }
    public function reportpoligigi()
    {
        return view('report.poligigi');
    }
    public function reportpolikebidanan()
    {
        return view('reprot.polikebidanan');
    }
    public function reportpolilab()
    {
        return view('report.polilab');
    }
    public function obatKeluar()
    {
        return view('report.obatkeluar');
    }
}
