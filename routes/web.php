<?php

use App\Http\Controllers\cursoController;
use Illuminate\Support\Facades\Route;
//invocar el controlador desde su ruta
use App\Http\Controllers\miprimerController;

use App\Http\Controllers\heladosController;
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
    return view('welcome');
});

/*
Lo primero es nombrar la ruta entre comilla simple con
el nombre que desee darle. Luego va la coma, seguido de la función y el return
*/

Route::get('/miprimeraruta', function(){
    return 'Estoy aprendiedo laravel. Esta es mi primera ruta';
});

/*
Los parámetros son muy importantes en las rutas de las páginas web y los
indicamos entre llaves {}. Los parámetros van dentro de la
misma ruta
*/

Route::get('/minombre/{nombre}', function($nombre){
    return 'Hoy soy ' . $nombre;
});

Route::get('micontroller/{a}/{b}', [miprimerController::class,'suma']);

Route::get('habichuelaconarroz/{a}', [miprimerController::class,'carrera']);

/*la clase va igual que el método entre corchetes o paréntesis cuadrados.
La clase va acompañada de ::class, y el método tiene que llamarse igual a
como está en la clase y entre comilla simple
*/

Route::get('heladeria/{opcion}', [heladosController::class, 'helado']);

Route::resource('cursos', cursoController::class);

