<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use App\Mail\Registrar;

use App\Http\Controllers\RegistroController;

use App\Http\Controllers\CAnuncio;
use App\Http\Controllers\CInicio;


Route::get('/',[CInicio::class,'Inicio'])->name('inicio');
Route::get('/auncio', [CAnuncio::class, 'Anuncio'])-> name('anuncio');
Route::get('/nosotros', [CAnuncio::class, 'Nosotros'])-> name('nosotros');
Route::get('/anuncio_dos', [CAnuncio::class, 'AnuncioDos'])-> name('anuncio_dos');
Route::get('/blog', [CAnuncio::class, 'Blog'])-> name('blog');
Route::get('/contactanos', [CAnuncio::class, 'Contactanos'])-> name('contactanos');

/*Route::post('/registrar', function (){
    Mail::to(request()->destinatario)->send(new Registrar(request()->mensaje));
    return view('json.json');
})->name ('registrar'); */

Route::post('/download-json',[RegistroController::class,'generateJSON'])->name('download-json');
