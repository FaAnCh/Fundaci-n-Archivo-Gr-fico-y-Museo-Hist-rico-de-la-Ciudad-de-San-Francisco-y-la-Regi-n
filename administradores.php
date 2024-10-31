<?php
session_start();
include 'db.php'; // Incluye conexión a la base de datos
include 'functions.php';

// Verifica si el usuario es admin
if (!isset($_SESSION['username'])) {
    header("Location: auth.php"); // Redirecciona si no está autenticado
    exit();
}

// Solo permitir acceso si el usuario es "admin"
if ($_SESSION['username'] !== 'admin') {
    echo "<script>alert('Solo el usuario admin puede acceder aquí'); window.location.href = 'admin.php';</script>";
    exit();
}

// Función para registrar acciones de administradores
function logAdminAction($conn, $username, $action, $article_id = null) {
    $sql = "INSERT INTO admin_logs (admin_username, action, article_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $action, $article_id);
    $stmt->execute();
}

// Cambiar contraseña de administrador
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change_password'])) {
    $admin_id = $_POST['admin_id'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

    $sql = "UPDATE admins SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $new_password, $admin_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Cambió contraseña de administrador', $admin_id);
        echo "<script>alert('Contraseña actualizada exitosamente');</script>";
    } else {
        echo "<script>alert('Error al actualizar la contraseña');</script>";
    }
}

// Agregar nuevo administrador
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_admin'])) {
    $admin_username = $_POST['admin_username'];
    $admin_password = password_hash($_POST['admin_password'], PASSWORD_BCRYPT);

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

// Eliminar administrador
if (isset($_POST['delete_admin'])) {
    $admin_id = $_POST['admin_id'];
    $sql = "DELETE FROM admins WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $admin_id);
    if ($stmt->execute()) {
        logAdminAction($conn, $_SESSION['username'], 'Eliminó administrador', $admin_id);
        echo "<script>alert('Administrador eliminado');</script>";
    }
}

// Obtener todos los administradores
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

    <h2>Administradores</h2>
    <!-- Formulario para agregar un nuevo administrador -->
    <h3>Agregar nuevo administrador</h3>
    <form method="POST">
        <input type="text" name="admin_username" placeholder="Nombre de usuario" required><br>
        <input type="password" name="admin_password" placeholder="Contraseña" required><br>
        <button type="submit" name="add_admin">Agregar Administrador</button>
    </form>

    <!-- Listado de administradores existentes con opción de eliminar y cambiar contraseña -->
    <h3>Administradores Existentes</h3>
    <table>
        <tr>
            <th>Nombre de Usuario</th>
            <th>Acciones</th>
        </tr>
        <?php while ($admin = $admins->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($admin['username']); ?></td>
                <td>
                    <!-- Botón para eliminar administrador -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="admin_id" value="<?php echo $admin['id']; ?>">
                        <button type="submit" name="delete_admin" onclick="return confirm('¿Eliminar este administrador?')">Eliminar</button>
                    </form>

                    <!-- Formulario para cambiar la contraseña -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="admin_id" value="<?php echo $admin['id']; ?>">
                        <input type="password" name="new_password" placeholder="Nueva Contraseña" required>
                        <button type="submit" name="change_password">Cambiar Contraseña</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>