@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Noticia</h1>
    <form action="{{ route('noticias.update', $noticia) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $noticia->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea name="contenido" class="form-control" required>{{ $noticia->contenido }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('noticias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
