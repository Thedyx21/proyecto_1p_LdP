<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta para la página principal utilizando el controlador HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta para las noticias utilizando un controlador tipo resource
Route::resource('noticias', NoticiaController::class);
