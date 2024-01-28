<?php
include 'config.php'; // Incluir el archivo de configuración para la conexión a la base de datos
global $conn;

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['singemail'];
    $password = $_POST['singpassword']; // Considera encriptar la contraseña antes de almacenarla
    $name = isset($_POST['singname']) ? $_POST['logname'] : ''; // Nombre completo, si está disponible
    $sector = isset($_POST['singsector']) ? $_POST['sector'] : ''; // Sector profesional, si está disponible

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO usuarios (nombre, email, contrasena, sector_profesional) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $email, $hashed_password, $sector]);

        // Redireccionar o enviar un mensaje de éxito
        echo "Usuario registrado con éxito";
    } catch (PDOException $e) {
        echo "Error al guardar los datos: " . $e->getMessage();
    }
}
?>
