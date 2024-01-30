<?php
    include_once "config.php";
    global $conn;

    // Verificar si el formulario de inicio de sesión ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logemail'])) {
        // Este bloque se ejecuta cuando se envía el formulario de inicio de sesión
        $email = $_POST['logemail'];
        $password = $_POST['logpassword'];

        try {
            $sql = "SELECT * FROM usuario WHERE correo = ?";
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
