<?php

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
    return view('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta para el admin
Route::get('/admin', function () {
    return view('admin.index');
});

//ruta para el usuario
Route::get('/user', function () {
    return view('user.index');
});

//rutas para el administrador - peliculas
Route::resource('/admin/peliculas', \App\Http\Controllers\PeliculaController::class);
