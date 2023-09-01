<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CInicio extends Controller
{
    public function Inicio(){

        return view('inicio.inicio');
    }
}
