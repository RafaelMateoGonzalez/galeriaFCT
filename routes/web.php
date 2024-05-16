<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EntradaController;
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



Route::delete('/eventos/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [UserController::class, 'store'])->name('register');


//Route::get('/mis-entradas', [EntradaController::class, 'misEntradas'])->name('misEntradas');
Route::get('/mis-entradas/{user}', [EntradaController::class, 'misEntradas'])->name('misEntradas');


// Rutas en web.php
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);


Route::post('/entradas', [EntradaController::class, 'store'])->name('entradas.store');



// Ruta para mostrar el formulario de actualización
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');

// Ruta para procesar la actualización
Route::put('/user/update', [UserController::class, 'update'])->name('user.update');

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
