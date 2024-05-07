<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/sobre-nosotros', 'sobreNosotros')->name('sobreNosotros');
Route::view('/inicioSesion', 'login')->name('inicioSesion');





Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [UserController::class, 'store'])->name('register');


// Rutas en web.php
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);


// Salir
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
