<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\VentaRopaController;
use App\Http\Controllers\AuthController; // Controlador para Login
use App\Http\Controllers\CompraController; // Asegúrate de importar tu controlador de compras
use App\Http\Controllers\LoginController;




/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Aquí registramos las rutas para la aplicación web.
|
*/

// Ruta para la página principal (Inicio)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta para las noticias con un controlador tipo resource
Route::resource('noticias', NoticiaController::class);

// Ruta para la página específica de 'Lamine'
Route::get('/noticias/lamine', [NoticiaController::class, 'lamine'])->name('noticias.lamine');

// Ruta para la página específica de 'Araujo'
Route::get('/noticia-araujo', function () {
    return view('noticias.araujo');
})->name('noticia.araujo');

// Ruta para la página específica de 'Ansu'
Route::get('/noticia-ansu', function () {
    return view('noticias.ansu');
})->name('noticia.ansu');

// Rutas para el calendario de la liga (controlador PartidoController)
Route::get('calendario', [PartidoController::class, 'index'])->name('partidos.index');
Route::get('calendario/create', [PartidoController::class, 'create'])->name('partidos.create');
Route::post('calendario', [PartidoController::class, 'store'])->name('partidos.store');

// Ruta para la página de venta de entradas (controlador EntradaController)
Route::get('/entradas', [EntradaController::class, 'index'])->name('entradas.index');

// Ruta para la compra de entradas
Route::post('/entradas/comprar', [EntradaController::class, 'comprar'])->name('comprar.entrada'); // Añade esta línea

// Ruta para la página de venta de ropa (controlador VentaRopaController)
Route::get('/ropa', [VentaRopaController::class, 'index'])->name('ropa.index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);


