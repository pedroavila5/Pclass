<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Registrar;
use Illuminate\Support\Facades\Mail;
class RegistroController extends Controller

{

    public function generateJSON(Request $request){ 
        $datos =[
            'Nombres' => $request->input('nombre'),
            'Apellidos'=> $request->input('apellidos'),
        ];
        $jsonDatos = json_encode($datos);
        $filename = 'datos.json';
        $mensaje = "Correo : ".$request->input('destinatario');
        Mail::to($request->input('destinatario'))->send(new Registrar($mensaje));
        
        return response()->stream(
            function() use ($jsonDatos){
                echo $jsonDatos;
            },
            200,
            [
                'Content-Type' => 'application/json',
                'Content-Disposition' => 'attachment; filename="'.$filename.'"',
            ]
            );
    }
}