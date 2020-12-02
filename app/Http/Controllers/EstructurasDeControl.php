<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EstructurasDeControl extends Controller
{
    //
    public function login(){
    return view('admon.login');
    }

    public function validar(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('pass');
        $key = $request->input('key');

        if ($user === 'julian.irigoyen' && $pass === 'Tole3' && $key === 'Hola') {
            $url = 'admon.dashboard';
        } else {
            $url = 'admon.login';
            echo 'Usuario o contraseña incorrectos';
        }
        return view($url, array(
                'user' => $request->input('user'),

        ));
    }

    public function archivo(){
        return view('archivo');
    }

}
