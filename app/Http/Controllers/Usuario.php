<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar(){
        return view('conectado');
    }

    function desconectado(){
        return view('conectado');
    }
}


