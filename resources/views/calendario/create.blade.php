<!-- resources/views/partidos/create.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Partido - FC Barcelona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FC Barcelona</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('noticias.index') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partidos.index') }}">partidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entradas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ropa</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="section-title">Agregar Partido</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('partidos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="equipo_local" class="form-label">Equipo Local</label>
                <input type="text" class="form-control" id="equipo_local" name="equipo_local" required>
            </div>
            <div class="mb-3">
                <label for="equipo_visitante" class="form-label">Equipo Visitante</label>
                <input type="text" class="form-control" id="equipo_visitante" name="equipo_visitante" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha del Partido</label>
                <input type="datetime-local" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="resultado_local" class="form-label">Resultado Local (opcional)</label>
                <input type="number" class="form-control" id="resultado_local" name="resultado_local">
            </div>
            <div class="mb-3">
                <label for="resultado_visitante" class="form-label">Resultado Visitante (opcional)</label>
                <input type="number" class="form-control" id="resultado_visitante" name="resultado_visitante">
            </div>

            <button type="submit" class="btn btn-primary">Agregar Partido</button>
            <a href="{{ route('partidos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
