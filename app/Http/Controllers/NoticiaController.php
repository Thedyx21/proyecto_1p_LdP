<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    // Mostrar todas las noticias
    
    public function index()
    {
        $noticias = Noticia::all();
        return view('noticias.index', compact('noticias'));
    }

    // Mostrar el formulario para crear una nueva noticia
    public function create()
    {
        return view('noticias.create');
    }

    // Guardar una nueva noticia en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        Noticia::create($request->all());

        return redirect()->route('noticias.index')->with('success', 'Noticia creada con éxito.');
    }

    // Mostrar una noticia específica
    public function show(Noticia $noticia)
    {
        return view('noticias.show', compact('noticia'));
    }

    // Mostrar el formulario para editar una noticia
    public function edit(Noticia $noticia)
    {
        return view('noticias.edit', compact('noticia'));
    }

    // Actualizar una noticia en la base de datos
    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        $noticia->update($request->all());

        return redirect()->route('noticias.index')->with('success', 'Noticia actualizada con éxito.');
    }

    // Eliminar una noticia
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('noticias.index')->with('success', 'Noticia eliminada con éxito.');
    }
    public function lamine() {
        return view('noticias.lamine'); // Asegúrate de que la vista 'noticias.lamine' exista
    }
}
