<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Urea extends Controller
{
    //
    function login(Request $req){
        $usr= $req->get('em');
        $pass= $req->get('pass');
        
        $personas = \DB::table('usuario')
        ->select('nombre', 'password', 'email')
        ->where('email', '=', $usr)
        ->where('password', '=', $pass)
        ->get();
        
        if(sizeof($personas)>0)
        {
            return view('panelUrea');
        }
       else
       {
           $datos=[
                'msg'=>'Usuario y/o contraseña incorrectos'  
            ];
        return view('inicio',$datos);
       }
    }
}
