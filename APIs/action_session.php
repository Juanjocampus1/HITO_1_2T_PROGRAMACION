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

if ($result) {
    if (password_verify($contrasena, $result['contrasena'])) {
        session_start();
        $_SESSION['usuario'] = $result['nombre'];
        $_SESSION['usuario_id'] = $result['ID_usuario'];

        header('Location: ../public/src/pages/blog_index.php');
    }
    else {
        header('Location: ../public/src/pages/login_singin_index.php');
        $error_msg = "Credenciales incorrectas";
    }
}
else {
    header('Location: ../public/src/pages/login_singin_index.php');
    $error_msg = "Credenciales incorrectas";
}

if (!empty($error_msg)) {
    header("Location:../public/src/pages/login_singin_index.php?error_msg=" . urlencode($error_msg));
    exit;
}