<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'partido_id' => 'required|exists:proximo_partidos,id',
            'cantidad' => 'required|integer|min:1',
            'usuario_id' => 'required|exists:usuarios,id', // Asumiendo que tienes una tabla de usuarios
        ]);

        // Crear una nueva compra
        Compra::create([
            'partido_id' => $request->partido_id,
            'cantidad' => $request->cantidad,
            'usuario_id' => $request->usuario_id, // Puedes obtener el ID del usuario actual si es necesario
        ]);

        return redirect()->back()->with('success', 'Compra realizada con éxito.');
    }
}
