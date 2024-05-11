<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {return view('index');});
Route::get('/', [EventoController::class, 'show']);

Route::view('/sobre-nosotros', 'sobreNosotros')->name('sobreNosotros');
Route::view('/inicioSesion', 'login')->name('inicioSesion');
Route::view('/nuevo-evento', 'nuevoEvento')->name('nuevoEvento');



Route::get('/eventos', [EventoController::class, 'show']);




Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [UserController::class, 'store'])->name('register');


// Rutas en web.php
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);


// Salir
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/crear-evento', [EventoController::class, 'crear'])->name('crear_evento');


//Route::group(['middleware' => ['is_admin']], function () {
    // Coloca aquí las rutas que solo pueden ser accedidas por administradores
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Otras rutas administrativas
    Route::get('/users', [UserController::class, 'index'])->name('users.index');


Route::get('/usuarios/{id}/eliminar', [UserController::class, 'eliminar'])->name('eliminar_cuenta');
Route::post('/usuarios/{id}/cambiar-tipo', [UserController::class, 'cambiarTipo'])->name('cambiar_tipo_cuenta');



//});
