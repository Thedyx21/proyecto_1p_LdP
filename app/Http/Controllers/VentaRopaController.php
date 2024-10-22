<?php

namespace App\Http\Controllers;

use App\Models\VentaRopa;
use Illuminate\Http\Request;

class VentaRopaController extends Controller
{
    public function index()
    {
        // Obtener todas las prendas disponibles
        $ropa = VentaRopa::all();

        // Pasar los datos a la vista
        return view('ropa.index', compact('ropa'));
    }
}
