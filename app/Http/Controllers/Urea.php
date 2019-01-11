<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Urea extends Controller {

    //
    function login(Request $req) {
        $usr = $req->get('em');
        $pass = $req->get('pass');

        $personas = \DB::table('usuario')
                ->select('nombre', 'password', 'email')
                ->where('email', '=', $usr)
                ->where('password', '=', $pass)
                ->get();

        if (sizeof($personas) > 0) {
            return view('panelUrea');
        } else {
            $datos = [
                'msg' => 'Usuario y/o contraseña incorrectos'
            ];
            return view('inicio', $datos);
        }
    }

    function ComprobarRedireccion(Request $resq) {
        $d = $resq->get('urea');

        if ($d == 'Nuevo análisis') {
            $datos = \DB::table('ur_urea')
                    ->get();
            \Session::put('tUrea', $datos);
            return view('VistaUrea');
        }

        if ($d == 'Solución 32% (V-183)') {
            $datos = \DB::table('ur_solucion32_v183')
                    ->get();
            \Session::put('tV183', $datos);
            return view('VistaV183');
        }

        if ($d == 'Solución 32% (V-182)') {
            $datos = \DB::table('ur_solucion32_v182')
                    ->get();
            \Session::put('tV182', $datos);
            return view('VistaV182');
        }

        if ($d == 'Solución 32% (V-181)') {
            $datos = \DB::table('ur_solucion32_v181')
                    ->get();
            \Session::put('tV181', $datos);
            return view('VistaV181');
        }

        if ($d == 'Solución NGreen') {
            $datos = \DB::table('ur_ngreen')
                    ->get();
            \Session::put('tNgreen', $datos);
            return view('VistaNgreen');
        }

        if ($d == 'Solución 25% (Tanque 1)') {
            $datos = \DB::table('ur_solucion25_t1')
                    ->get();
            \Session::put('t25t1', $datos);
            return view('Vista25t1');
        }

        if ($d == 'Solución 25% (Tanque 2)') {
            $datos = \DB::table('ur_solucion25_t2')
                    ->get();
            \Session::put('t25t2', $datos);
            return view('Vista25t2');
        }

        if ($d == 'Torre de refrigeración') {
            $datos = \DB::table('ur_torre_ref')
                    ->get();
            \Session::put('tTR', $datos);

            return view('VistaUrea');
        }
    }
    
    /*
     * Metodo temporal para usar boton volver en las vistas
     */
    function volver(){
          return view('panelUrea');
    }
}
