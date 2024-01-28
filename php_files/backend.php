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
// Verificar si el formulario de inicio de sesión ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logemail'])) {
    // Este bloque se ejecuta cuando se envía el formulario de inicio de sesión
    $email = $_POST['logemail'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['contrasena'])) {
            session_start(); // Iniciar sesión antes de asignar valores a $_SESSION
            $_SESSION['usuario_logueado'] = $user['nombre'];
            header('Location: index.php');
            exit;
        } else {
            $error_login = "Credenciales incorrectas.";
        }
    } catch (PDOException $e) {
        echo "Error al conectar con la base de datos: " . $e->getMessage();
    }
}