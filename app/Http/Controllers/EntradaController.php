<?php

namespace App\Http\Controllers;

use App\Models\ProximoPartido;
use App\Models\Compra; // Importa el modelo Compra
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    // Mostrar las entradas disponibles para los próximos partidos
    public function index()
    {
        // Obtener todos los partidos desde la tabla `proximo_partidos`
        $partidos = ProximoPartido::all();

        // Retornar la vista con los partidos
        return view('entradas.index', compact('partidos'));
    }

    // Procesar la compra de entradas
    public function comprar(Request $request)
{
    // Validar la solicitud
    $request->validate([
        'partido_id' => 'required|exists:proximo_partidos,id',
        'cantidad' => 'required|integer|min:1',
    ]);

    // Obtener el partido para la compra
    $partido = ProximoPartido::find($request->partido_id);

    // Calcular el total a pagar
    $totalPago = $request->cantidad * $partido->precio_entrada;

    // Crear un nuevo registro de compra
    Compra::create([
        'partido_id' => $partido->id,
        'cantidad' => $request->cantidad,
        'usuario_id' => auth()->user()->id, // Asigna el ID del usuario autenticado
        // Puedes agregar más campos si es necesario
    ]);

    // Redireccionar de vuelta a la página de entradas con un mensaje de éxito
    return redirect()->route('entradas.index')->with('success', 'Entradas compradas con éxito.');
}

}
