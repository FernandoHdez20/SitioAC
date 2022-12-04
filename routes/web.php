<?php

use App\Http\Controllers\QuienessomosController;
use App\Http\Controllers\CuentaController;
use Illuminate\Support\Facades\Route;

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

Route::get('welcome', [QuienessomosController::class,'index'] )->name('modelo.index');
Route::get('modulos.quienessomos', [QuienessomosController::class,'somos'] )->name('modelo.Quienessomos');

Route::get('modulos.recursospadres', [QuienessomosController::class,'recursos'] )->name('modelo.recursospadres');

Route::get('modulos.directorio', [QuienessomosController::class,'directorio'] )->name('modelo.directorio');

Route::get('modulos.eventos', [QuienessomosController::class,'eventos'] )->name('modelo.eventos');

Route::get('modulos.aparatosfuncionales', [QuienessomosController::class,'aparatos'] )->name('modelo.aparatos');

Route::get('modulos.donador', [QuienessomosController::class,'donador'] )->name('modelo.donador');

//Cuenta
Route::get('cuenta.iniciarsesion',[CuentaController::class,'iniciarsesion'])->name('modelo.inciarsesion');

Route::get('cuenta.registro', [CuentaController::class,'registro'] )->name('modelo.registro');

Route::get('cuenta.registroDonador', [CuentaController::class,'registroDonador'] )->name('modelo.registroDonador');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
