<?php
include 'db.php'; // Incluye la conexión a la base de datos
$articleId = $_GET['id']; // Obtener el ID del artículo de la URL
$article = $conn->query("SELECT * FROM articles WHERE id = $articleId")->fetch_assoc(); // Consulta para obtener el artículo

if ($article): // Comprobar si se encontró el artículo
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos/articulos.css" />
    <title>Artículo - Archivo Gráfico</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" type="image/png" href="imagenes/logoAGM.png">
    <style> 
    .hero {
      background-position: center; /* Centra la imagen */
      background-size: cover; /* Escala la imagen para cubrir todo el contenedor */
      background-repeat: no-repeat; /* Evita que la imagen se repita */
      width: 100%;
      height: 75vh;
      background-image: url("<?php echo htmlspecialchars($article['image_url']); ?>");
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
            <ul class="navbar-menu" id="navbar-menu">
                <li class="navbar-item"><a href="index.php">Inicio</a></li>
                <li class="navbar-item"><a href="museo.php">Nosotros</a></li>
                <li class="navbar-item"><a href="archivo.php">Archivo</a></li>
                <li class="navbar-item"><a href="visitas.php">Visitas</a></li>
                <li class="navbar-item"><a href="biografias.php">Biografias Locales</a></li>
                <li class="navbar-item"><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div class="hero">
        <h1><?php echo htmlspecialchars($article['title']); ?></h1> <!-- Título centrado -->

    </div> <!-- Aquí se muestra la imagen de fondo -->
    <div class="content">
        <div class="main">
            <div class="info">
                <p><?php echo htmlspecialchars($article['content']); ?></p>
            </div>
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
                <a href="https://www.facebook.com/proa" target="_blank"><i class="fab fa-facebook"></i> Facebook</a><br />
                <a href="https://www.twitter.com/proa" target="_blank"><i class="fab fa-twitter"></i> Twitter</a><br />
                <a href="https://www.instagram.com/proa" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
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
<?php else: ?>
    <h2>Artículo no encontrado</h2>
    <p>No se encontró el artículo que estás buscando.</p>
<?php endif; ?>
