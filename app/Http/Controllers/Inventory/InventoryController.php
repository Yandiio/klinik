<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
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
    public function listExpired ()
    {
        return view('inventory.expired');
    }
    public function tambahStok()
    {
        return view('inventory.tambahstok');
    }
}
