<?php
session_start();
include 'db.php';
include 'functions.php';

if (!isset($_SESSION['username'])) {
    header("Location: auth.php");
    exit();
}

function logAdminAction($conn, $username, $action, $item_id = null) {
    $sql = "INSERT INTO admin_logs (admin_username, action, article_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $action, $item_id);
    $stmt->execute();
}

// Agregar nueva categoría
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_category'])) {
    $category_name = $_POST['category_name'];
    $sql = "INSERT INTO categories (name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $category_name);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó Categoría', $stmt->insert_id);
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

// Agregar subcategoría
if (isset($_POST['add_sub_category'])) {
    $sub_category_name = $_POST['sub_category_name'];
    $category_id = $_POST['category_id'];
    $sql = "INSERT INTO sub_categories (name, category_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $sub_category_name, $category_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Agregó sub-categoría', $stmt->insert_id);
        echo "<script>alert('Sub-categoría agregada exitosamente');</script>";
    }
}

// Eliminar subcategoría
if (isset($_POST['delete_sub_category'])) {
    $sub_category_id = $_POST['sub_category_id'];
    $sql = "DELETE FROM sub_categories WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $sub_category_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Eliminó sub-categoría', $sub_category_id);
        echo "<script>alert('Sub-categoría eliminada');</script>";
    }
}

// Obtener todas las categorías y subcategorías
$categories = $conn->query("SELECT * FROM categories");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gestión AGM</title>
    <link rel="stylesheet" href="estilos/admin/admin2.css">
</head>
<body>
    <nav>
        <div>
            <h1>Administración de Artículos</h1>
        </div>
        <div>
            <ul class="navbar-menu" id="navbar-menu">
                <li class="navbar-item"><a href="admin.php">Artículos</a></li>
                <li class="navbar-item"><a href="categorias.php">Categorías</a></li>
                <li class="navbar-item"><a href="visita.php">Visitas</a></li>
                <li class="navbar-item"><a href="portadas.php">Portadas</a></li>
                <li class="navbar-item"><a href="visitas_futuras.php">Visitas futuras</a></li>
                <li class="navbar-item"><a href="administradores.php">Administradores</a></li>
            </ul>
        </div>
    </nav>

    <!-- Botón para cerrar sesión -->
    <form method="POST" style="display:inline;">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>

    <h2>Categorías y Subcategorías</h2>

    <!-- Formulario para agregar una nueva categoría -->
    <h3>Agregar nueva categoría</h3>
    <form method="POST">
        <input type="text" name="category_name" placeholder="Nombre de la categoría" required><br>
        <button type="submit" name="add_category">Agregar Categoría</button>
    </form>

    <!-- Formulario para agregar una nueva sub-categoría -->
    <h3>Agregar nueva sub-categoría</h3>
    <form method="POST">
        <select name="category_id" required>
            <option value="">Selecciona una categoría</option>
            <?php while ($category = $categories->fetch_assoc()): ?>
                <option value="<?php echo $category['id']; ?>"><?php echo htmlspecialchars($category['name']); ?></option>
            <?php endwhile; ?>
            <?php $categories->data_seek(0); // Resetear el cursor ?>
        </select>
        <input type="text" name="sub_category_name" placeholder="Nombre de la sub-categoría" required><br>
        <button type="submit" name="add_sub_category">Agregar Sub-Categoría</button>
    </form>

    <!-- Tabla de categorías y subcategorías -->
    <h3>Categorías Existentes</h3>
    <table>
        <tr>
            <th>Nombre de la Categoría</th>
            <th>Sub-categorías</th>
            <th>Acciones</th>
        </tr>
        <?php while ($category = $categories->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($category['name']); ?></td>
                <td>
                    <!-- Listado de sub-categorías -->
                    <table>
                        <?php
                        $category_id = $category['id'];
                        $sub_categories = $conn->query("SELECT * FROM sub_categories WHERE category_id = $category_id");
                        while ($sub_category = $sub_categories->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($sub_category['name']); ?></td>
                                <td>
                                    <form method="POST" style="display:inline;">
                                        <input type="hidden" name="sub_category_id" value="<?php echo $sub_category['id']; ?>">
                                        <button type="submit" name="delete_sub_category" onclick="return confirm('¿Eliminar esta sub-categoría?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </td>
                <td>
                    <!-- Botón para eliminar la categoría -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
                        <button type="submit" name="delete_category" onclick="return confirm('¿Eliminar esta categoría y sus subcategorías?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>