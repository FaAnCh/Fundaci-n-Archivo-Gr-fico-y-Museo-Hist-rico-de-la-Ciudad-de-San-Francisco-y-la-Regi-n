<?php
// functions.php

// Conectar a la base de datos
function connectDatabase() {
    $host = 'localhost'; // Cambia si es necesario
    $user = 'tu_usuario'; // Cambia por tu usuario de base de datos
    $password = 'tu_contraseña'; // Cambia por tu contraseña de base de datos
    $dbname = 'agm'; // Nombre de la base de datos

    // Crear conexión
    $conn = new mysqli($host, $user, $password, $dbname);

    // Comprobar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}

// Función para ejecutar consultas
function executeQuery($query) {
    $conn = connectDatabase();
    $result = $conn->query($query);

    if ($result === TRUE) {
        $conn->close(); // Cierra la conexión antes de devolver el ID
        return $conn->insert_id; // Devuelve el ID del último registro insertado
    } elseif ($result !== FALSE) {
        $data = $result->fetch_all(MYSQLI_ASSOC); // Devuelve los resultados en un array asociativo
        $conn->close(); // Cierra la conexión
        return $data;
    } else {
        $conn->close(); // Cierra la conexión en caso de error
        die("Error en la consulta: " . $conn->error);
    }
}

// Función para validar credenciales de usuario
function validateCredentials($username, $password) {
    $conn = connectDatabase();
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username); // Solo pasamos el username

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verificar la contraseña usando password_verify
        if (password_verify($password, $user['password'])) {
            return $user; // Devuelve los datos del usuario
        } else {
            return false; // Credenciales no válidas
        }
    } else {
        return false; // Credenciales no válidas
    }

    $stmt->close();
    $conn->close();
}

// Fetch the logo URL from the database
function getLogoURL($conn) {
    $result = $conn->query("SELECT setting_value FROM site_settings WHERE setting_key = 'logo_url'");
    if ($result && $row = $result->fetch_assoc()) {
        return $row['setting_value'];
    }
    return 'imagenes/logoAGM.png'; // Default logo if not set
}

// Update the logo URL in the database
function updateLogoURL($conn, $newLogoURL) {
    $stmt = $conn->prepare("UPDATE site_settings SET setting_value = ? WHERE setting_key = 'logo_url'");
    $stmt->bind_param("s", $newLogoURL);
    return $stmt->execute();
}


// Otras funciones personalizadas que necesites

?>
