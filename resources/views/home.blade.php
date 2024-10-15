<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FC Barcelona - Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-image: url('/images/Barcelona.png'); /* Aquí puedes poner la URL de tu imagen */
            background-size: cover;
            background-position: center;
            height: 400px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .section-title {
            margin-top: 20px;
            text-align: center;
            color: #A50044; /* Color rojo granate de Barcelona */
        }
        .feature-box {
            border: 1px solid #A50044; /* Borde en color granate */
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .feature-box:hover {
            transform: scale(1.05);
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
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Calendario</a>
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

    <!-- Hero Section -->
    <section class="hero">
        <h1>Bienvenido al FC Barcelona</h1>
    </section>

    <!-- Features Section -->
    <div class="container my-5">
        <h2 class="section-title">Secciones Destacadas</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="feature-box">
                    <h3>Noticias</h3>
                    <p>Últimas noticias del club</p>
                    <a href="{{ url('/noticias') }}" class="btn btn-outline-dark">Ver Noticias</a> <!-- Enlace a la página de noticias -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <h3>Calendario y Liga</h3>
                    <p>Próximos partidos y posiciones</p>
                    <a href="{{ url('/calendario') }}" class="btn btn-outline-dark">Ver Calendario</a> <!-- Enlace a la página de calendario -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <h3>Venta de Entradas</h3>
                    <p>Compra entradas para los partidos</p>
                    <a href="{{ url('/entradas') }}" class="btn btn-outline-dark">Comprar Entradas</a> <!-- Enlace a la página de entradas -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <h3>Venta de Ropa</h3>
                    <p>Compra productos oficiales</p>
                    <a href="{{ url('/ropa') }}" class="btn btn-outline-dark">Ver Ropa</a> <!-- Enlace a la página de ropa -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
