@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Noticia</h1>
    <form action="{{ route('noticias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea name="contenido" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('noticias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
