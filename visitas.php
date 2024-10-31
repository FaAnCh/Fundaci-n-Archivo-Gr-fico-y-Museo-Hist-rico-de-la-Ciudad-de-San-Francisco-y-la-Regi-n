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
<?php
      include "nav.php";
    ?>

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
    <?php
      include "footer.php";
    ?>
    <script src="burguer.js"></script>
</body>
</html>
