
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\NavigationController;

// arial
Route::get('/arial', function () {
    return view('arial'); // Asegúrate de tener pantalla1.blade.php
})->name('arial');

// carta
Route::get('/carta', function () {
    return view('carta'); // Asegúrate de tener pantalla2.blade.php
})->name('carta');

// asistente
Route::get('/asistente', function () {
    return view('asistente'); // Asegúrate de tener pantalla3.blade.php
})->name('asistente');

// Ruta de LOGOUT (ESENCIAL)
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Rutas de Google OAuth
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// 
//Route::get('/login', function () {
//    return view('login'); // Asegúrate de tener login.blade.php
//})->name('login');

//Rutas con controlador
Route::get('/login', [NavigationController::class, 'login'])->name('login');
Route::get('/administrador', [NavigationController::class, 'administrador'])->name('administrador');
Route::get('/asistente', [NavigationController::class, 'asistente'])->name('asistente');
Route::get('/formulario', [NavigationController::class, 'formulario'])->name('formulario');
Route::get('/dashboard', [NavigationController::class, 'dashboard'])->name('dashboard');
Route::get('/llenadoestudiantes', [NavigationController::class, 'llenadoestudiantes'])->name('llenadoestudiantes');
Route::get('/pantalla', [NavigationController::class, 'pantalla'])->name('pantalla');
