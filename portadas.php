<?php
session_start();
include 'db.php';
include 'functions.php';

// Verifica si el usuario es admin
if (!isset($_SESSION['username'])) {
    header("Location: auth.php");
    exit();
}

// Función para registrar acciones de administradores
function logAdminAction($conn, $username, $action, $item_id = null) {
    $sql = "INSERT INTO admin_logs (admin_username, action, article_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $action, $item_id);
    $stmt->execute();
}

// Cambiar el logo del sitio
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_logo'])) {
    $newLogoURL = $_POST['new_logo_url'];
    if (updateLogoURL($conn, $newLogoURL)) {
        logAdminAction($conn, $_SESSION['username'], 'Actualizó logo del sitio');
        echo "<script>alert('Logo actualizado exitosamente');</script>";
    } else {
        echo "<script>alert('Error al actualizar el logo');</script>";
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
        echo "<script>alert('Portada agregada exitosamente');</script>";
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
        echo "<script>alert('Portada eliminada');</script>";
    }
}

// Obtener todas las imágenes hero y la URL del logo
$hero_images = $conn->query("SELECT * FROM hero_images");
$current_logo_url = getLogoURL($conn);

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
    <link rel="icon" type="image/png" href="<?php echo $current_logo_url; ?>">
    <link rel="stylesheet" href="estilos/admin/admin2.css">
</head>
<body>
<?php include "adminnav.php"; ?>

<!-- Botón para cerrar sesión -->
<form method="POST" style="display:inline;">
    <button type="submit" name="logout">Cerrar Sesión</button>
</form>

<h2>Gestión de Portadas</h2>

<!-- Formulario para actualizar el logo -->
<h3>Actualizar Logo del Sitio</h3>
<form method="POST">
    <input type="text" name="new_logo_url" placeholder="URL del nuevo logo" required oninput="updateLogoPreview(this.value)">
    <img id="logoPreview" src="<?php echo $current_logo_url; ?>" alt="Vista previa del logo" style="display:block; width:100px; height:auto; margin-top:10px;"><br>
    <button type="submit" name="update_logo">Actualizar Logo</button>
</form>

<!-- Formulario para agregar nueva imagen hero -->
<h3>Agregar nueva portada</h3>
<form method="POST" onsubmit="return previewImage();">
    <select name="zone" required>
        <option value="">Selecciona una zona</option>
        <option value="Inicio">Inicio</option>
        <option value="Nosotros">Nosotros</option>
        <option value="Biografías Locales">Biografías Locales</option>
    </select><br>
    <input type="text" name="image_url" placeholder="URL de la Imagen" required oninput="updatePreview(this.value)"><br>
    <img id="imagePreview" src="" alt="Vista previa de la portada" style="display:none; width:200px; height:auto;"><br>
    <button type="submit" name="add_hero_image">Agregar portada</button>
</form>

<!-- Script para previsualización de imagen y logo -->
<script>
    function updatePreview(url) {
        const imgPreview = document.getElementById('imagePreview');
        imgPreview.src = url;
        imgPreview.style.display = url ? 'block' : 'none';
    }

    function updateLogoPreview(url) {
        const logoPreview = document.getElementById('logoPreview');
        logoPreview.src = url;
    }

    function previewImage() {
        const urlInput = document.querySelector('input[name="image_url"]');
        if (urlInput.value) {
            updatePreview(urlInput.value);
        }
        return true; // Permite que el formulario se envíe
    }
</script>

<!-- Listado de imágenes hero existentes -->
<h3>Portadas Existentes</h3>
<table>
    <tr>
        <th>Zona</th>
        <th>URL de la Imagen</th>
        <th>Acciones</th>
    </tr>
    <?php while ($hero_image = $hero_images->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($hero_image['zone']); ?></td>
            <td><?php echo htmlspecialchars($hero_image['image_url']); ?></td>
            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="hero_image_id" value="<?php echo $hero_image['id']; ?>">
                    <button type="submit" name="delete_hero_image" onclick="return confirm('¿Eliminar esta portada?')">Eliminar</button>
                </form>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
