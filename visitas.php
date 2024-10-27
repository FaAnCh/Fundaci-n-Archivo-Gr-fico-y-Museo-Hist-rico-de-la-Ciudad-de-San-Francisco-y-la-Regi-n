<?php
session_start();
include 'db.php'; // Incluye conexión a la base de datos

// Verifica si el usuario es admin (opcional)
if (!isset($_SESSION['username'])) {
    header("Location: auth.php"); // Redirecciona si no está autenticado
    exit();
}

// Obtiene todas las fotos de visitas, ordenadas de más reciente a más antigua
$visits = $conn->query("SELECT * FROM visits ORDER BY created_at DESC");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Visitas</title>
    <meta name="description" content="Planifica tu visita al Fundación Archivo Gráfico y Museo Histórico de San Francisco. Encuentra información sobre horarios, tarifas, y programa de visitas escolares.">
    <meta name="keywords" content="visitas, horarios, tarifas, Fundación Archivo Gráfico, museo, San Francisco, programa escolar, turismo, actividades, educación">
    <link rel="icon" type="image/png" href="imagenes/logoAGM.png">
    <link rel="stylesheet" href="estilos/visitasof.css" />
    <!-- Incluye Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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

<main>
    <section class="gallery">
        <h1>Galería de Visitas</h1>
        <div class="gallery-grid">
            <?php if ($visits->num_rows > 0): ?>
                <?php while ($photo = $visits->fetch_assoc()): ?>
                    <div class="gallery-item">
                        <img src="<?php echo htmlspecialchars($photo['image_url']); ?>" alt="Foto de visita" />
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="gallery-message">No hay fotos de visitas disponibles.</p>
            <?php endif; ?>
        </div>
    </section>
</main>


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
        <p class="footer-copy">&copy; 2024 Proa Técnica. Todos los derechos reservados.</p>
    </footer>
    <script src="burguer.js"></script>
</body>
</html>