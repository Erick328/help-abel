<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Categorias
//Route::resource('/categorias', CategoriaController::class);
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::get('/categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');

//Articulos
//Route::resource('/articuloss', ArticuloController::class);
Route::get('/articulos', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('/articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
Route::post('/articulos', [ArticuloController::class, 'store'])->name('articulos.store');
Route::put('/articulos/{id}', [ArticuloController::class, 'update'])->name('articulos.update');
Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy'])->name('articulos.destroy');
Route::get('/articulos/edit/{id}', [ArticuloController::class, 'edit'])->name('articulos.edit');




