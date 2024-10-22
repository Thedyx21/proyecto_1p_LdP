<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use App\Models\TablaPosiciones; // Importa el modelo de la tabla de posiciones

class PartidoController extends Controller
{
    // Mostrar la lista de partidos en el calendario y la tabla de posiciones
    public function index()
    {
        $partidos = Partido::all(); // Obtener todos los partidos
        $tabla = TablaPosiciones::orderBy('puntos', 'desc')->get(); // Obtener la tabla de posiciones ordenada por puntos

        // Pasar ambas variables a la vista
        return view('calendario.index', compact('partidos', 'tabla')); // Cambiado a "calendario.index"
    }

    // Mostrar un formulario para agregar un nuevo partido
    public function create()
    {
        return view('calendario.create'); // Cambiado a "calendario.create"
    }

    // Almacenar un nuevo partido
    public function store(Request $request)
    {
        $request->validate([
            'equipo_local' => 'required',
            'equipo_visitante' => 'required',
            'fecha' => 'required|date',
            'resultado_local' => 'nullable|integer',
            'resultado_visitante' => 'nullable|integer',
        ]);

        Partido::create($request->all());

        return redirect()->route('partidos.index')->with('success', 'Partido agregado exitosamente');
    }
}
