@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $noticia->titulo }}</h1>
    <p>{{ $noticia->contenido }}</p>
    <a href="{{ route('noticias.index') }}" class="btn btn-secondary">Regresar</a>
</div>
@endsection
