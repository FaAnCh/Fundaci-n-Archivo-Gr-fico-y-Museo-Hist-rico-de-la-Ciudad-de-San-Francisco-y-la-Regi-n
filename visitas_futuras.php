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

// Agregar nuevo artículo
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_article'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image_url = $_POST['image_url'];
    $category_id = $_POST['category_id']; // Obtener categoría seleccionada

    $sql = "INSERT INTO articles (title, content, image_url, category_id) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $content, $image_url, $category_id); // Agregar categoría
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó artículo', $stmt->insert_id);
        echo "<script>alert('Artículo agregado exitosamente');</script>";
    }
}

// Eliminar artículo
if (isset($_POST['delete_article'])) {
    $article_id = $_POST['article_id'];
    $sql = "DELETE FROM articles WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $article_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Eliminó artículo', $article_id);
        echo "<script>alert('Artículo eliminado');</script>";
    }
}

// Agregar nueva categoría
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_category'])) {
    $category_name = $_POST['category_name'];

    $sql = "INSERT INTO categories (name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $category_name);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó categoría', $stmt->insert_id);
        echo "<script>alert('Categoría agregada exitosamente');</script>";
    }
}

// Eliminar categoría
if (isset($_POST['delete_category'])) {
    $category_id = $_POST['category_id'];
    $sql = "DELETE FROM categories WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $category_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Eliminó categoría', $category_id);
        echo "<script>alert('Categoría eliminada');</script>";
    }
}

// Agregar nuevo administrador
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_admin'])) {
    $admin_username = $_POST['admin_username'];
    $admin_password = password_hash($_POST['admin_password'], PASSWORD_BCRYPT); // Hash de la contraseña

    $sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $admin_username, $admin_password);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó administrador', $stmt->insert_id);
        echo "<script>alert('Administrador agregado exitosamente');</script>";
    } else {
        echo "<script>alert('Error al agregar administrador');</script>";
    }
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
// Agregar nueva imagen hero
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_hero_image'])) {
    $zone = $_POST['zone'];
    $image_url = $_POST['image_url'];

    $sql = "INSERT INTO hero_images (zone, image_url) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $zone, $image_url);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó portada', $stmt->insert_id);
        echo "<script>alert('portada agregada exitosamente');</script>";
    } else {
        echo "<script>alert('Error al agregar portada');</script>";
    }
}
// Eliminar imagen hero
if (isset($_POST['delete_hero_image'])) {
    $hero_image_id = $_POST['hero_image_id'];
    $sql = "DELETE FROM hero_images WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $hero_image_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Eliminó portada', $hero_image_id);
        echo "<script>alert(' portada eliminada');</script>";
    }
}
// Agregar nueva visita futura
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_upcoming_visit'])) {
    $date = $_POST['visit_date'];
    $time = $_POST['visit_time'];
    $description = $_POST['visit_description'];

    $sql = "INSERT INTO upcoming_visits (date, time, description) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $date, $time, $description);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó visita futura', $stmt->insert_id);
        echo "<script>alert('Visita futura agregada exitosamente');</script>";
    } else {
        echo "<script>alert('Error al agregar visita futura');</script>";
    }
}

// Eliminar visita futura
if (isset($_POST['delete_upcoming_visit'])) {
    $visit_id = $_POST['visit_id'];
    $sql = "DELETE FROM upcoming_visits WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $visit_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Eliminó visita futura', $visit_id);
        echo "<script>alert('Visita futura eliminada');</script>";
    }
}

// Obtener todas las visitas futuras
$upcoming_visits = $conn->query("SELECT * FROM upcoming_visits ORDER BY date, time");


// Obtiene todas las imágenes hero
$hero_images = $conn->query("SELECT * FROM hero_images");

// Obtiene todas las visitas
$visits = $conn->query("SELECT * FROM visits");
// Obtiene todos los artículos
$articles = $conn->query("SELECT * FROM articles");

// Obtiene todas las categorías
$categories = $conn->query("SELECT * FROM categories");

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
    <link rel="icon" type="image/png" href="imagenes/logoAGM.png">
</head>
<body>
<?php
        include "adminnav.php";
    ?>

  
    <!-- Botón para cerrar sesión -->
    <form method="POST" style="display:inline;">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>
<h2>Visitas Futuras</h2>
<!-- Formulario para agregar nueva visita futura -->
<h3>Agregar Visita Futura</h3>
<form method="POST">
    <input type="date" name="visit_date" required><br>
    <input type="time" name="visit_time" required><br>
    <textarea name="visit_description" placeholder="Descripción de la visita" required></textarea><br>
    <button type="submit" name="add_upcoming_visit">Agregar Visita Futura</button>
</form>

<!-- Listado de visitas futuras con opción de eliminación -->
<h3>Visitas Futuras</h3>
<table>
    <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>
    <?php while ($upcoming_visit = $upcoming_visits->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($upcoming_visit['date']); ?></td>
            <td><?php echo htmlspecialchars($upcoming_visit['time']); ?></td>
            <td><?php echo htmlspecialchars($upcoming_visit['description']); ?></td>
            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="visit_id" value="<?php echo $upcoming_visit['id']; ?>">
                    <button type="submit" name="delete_upcoming_visit" onclick="return confirm('¿Eliminar esta visita futura?')">Eliminar</button>
                </form>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>