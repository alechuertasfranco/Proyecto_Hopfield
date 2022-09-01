<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaracterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/',[HomeController::class,'index'])->middleware(['auth', 'verified']);;
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);
Route::get('/listarUsuarios', [HomeController::class, 'listarUsuarios'])->name('listarUsuarios')->middleware(['auth', 'verified']);
Route::get('/registrarUser/{id}', [HomeController::class, 'registrarUser'])->name('registrarUser')->middleware(['auth', 'verified']);

//Verificar y redirigir a verify
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

//Verificar email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Resend verified
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/plantilla', function () {
    if (Auth::user()) {
        return view('plantilla');
    }else {
        return view('login');
    }
    })->middleware(['auth', 'verified']);
Route::get('/dashboard', function () {
    if (Auth::user()) {
        return view('home');
    }else {
        return view('login');
    }
})->middleware(['auth', 'verified']);

Route::resource('caracter','CaracterController')->middleware(['auth', 'verified']);
Route::resource('coordenada','CoordenadaController')->middleware(['auth', 'verified']);
Route::resource('tipo','TipoController')->middleware(['auth', 'verified']);

Route::Get('/caracter', [CaracterController::class,'listCaracter'])->middleware(['auth', 'verified']);
Route::Get('/caracteres', [CaracterController::class,'listCaracteres'])->middleware(['auth', 'verified']);
Route::Get('/caracteres/{tipo}', [CaracterController::class,'caracteresTipo'])->middleware(['auth', 'verified']);
Route::post('/crear', [CaracterController::class,'store'])->middleware(['auth', 'verified']);


