<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendario de Partidos - FC Barcelona</title>
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
                        <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('noticias*') ? 'active' : '' }}" href="{{ route('noticias.index') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('partidos*') ? 'active' : '' }}" href="{{ route('partidos.index') }}">Calendario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('entradas*') ? 'active' : '' }}" href="{{ route('entradas.index') }}">Entradas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('ropa*') ? 'active' : '' }}" href="{{ route('ropa.index') }}">Ropa</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="section-title">Tabla de Posiciones y Calendario de Partidos</h2>

        <div class="row">
            <!-- Tabla de Posiciones -->
            <div class="col-md-12 mb-4">
                <h3>Tabla de Posiciones</h3>

                <!-- Barra de búsqueda -->
                <div class="mb-3">
                    <input type="text" id="search" class="form-control" placeholder="Buscar equipo...">
                </div>

                <table class="table table-striped" id="leagueTable">
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">Equipo</th>
                            <th onclick="sortTable(1)">Puntos</th>
                            <th onclick="sortTable(2)">Partidos Jugados</th>
                            <th onclick="sortTable(3)">Victorias</th>
                            <th onclick="sortTable(4)">Empates</th>
                            <th onclick="sortTable(5)">Derrotas</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach($tabla as $team)
                            <tr>
                                <td>{{ $team->equipo }}</td>
                                <td>{{ $team->puntos }}</td>
                                <td>{{ $team->partidos_jugados }}</td>
                                <td>{{ $team->victorias }}</td>
                                <td>{{ $team->empates }}</td>
                                <td>{{ $team->derrotas }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Estadísticas adicionales -->
                <div class="mt-4">
                    <h4>Estadísticas Rápidas</h4>
                    <p><strong>Equipo con más puntos:</strong> FC Barcelona</p>
                    <p><strong>Equipo con más victorias:</strong> Real Madrid</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Calendario de Partidos -->
            <div class="col-md-12">
                <h3>Calendario de Partidos</h3>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Equipo Local</th>
                            <th>Equipo Visitante</th>
                            <th>Fecha</th>
                            <th>Resultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partidos as $partido)
                            <tr>
                                <td>{{ $partido->equipo_local }}</td>
                                <td>{{ $partido->equipo_visitante }}</td>
                                <td>{{ \Carbon\Carbon::parse($partido->fecha)->format('d-m-Y H:i') }}</td>
                                <td>
                                    {{ $partido->resultado_local ?? 'N/A' }} - {{ $partido->resultado_visitante ?? 'N/A' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('partidos.create') }}" class="btn btn-primary">Agregar Partido</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para la interacción de la tabla -->
    <script>
        // Función para ordenar la tabla al hacer clic en los encabezados
        function sortTable(columnIndex) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("leagueTable");
            switching = true;
            dir = "asc"; // Establecer la dirección de orden ascendente
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[columnIndex];
                    y = rows[i + 1].getElementsByTagName("TD")[columnIndex];
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }

        // Filtro para buscar equipos en la tabla
        document.getElementById('search').addEventListener('keyup', function() {
            var filter = this.value.toLowerCase();
            var rows = document.querySelectorAll("#tableBody tr");
            rows.forEach(function(row) {
                var teamName = row.getElementsByTagName("TD")[0].innerHTML.toLowerCase();
                if (teamName.indexOf(filter) > -1) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    </script>
</body>
</html>

