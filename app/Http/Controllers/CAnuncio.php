<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CAnuncio extends Controller
{
    public function Anuncio(){

        return view('anuncio.anuncio');
    }
    public function Nosotros(){

        return view('anuncio.nosotros');
    
    }
    public function AnuncioDos(){

        return view('anuncio.anuncio_dos');

    }

    public function Blog(){

        return view('anuncio.blog');
    
    }
    public function Contactanos(){

        return view('anuncio.contactanos');
    
    }
    
   
}


