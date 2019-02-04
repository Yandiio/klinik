<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//test
class ApotikController extends Controller
{
    public function listData()
    {
        $obat = ApotikModel::select('*')->get();
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
    public function listObat()
    {
        $obat = ApotikModel::select('*')->get();
        return view('inventory.list', compact('obat'));
    }
}
