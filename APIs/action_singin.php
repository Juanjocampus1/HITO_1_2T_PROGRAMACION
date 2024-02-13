<?php
include '../config/config.php';
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['singname']) ? $_POST['singname'] : '';
    $sector = isset($_POST['singsector']) ? $_POST['singsector'] : '';
    $email = $_POST['singemail'];
    $password = $_POST['singpassword'];

    $sql_verificar_correo = "SELECT COUNT(*) AS count FROM usuario WHERE correo = :correo";
    $stmt_verificar_correo = $conn->prepare($sql_verificar_correo);
    $stmt_verificar_correo->bindParam(':correo', $email);
    $stmt_verificar_correo->execute();
    $result_verificar_correo = $stmt_verificar_correo->fetch(PDO::FETCH_ASSOC);

    if ($result_verificar_correo['count'] > 0) {
        $error_msg = "Ya existe una cuenta registrada con ese correo electrónico.";
        header("Location:../public/src/pages/login_singin_index.php?error_msg=" . urlencode($error_msg));
        exit;
    }

    $opcion = ['cost' => 12];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $opcion);

    try {
        $sql_insertar_usuario = "INSERT INTO usuario (nombre, correo, contrasena, sector_profesional)
                                VALUES (?, ?, ?, ?)";
        $stmt_insertar_usuario = $conn->prepare($sql_insertar_usuario);
        $stmt_insertar_usuario->execute([$name, $email, $hashed_password, $sector]);

        header('Location:../public/src/pages/login_singin_index.php');
    } catch (PDOException $e) {
        echo "Error al guardar los datos: " . $e->getMessage();
    }
}