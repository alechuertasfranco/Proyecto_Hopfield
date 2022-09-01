<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaracterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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
Auth::routes();

Route::get('/',[HomeController::class,'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/listarUsuarios', [HomeController::class, 'listarUsuarios'])->name('listarUsuarios');
Route::get('/plantilla', function () {
    if (Auth::user()) {
        return view('plantilla');
    }else {
        return view('login');
    }
    });
Route::get('/dashboard', function () {
    if (Auth::user()) {
        return view('home');
    }else {
        return view('login');
    }
});

Route::resource('caracter','CaracterController');
Route::resource('coordenada','CoordenadaController');
Route::resource('tipo','TipoController');

Route::Get('/caracter', [CaracterController::class,'listCaracter']);
Route::Get('/caracteres', [CaracterController::class,'listCaracteres']);
Route::Get('/caracteres/{tipo}', [CaracterController::class,'caracteresTipo']);
Route::post('/crear', [CaracterController::class,'store']);


