<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noticias del FC Barcelona</title>
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
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/noticias">Noticias</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center">Últimas Noticias</h2>
        <div class="row justify-content-center">
            <!-- Primera noticia -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card mb-4 text-center">
                    <img src="images/1.jpeg" class="card-img-top" alt="Noticia">
                    <div class="card-body">
                        <h4 class="card-title">Comunicado médico de Lamine Yamal</h4>
                        <p class="card-text">Las pruebas realizadas han confirmado que tiene una sobrecarga en el isquiotibial del muslo izquierdo</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newsModal" 
                           onclick="showNews('Las pruebas realizadas esta mañana del 14 de octubre al jugador del primer equipo Lamine Yamal han confirmado que tiene una sobrecarga en el isquiotibial del muslo izquierdo. El tiempo de regreso a los entrenamientos vendrá marcado por su evolución. Cabe recordar que el delantero de La Masia estaba concentrado con la selección española para disputar una nueva jornada de partidos de Nations League. Precisamente, en la tercera jornada de este torneo disputó 91 minutos de la victoria ante Dinamarca, pero abandonó el verde del Estadio Nueva Condomina con molestias. Habitual también en los esquemas de Flick, esta campaña acumula 11 presencias y cinco tantos en el ataque del FC Barcelona.','Hola')">
                            Leer Más
                        </a>
                    </div>
                </div>
            </div>
            <!-- Segunda noticia -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card mb-4 text-center">
                    <img src="images/2.jpeg" class="card-img-top" alt="Noticia">
                    <div class="card-body">
                        <h4 class="card-title">Ronald Araujo, intervenido satisfactoriamente</h4>
                        <p class="card-text">El jugador del primer equipo se hizo una lesión en el tendón del isquiotibial del muslo derecho</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newsModal" 
                           onclick="showNews('El jugador del primer equipo Ronald Araujo ha sido intervenido satisfactoriamente este lunes de la lesión en el tendón del isquiotibial del muslo derecho.Esta intervención ha corrido a cargo del doctor Lasse Lempainen, bajo la supervisión de los servicios médicos del Club, en Turku (Finlandia). El tiempo de regreso a la competición vendrá marcado por su evolución.')">
                            Leer Más
                        </a>
                    </div>
                </div>
            </div>
            <!-- Tercera noticia -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card mb-4 text-center">
                    <img src="images/3.jpeg" class="card-img-top" alt="Noticia">
                    <div class="card-body">
                        <h5 class="card-title">Ansu Fati, con una lesión en la planta del pie derecho</h5>
                        <p class="card-text">Seguirá tratamiento conservador en Barcelona y el tiempo de regreso a los entrenamientos vendrá marcado por su evolución</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newsModal" 
                           onclick="showNews('En el entrenamiento de este martes el jugador del primer equipo Ansu Fati sufrió una lesión en la planta del pie derecho. Seguirá tratamiento conservador en Barcelona y el tiempo de regreso a los entrenamientos vendrá marcado por su evolución.')">
                            Leer Más
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModalLabel">Título de la Noticia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="newsModalContent">Contenido de la noticia...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showNews(title, content) {
            document.getElementById('newsModalLabel').innerText = title;
            document.getElementById('newsModalContent').innerText = content;
        }
    </script>
</body>
</html>
