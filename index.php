<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Archivo Grafico</title>
    <meta name="description" content="Bienvenido a la Fundación Archivo Gráfico y Museo Histórico de San Francisco. Descubre nuestras exposiciones, programas educativos y eventos culturales que preservan y celebran la historia y el patrimonio de la región.">
<meta name="keywords" content="museo, Fundación Archivo Gráfico, San Francisco, exposiciones, historia, cultura, arte, patrimonio, educación, eventos, actividades, turismo">

    <link rel="stylesheet" href="estilos/style.css" />
    <link rel="icon" type="image/png" href="imagenes/logoAGM.png">
    <!-- Incluye Font Awesome para los iconos -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <?php
include 'db.php'; // Asegúrate de incluir tu conexión a la base de datos

// Consulta para obtener la imagen del héroe correspondiente a la zona "Inicio"
$inicio = $conn->query("SELECT image_url FROM hero_images WHERE zone = 'Inicio' LIMIT 1")->fetch_assoc();
?>
<style>
    /* HERO */
    .hero {
        background-image: url("<?php echo htmlspecialchars($inicio['image_url']); ?>");
        background-size: cover; /* Escala la imagen para cubrir todo el contenedor */
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        width: 100%;
        height: 75vh;
        background-position: center; /* Centra la imagen */
    }
    .hero h1 {
      bottom: 20%;
      left: 10%;
      color: white;
      font-size: 68px;
      padding: 20px;
      max-width: 50%;
      filter: drop-shadow(5px 5px 2px #0008);
      position: absolute;
    }
</style>
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <div class="navbar-logo">
          <a href="index.php">
            <img src="imagenes/logoAGM.png" alt="Logo AGM" />
          </a>
        </div>
        <div class="navbar-toggle" id="navbar-toggle">
          <i class="fa-solid fa-bars"></i>
        </div>

        <!-- Menú de navegación -->
        <ul class="navbar-menu" id="navbar-menu">
          <li class="navbar-item"><a href="index.php">Inicio</a></li>
          <li class="navbar-item"><a href="museo.php">Nosotros</a></li>
          <li class="navbar-item"><a href="archivo.php">Archivo</a></li>
          <li class="navbar-item"><a href="visitas.php">Visitas</a></li>
          <li class="navbar-item">
            <a href="biografias.php">Biografias Locales</a>
          </li>
          <li class="navbar-item"><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </header>
    <div class="content">
      <div class="hero">
      <h1>Fundación Archivo Grafico</h1>

      </div>
        <?php
  include 'db.php';
  $articles = $conn->query("SELECT * FROM articles ORDER BY created_at DESC");

  ?>
<!-- Sección de artículos en index.php -->
<div class="articles-section">
    <h2>Últimos Artículos</h2>
    <div class="articles-grid">
        <?php while ($article = $articles->fetch_assoc()): ?>
            <article class="article-item">
                <img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="Imagen del artículo" />
                <h3>
                    <a href="articulo.php?id=<?php echo $article['id']; ?>">
                        <?php echo htmlspecialchars($article['title']); ?>
                    </a>
                </h3>
                <p>
                    <?php echo htmlspecialchars($article['content']); ?>
                    <a href="articulo.php?id=<?php echo $article['id']; ?>" class="read-more">Leer más...</a>
                </p>
            </article>
        <?php endwhile; ?>
    </div>
</div>

    <!-- Pie de página -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-section">
          <h3>Contacto</h3>
          <p>Avenida de la Universidad 271, 2400 San Francisco (Córdoba)</p>
          <p>Teléfono: +54 3564-15608752</p>
          <p>Email: archivograficoymuseo@yahoo.com.ar</p>
        </div>
        <div class="footer-section">
          <h3>Redes Sociales</h3>
          <a href="https://www.facebook.com/proa" target="_blank"
            ><i class="fab fa-facebook"></i> Facebook</a
          ><br />
          <a href="https://www.twitter.com/proa" target="_blank"
            ><i class="fab fa-twitter"></i> Twitter</a
          ><br />
          <a href="https://www.instagram.com/proa" target="_blank"
            ><i class="fab fa-instagram"></i> Instagram</a
          >
        </div>
        <div class="footer-section">
          <h3>Enlaces Útiles</h3>
          <a href="">Nosotros</a><br />
          <a href="">Archivo</a><br />
          <a href="">Classroom</a><br />
          <a href="">Contacto</a><br />
        </div>
      </div>
      <div class="footer-container">
        <div class="footer-section">
          <h3>Nos apoyan:</h3>
          <p>
            Micron Fresar S.A. Akron, Axion; Compañía de Seguros El Norte;
            Macoser S.A.; Sindicato de Empleados de Comercio de San Francisco;
            Gobierno de la Provincia de Córdoba; Gobierno Municipal de la Ciudad
            de San Francisco; Centro de Estudios e Investigaciones Históricas
            Parque España (Cehipe) Rosario (Santa Fe); Fundación Bunge y Born
            (Buenos Aires).
          </p>
        </div>
        <div class="footer-section">
          <h3>Medios de comunicación que nos respaldan:</h3>
          <p>
            Diario La Voz de San Justo, AM 1050, RadioCanal, Canal 4 y FM
            Contacto; Radio Estación, El Periódico, El Tiempo, La Voz del
            Interior (Córdoba).
          </p>
        </div>
      </div>
      <p class="footer-copy">
        &copy; 2024 Proa Técnica. Todos los derechos reservados.
      </p>
    </footer>
    <script src="burguer.js"></script>
  </body>
</html>
