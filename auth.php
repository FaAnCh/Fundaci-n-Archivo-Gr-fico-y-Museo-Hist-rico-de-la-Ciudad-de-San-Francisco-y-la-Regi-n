<?php
session_start();
include 'db.php'; // Incluye conexión a la base de datos

// Verifica si ya hay una sesión activa
if (isset($_SESSION['username'])) {
    header("Location: admin.php"); // Redirecciona a la página admin si ya está autenticado
    exit();
}

// Manejo del inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar las credenciales del administrador
    $sql = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        
        // Verifica la contraseña
        if (password_verify($password, $admin['password'])) {
            // Inicia sesión si las credenciales son correctas
            $_SESSION['username'] = $admin['username'];
            header("Location: admin.php"); // Redirecciona a admin.php
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
        }
    } else {
        echo "<script>alert('Nombre de usuario no encontrado');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Administrador</title>
    <link rel="stylesheet" href="estilos/admin/auth.css">
    <link rel="icon" type="image/png" href="<?php echo getLogoURL($conn); ?>">
</head>
<body>
    <h1>Inicio de Sesión - Administrador</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Nombre de usuario" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
