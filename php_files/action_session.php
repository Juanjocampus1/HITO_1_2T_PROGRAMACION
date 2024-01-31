<?php

$correo = $_POST['logemail'];
$contraseña = $_POST['logpassword'];

$conexion = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
$sql = "SELECT nombre, correo, contrasena FROM blog.usuario WHERE correo = :correo";

$stmt = $conexion->prepare($sql);
$stmt->bindParam(':correo', $correo);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    if (password_verify($contraseña, $result['logpassword'])) {
        session_start();
        $_SESSION['usuario'] = $result['nombre'];
        header('Location:blog_index.php');
    } else {
        echo '<p>Usuario no válido</p>';
        echo '<a href="login_singin_index.php">Alta de usuarios</a>';
    }
}

/*
    include_once "config.php";
    global $conn;

    // Verificar si el formulario de inicio de sesión ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logemail'])) {
    // Este bloque se ejecuta cuando se envía el formulario de inicio de sesión
    $email = $_POST['logemail'];
    $password = $_POST['logpassword'];

    try {
        // Preparar la consulta SQL para obtener el usuario por correo electrónico
        $sql = "SELECT * FROM usuario WHERE correo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && password_verify($password, $user['contrasena'])) {
            // Iniciar la sesión y redirigir al usuario a index.php
            session_start();
            $_SESSION['usuario_logueado'] = $user['nombre'];
            header('Location: index.php');
            exit;
        } else {
            // Establecer un mensaje de error si las credenciales son incorrectas
            $error_login = "Credenciales incorrectas.";
        }
    } catch (PDOException $e) {
        // Manejar el error en caso de problemas con la base de datos
        echo "Error al conectar con la base de datos: " . $e->getMessage();
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logemail'])) {
    // Este bloque se ejecuta cuando se envía el formulario de inicio de sesión
    $email = $_POST['logemail'];
    $password = $_POST['logpassword'];

    try {
        // Preparar la consulta SQL para obtener el usuario por correo electrónico
        $sql = "SELECT * FROM usuario WHERE correo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && password_verify($password, $user['contrasena'])) {
            // Iniciar la sesión y redirigir al usuario a index.php
            session_start();
            $_SESSION['usuario_logueado'] = $user['nombre'];
            header('Location: index.php');
            exit;
        } else {
            // Establecer un mensaje de error si las credenciales son incorrectas
            $error_login = "Credenciales incorrectas.";
        }
    } catch (PDOException $e) {
        // Manejar el error en caso de problemas con la base de datos
        echo "Error al conectar con la base de datos: " . $e->getMessage();
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logemail'])) {
    // Este bloque se ejecuta cuando se envía el formulario de inicio de sesión
    $email = $_POST['logemail'];
    $password = $_POST['logpassword'];

    try {
        // Preparar la consulta SQL para obtener el usuario por correo electrónico
        $sql = "SELECT * FROM usuario WHERE correo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && password_verify($password, $user['contrasena'])) {
            // Iniciar la sesión y redirigir al usuario a index.php
            session_start();
            $_SESSION['usuario_logueado'] = $user['nombre'];
            header('Location: index.php');
            exit;
        } else {
            // Establecer un mensaje de error si las credenciales son incorrectas
            $error_login = "Credenciales incorrectas.";
        }
    } catch (PDOException $e) {
        // Manejar el error en caso de problemas con la base de datos
        echo "Error al conectar con la base de datos: " . $e->getMessage();
    }
}
