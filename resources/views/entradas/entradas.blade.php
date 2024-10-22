<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas - FC Barcelona</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Si tienes estilos -->
</head>
<body>
    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('noticias.index') }}">Noticias</a></li>
            <li><a href="{{ route('partidos.index') }}">Calendario</a></li>
            <li><a href="{{ route('entradas.index') }}">Entradas</a></li>
            <li><a href="{{ route('ropa.index') }}">Ropa</a></li>
        </ul>
    </nav>

    <h1>Próximas Entradas para Vender</h1>
    <table>
        <thead>
            <tr>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
                <th>Fecha del Partido</th>
                <th>Estadio</th>
                <th>Precio de Entrada</th>
                <th>Acciones</th> <!-- Columna para el botón de compra -->
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
                        <!-- Botón de compra -->
                        <form action="{{ route('compras.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="partido_id" value="{{ $partido->id }}">
                            <input type="number" name="cantidad" value="1" min="1" required>
                            <button type="submit">Comprar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Si quieres agregar estilos adicionales -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</body>
</html>
