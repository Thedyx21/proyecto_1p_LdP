<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Página de inicio
    }

    public function noticias()
    {
        return view('noticias'); // Vista de noticias
    }

    public function calendario()
    {
        return view('calendario'); // Vista de calendario
    }

    public function entradas()
    {
        return view('entradas'); // Vista de entradas
    }

    public function ropa()
    {
        return view('ropa'); // Vista de ropa
    }

    public function login()
    {
        return view('login'); // Vista de login
    }
}
