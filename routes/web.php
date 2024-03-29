<?php

use Illuminate\Support\Facades\Route;

//Acceso a través de clase - desde controller
use App\Http\Controllers\InmobiliariaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Acceso con rutas
Route::get('/', function () {
    return view('auth.login');
});

/*
Route::get('/inmobiliaria', function () {
    return view('inmobiliaria.index');
});

Accedemos directamente al controller y al método create
Route::get('/inmobiliaria/create', [InmobiliariaController::class,'create']);
*/

/*Con esta instrucción cambio todas las solicitudes de las vistas 
es decir acceder a todas las vistas 
*/
Route::resource('inmobiliaria',InmobiliariaController::class)->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/', [InmobiliariaController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', [InmobiliariaController::class, 'index'])->name('home');

});

