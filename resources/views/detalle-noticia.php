<?php include('config.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle de la Noticia</title>
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
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="noticias.php">Noticias</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Contenido de la noticia -->
    <div class="container my-5">
      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $pdo->prepare('SELECT * FROM noticias WHERE id = ?');
        $stmt->execute([$id]);
        $noticia = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($noticia) {
          ?>
          <h2 class="text-center text-danger"><?php echo $noticia['titulo']; ?></h2>
          <img src="<?php echo $noticia['imagen']; ?>" class="img-fluid my-4" alt="Imagen de la noticia">
          <p><?php echo $noticia['contenido']; ?></p>
          <?php
        } else {
          echo "<h2 class='text-center text-danger'>Noticia no encontrada</h2>";
        }
      } else {
        echo "<h2 class='text-center text-danger'>Noticia no especificada</h2>";
      }
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
