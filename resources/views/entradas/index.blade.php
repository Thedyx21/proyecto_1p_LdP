<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas - FC Barcelona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-title {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
            color: #A50044; /* Color rojo granate del FC Barcelona */
        }
        .table-container {
            margin: 40px auto;
        }
        .table th {
            background-color: #A50044;
            color: white;
            text-align: center;
        }
        .table td {
            text-align: center;
        }
        .btn-comprar {
            background-color: #004D98; /* Azul oscuro del FC Barcelona */
            color: white;
            border-radius: 25px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .btn-comprar:hover {
            background-color: #A50044; /* Cambia a granate al pasar el ratón */
        }
    </style>
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
                        <a class="nav-link" href="{{ route('partidos.index') }}">Calendario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/entradas') }}">Entradas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/ropa') }}">Ropa</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Título de la sección -->
    <div class="container">
        <h1 class="section-title">Próximos Partidos - Venta de Entradas</h1>

        <!-- Tabla de entradas -->
        <div class="table-container">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Equipo Local</th>
                        <th>Equipo Visitante</th>
                        <th>Fecha del Partido</th>
                        <th>Estadio</th>
                        <th>Precio de Entrada</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partidos as $partido)
                        <tr>
                            <td>{{ $partido->equipo_local }}</td>
                            <td>{{ $partido->equipo_visitante }}</td>
                            <td>{{ $partido->fecha_partido }}</td>
                            <td>{{ $partido->estadio }}</td>
                            <td>{{ $partido->precio_entrada }} €</td>
                            <td>
                                <form action="{{ route('comprar.entrada') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="partido_id" value="{{ $partido->id }}">
                                    <input type="number" name="cantidad" value="1" min="1" required>
                                    <button type="submit" class="btn btn-comprar">Comprar Entrada</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
