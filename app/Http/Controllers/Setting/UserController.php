<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;
use App\Model\user;
use App\Model\role;
use App\Model\dokter;
use Auth;

class UserController extends Controller
{
    //

    public function listUser(){
        $user = user::get()
        ->map(function($key){

            return  [
                'id' => $key->id,
                'username' => $key->username,
                'role' => $key->role->name_role,
                'dokter' => $key->id_dokter
                
            ];
        });

        return Datatables::of($user)->make(true);
    }
    public function userTambah(Request $request){

        //dd($request);
        $user = new User;
        $user->username = $request->input('nama');
        $user->password = Hash::make($request->input('password'));
        $user->id_role = $request->input('role');
        $user->id_dokter = $request->input('dokter');
        $user->save();
    }
    public function editUser(Request $request){
        //dd($request);
        $user = User::find($request->id);

        return response()->json($user);
    }
    public function updateUser(Request $request){
        //dd($request);
        $user = User::find($request->id);
        $user->username = $request->input('editName');
        $user->password = Hash::make($request->input('editPassword'));
        $user->id_role = $request->input('editRole');
        $user->id_dokter = $request->input('editDokter');
        $user->save();

        return response()->json($user);
    }
    public function deleteUser(Request $request){
        
        $user = User::find($request->id);
        $user->delete();
    }
}
