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
// Agregar nuevo artículo
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_article'])) {
    $content_type = $_POST['content_type'];
    $category_id = $_POST['category_id']; // Captura el ID de la categoría seleccionada

    if ($content_type === 'text') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image_url = $_POST['image_url'];

        $sql = "INSERT INTO articles (title, content, image_url, category_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $title, $content, $image_url, $category_id);
    } elseif ($content_type === 'audio') {
        $audio_title = $_POST['audio_title'];
        $audio_link = $_POST['audio_link'];

        $sql = "INSERT INTO articles (title, content, category_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $audio_title, $audio_link, $category_id);
    } elseif ($content_type === 'video') {
        $video_title = $_POST['video_title'];
        $video_link = $_POST['video_link'];

        $sql = "INSERT INTO articles (title, content, category_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $video_title, $video_link, $category_id);
    }

    // Ejecutar la consulta y registrar la acción
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó artículo', $stmt->insert_id);
        echo "<script>alert('Artículo agregado exitosamente');</script>";
    } else {
        echo "<script>alert('Error al agregar el artículo');</script>";
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

// Obtiene todos los artículos
$articles = $conn->query("SELECT * FROM articles");

// Obtiene todas las categorías
$categories = $conn->query("SELECT * FROM categories");

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
<script>
function showInputs() {
    var contentType = document.getElementById("content_type").value;
    
    // Ocultar y deshabilitar todos los inputs
    document.getElementById("textInputs").style.display = "none";
    document.getElementById("audioInputs").style.display = "none";
    document.getElementById("videoInputs").style.display = "none";
    
    document.querySelectorAll('#textInputs input, #audioInputs input, #videoInputs input, textarea').forEach(function(input) {
        input.disabled = true;
        input.required = false; // Eliminar el requerimiento
    });

    // Mostrar y habilitar los inputs correspondientes
    if (contentType === "text") {
        document.getElementById("textInputs").style.display = "block";
        document.querySelectorAll('#textInputs input, textarea').forEach(function(input) {
            input.disabled = false;
            input.required = true; // Agregar el requerimiento
        });
    } else if (contentType === "audio") {
        document.getElementById("audioInputs").style.display = "block";
        document.querySelectorAll('#audioInputs input').forEach(function(input) {
            input.disabled = false;
            input.required = true; // Agregar el requerimiento
        });
    } else if (contentType === "video") {
        document.getElementById("videoInputs").style.display = "block";
        document.querySelectorAll('#videoInputs input').forEach(function(input) {
            input.disabled = false;
            input.required = true; // Agregar el requerimiento
        });
    }
}
</script>
    

    <?php
        include "adminnav.php";
    ?>

  
    <!-- Botón para cerrar sesión -->
    <form method="POST" style="display:inline;">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>

    <h2>Articulos</h2>
    <!-- Formulario para agregar un nuevo artículo -->
    <h3>Agregar nuevo artículo</h3>
    <form method="POST" id="contentForm">
    <label for="content_type">Tipo de Contenido:</label>
    <select name="content_type" id="content_type" required onchange="showInputs()">
        <option value="">Selecciona un tipo</option>
        <option value="text">Texto</option>
        <option value="audio">Audio</option>
        <option value="video">Video</option>
    </select><br>

    <div id="textInputs" style="display:none;">
        <input type="text" name="title" placeholder="Título" required><br>
        <textarea name="content" placeholder="Contenido del artículo" required></textarea><br>
        <input type="text" name="image_url" placeholder="URL de la Imagen" required><br>
    </div>

    <div id="audioInputs" style="display:none;">
        <input type="text" name="audio_title" placeholder="Título del Audio" required><br>
        <input type="url" name="audio_link" placeholder="Enlace de YouTube" required pattern="https?://(www\.)?youtube\.com/watch\?v=.*|https?://(www\.)?youtu\.be/.*"><br>
    </div>

    <div id="videoInputs" style="display:none;">
        <input type="text" name="video_title" placeholder="Título del Video" required><br>
        <input type="url" name="video_link" placeholder="Enlace de YouTube" required pattern="https?://(www\.)?youtube\.com/watch\?v=.*|https?://(www\.)?youtu\.be/.*"><br>
    </div>

    <label for="category_id">Categoría:</label>
    <select name="category_id" required>
        <option value="">Selecciona una categoría</option>
        <?php while ($category = $categories->fetch_assoc()): ?>
            <option value="<?php echo $category['id']; ?>"><?php echo htmlspecialchars($category['name']); ?></option>
        <?php endwhile; ?>
    </select><br>

    <button type="submit" name="add_article">Agregar Artículo</button>
</form>



<!-- Listado de artículos existentes con opciones de edición y eliminación -->
<h3>Artículos Existentes</h3>
    <table>
        <tr>
            <th>Título</th>
            <th>Acciones</th>
        </tr>
        <?php while ($article = $articles->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($article['title']); ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="article_id" value="<?php echo $article['id']; ?>">
                        <button type="submit" name="delete_article" onclick="return confirm('¿Eliminar este artículo?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    


    

</body>
</html>