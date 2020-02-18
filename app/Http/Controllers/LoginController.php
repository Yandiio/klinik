<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function postLogin(Request $request){
        
        if (Auth::attempt(['username' => $request->nama, 'password' => $request->password])) {
            # code...
            return response('sucsesss');
        }
           
       

       //dd(Auth::attempt(['username' => $request->nama, 'password' => $request->password]));
        
    }
}
