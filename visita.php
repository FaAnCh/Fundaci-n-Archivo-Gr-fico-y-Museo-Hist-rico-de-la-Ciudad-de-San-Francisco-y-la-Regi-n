<?php
session_start();
include 'db.php'; // Incluye conexión a la base de datos
include 'functions.php';

// Verifica si el usuario es admin
if (!isset($_SESSION['username'])) {
    header("Location: auth.php"); // Redirecciona si no está autenticado
    exit();
}

// Función para registrar acciones de administradores
function logAdminAction($conn, $username, $action, $article_id = null) {
    $sql = "INSERT INTO admin_logs (admin_username, action, article_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $action, $article_id);
    $stmt->execute();
}

// Agregar nueva visita
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_visit'])) {
    $visitor_name = $_POST['visitor_name'];
    $visit_date = $_POST['visit_date'];
    $image_url = $_POST['visit_image_url'];

    $sql = "INSERT INTO visits (visitor_name, visit_date, image_url) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $visitor_name, $visit_date, $image_url);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó visita', $stmt->insert_id);
        echo "<script>alert('Visita agregada exitosamente');</script>";
    }
}

// Eliminar visita
if (isset($_POST['delete_visit'])) {
    $visit_id = $_POST['visit_id'];
    $sql = "DELETE FROM visits WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $visit_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Eliminó visita', $visit_id);
        echo "<script>alert('Visita eliminada');</script>";
    }
}
// Obtiene todas las visitas
$visits = $conn->query("SELECT * FROM visits");
// Obtiene todos los administradores
$admins = $conn->query("SELECT * FROM admins");

// Cerrar sesión
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: auth.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gestión AGM</title>
    <link rel="stylesheet" href="estilos\admin\admin2.css">
    <link rel="icon" type="image/png" href="<?php echo getLogoURL($conn); ?>">
</head>
<body>
<?php
        include "adminnav.php";
    ?>
  
    <!-- Botón para cerrar sesión -->
    <form method="POST" style="display:inline;">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>

    <h2>Visitas</h2>
<!-- Formulario para agregar una nueva visita -->
<h3>Agregar nueva visita</h3>
<form method="POST">
    <input type="text" name="visitor_name" placeholder="Nombre del visitante" required><br>
    <input type="date" name="visit_date" required><br>
    <input type="text" name="visit_image_url" placeholder="URL de la Imagen" required><br>
    <button type="submit" name="add_visit">Agregar Visita</button>
</form>

<!-- Listado de visitas existentes con opciones de eliminación -->
<h3>Visitas Existentes</h3>
<table>
    <tr>
        <th>Nombre del Visitante</th>
        <th>Fecha de Visita</th>
        <th>Acciones</th>
    </tr>
    <?php while ($visit = $visits->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($visit['visitor_name']); ?></td>
            <td><?php echo htmlspecialchars($visit['visit_date']); ?></td>
            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="visit_id" value="<?php echo $visit['id']; ?>">
                    <button type="submit" name="delete_visit" onclick="return confirm('¿Eliminar esta visita?')">Eliminar</button>
                </form>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
</body>
</html>