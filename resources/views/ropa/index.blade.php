<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de Ropa FC Barcelona</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Si tienes estilos -->
</head>
<body>
    <h1>Ropa Disponible para Venta</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Talla</th>
                <th>Precio</th>
                <th>Cantidad Disponible</th>
            </tr>
        </thead>
        <tbody>
            @if ($ropa->count() > 0)
                @foreach ($ropa as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->talla }}</td>
                        <td>{{ $item->precio }} €</td>
                        <td>{{ $item->cantidad }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No hay ropa disponible en este momento.</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
