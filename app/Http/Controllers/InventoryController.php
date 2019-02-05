<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryModel;

class InventoryController extends Controller
{
    public function listInventory()
    {
        return view('inventory.list');
    }
    public function reportInventory()
    {
        return view('inventory.report');
    }
}
