<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryModel;

class InventoryController extends Controller
{
    public function listData()
    {
        $obat = InventoryModel::select('*')->get();
        $no = 0;
        $data = array();
        foreach($obat as $list){
        $no ++;
        $row = array();
        $row[] = $no;
        
        $row[] = $list->nama_obat;
        $row[] = $list->jumlah_obat;
        $row[] = '<div class="btn-group">
                
                <a onclick="editForm('.$list->id.')" class="btn btn-circle btn-success"><i class="fa fa-edit"></i></a>
                </div>'.'<div class="btn-group">
                <a onclick="deleteData('.$list->id.')" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
                </div>';
                
        $data[] = $row;
        }

        $output = array("data" => $data);
        return response()->json($output);
    }
    public function listInventory()
    {
        $obat = InventoryModel::select('*')->get();
        return view('inventory.list', compact('obat'));
    }
}
