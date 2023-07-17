<?php

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovasController;
use App\Http\Controllers\SocixsController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\ParticipantesController;
use App\Models\Nova;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $eventos = Evento::orderBy('created_at', 'desc')->paginate(9);
    $novas=Nova::orderBy('created_at', 'desc')->paginate(3);

        return view("inicio")->with('eventos', $eventos)->with('novas', $novas); 

});

Route::get('politica_privacidade', function(){

return view("avisos_legais.politica_privacidade");

});


Route::get('galeria', function(){

    return view("galeria");
    
    });




Route::resource('socixs', SocixsController::class);

Route::resource('actividades', ActividadesController::class);

Route::resource('eventos', EventosController::class);

Route::resource('participantes', ParticipantesController::class);

Route::resource('novas', NovasController::class);





//Rutas autentificación
Auth::routes( ["register" => false]  );

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');


//Rutas contacto:

Route::get('contacto', [App\Http\Controllers\ContactarController::class, 'create'])->name('contacto');
Route::post('contacto', [App\Http\Controllers\ContactarController::class, 'enviar'])->name('contacto');