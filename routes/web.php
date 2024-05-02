<?php
<<<<<<< HEAD

=======
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
>>>>>>> aa2ba57 (version_con_registro)
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/sobre-nosotros', 'sobreNosotros')->name('sobreNosotros');

<<<<<<< HEAD
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
=======

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [UserController::class, 'store'])->name('register');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


// Salir
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/users', [UserController::class, 'index'])->name('users.index');


// Rutas de recursos para Usuarios
Route::resource('users', UserController::class);
>>>>>>> aa2ba57 (version_con_registro)
