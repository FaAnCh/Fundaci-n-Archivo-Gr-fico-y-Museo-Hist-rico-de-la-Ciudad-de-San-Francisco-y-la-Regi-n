<?php
$servername = "localhost"; // Cambia esto si tu servidor tiene un nombre diferente
$username = "root"; // Cambia esto si tienes otro nombre de usuario
$password = ""; // Cambia esto si tienes una contraseña configurada
$dbname = "agm"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
