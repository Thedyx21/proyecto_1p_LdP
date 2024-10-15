<?php include('config.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noticias del FC Barcelona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .news-item {
        display: flex;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        padding: 10px;
        transition: box-shadow 0.3s ease;
      }
      .news-item:hover {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }
      .news-image {
        width: 150px;
        height: 100px;
        object-fit: cover;
        margin-right: 15px;
      }
      .news-content {
        flex: 1;
      }
      .news-title {
        font-size: 1.25rem;
        color: #A50044;
        font-weight: bold;
        margin-bottom: 5px;
      }
      .news-excerpt {
        font-size: 1rem;
        color: #555;
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
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="noticias.php">Noticias</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main content -->
    <div class="container my-5">
      <h2 class="text-center text-danger">Noticias del Club</h2>
      <div class="news-list">
        <?php
        // Consulta para obtener las noticias
        $stmt = $pdo->query('SELECT * FROM noticias ORDER BY fecha DESC');
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <div class="news-item">
            <img src="<?php echo $row['imagen']; ?>" alt="Miniatura" class="news-image">
            <div class="news-content">
              <h3 class="news-title"><a href="detalle-noticia.php?id=<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></a></h3>
              <p class="news-excerpt"><?php echo $row['resumen']; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
