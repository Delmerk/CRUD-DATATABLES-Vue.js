<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listar_usuarios', [App\Http\Controllers\HomeController::class, 'listar'])->name('listar_usuarios');
Route::post('/crear_usuarios', [App\Http\Controllers\HomeController::class, 'store'])->name('crear_usuarios');
Route::put('/editar_usuarios/{idUser}', [App\Http\Controllers\HomeController::class, 'update'])->name('editar_usuarios');
Route::delete('/eliminar_usuarios/{idUser}', [App\Http\Controllers\HomeController::class, 'delete'])->name('eliminar_usuarios');

// Route::resource('home', App\Http\Controllers\HomeController::class)->except(['show', 'edit',]);
// Route::resource('home', HomeController::class)->except(['show', 'edit',]);