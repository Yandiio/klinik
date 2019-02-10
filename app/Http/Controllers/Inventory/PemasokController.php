<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemasokController extends Controller
{
    public function listPemasok()
    {
        return view('inventory.pemasok.list');
    }
}
