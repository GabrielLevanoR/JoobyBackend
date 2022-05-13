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
    return view('welcome');
});

Auth::routes();

Route::resource('tipo-usuarios', App\Http\Controllers\TipoUsuarioController::class )->middleware('auth');
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class )->middleware('auth');
Route::resource('conversaciones', App\Http\Controllers\ConversacioneController::class )->middleware('auth');
Route::resource('mensajes', App\Http\Controllers\MensajeController::class )->middleware('auth');
Route::resource('publicaciones', App\Http\Controllers\PublicacioneController::class )->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
