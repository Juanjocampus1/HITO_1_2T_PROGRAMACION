<?php
include '../config/config.php';
global $conn;

$contrasena = $_POST['logpassword1'];
$contrasena2 = $_POST['logpassword2'];
$correo = $_POST['logemail1'];

$sql = "SELECT correo FROM blog.usuario WHERE correo = :correo";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':correo', $correo);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {

    if ($contrasena == $contrasena2) {
        $opcion = ['cost' => 12];
        $hashed_password = password_hash($contrasena, PASSWORD_BCRYPT, $opcion);

        $sql_update = "UPDATE blog.usuario SET contrasena = :contrasena WHERE correo = :correo";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bindParam(':contrasena', $hashed_password);
        $stmt_update->bindParam(':correo', $correo);
        $stmt_update->execute();

        header('Location:../public/src/pages/login_singin_index.php');
        exit;
    }
    else {
        $error_msg = "Las contraseñas no coinciden";
        header('Location:../public/src/pages/password_change.php');
        exit;
    }
} else {
    $error_msg = "no existe un usuario con ese correo electrónico";
}