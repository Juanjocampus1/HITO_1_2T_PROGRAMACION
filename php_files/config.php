<?php
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "blog"; // Nombre de la base de datos

// Crear una nueva conexión mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    // Si hay un error en la conexión, se muestra un mensaje
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Mensaje de éxito si la conexión se establece correctamente
echo "Conexión exitosa";
?>
