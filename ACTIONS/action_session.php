<?php
    include '../config/config.php';
    global $conn;

    $correo = $_POST['logemail'];
    $contrasena = $_POST['logpassword'];

    $sql = "SELECT ID_usuario, nombre, correo, contrasena FROM blog.usuario WHERE correo = :correo";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($result);

    if ($result) {
        if (password_verify($contrasena, $result['contrasena'])) {
            session_start();
            $_SESSION['usuario'] = $result['nombre'];

            setcookie('usuario_id', $result['ID_usuario'], time() + (86400 * 30), "/"); // cookie válida por 30 días


            header('Location:../public/src/pages/blog_index.php');
        } else {
            $error_msg = "credenciales incorrectas";
        }
    }
    if (!empty($error_msg)) {
        header("Location:../public/src/pages/login_singin_index.php?error_msg=" . urlencode($error_msg));
        exit;
    }