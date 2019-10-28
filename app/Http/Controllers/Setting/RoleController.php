<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\role;
use Yajra\Datatables\Datatables;

class RoleController extends Controller
{
    //

    public function roleList(){

        $role = role::all();

        
        return Datatables::of($role)->make(true);
       
    }
    public function roleData(){

        $role = role::all();

        
        return response()->json($role);
       
    }

    
}
