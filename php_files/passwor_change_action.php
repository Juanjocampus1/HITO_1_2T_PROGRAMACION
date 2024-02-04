<?php
include 'config.php';
global $conn;

$contrasena = $_POST['logpassword1'];
$contrasena2 = $_POST['logpassword2'];
$correo = $_POST['logemail1'];

// Consulta SQL para obtener el usuario con el correo electrónico proporcionado
$sql = "SELECT correo FROM blog.usuario WHERE correo = :correo";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':correo', $correo);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Verificar si se encontró un usuario con el correo electrónico proporcionado
if ($result) {
    // Verificar si las contraseñas coinciden
    if ($contrasena == $contrasena2) {
        // Encriptar la nueva contraseña
        $opcion = ['cost' => 12];
        $hashed_password = password_hash($contrasena, PASSWORD_BCRYPT, $opcion);

        // Actualizar la contraseña en la base de datos
        $sql_update = "UPDATE blog.usuario SET contrasena = :contrasena WHERE correo = :correo";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bindParam(':contrasena', $hashed_password);
        $stmt_update->bindParam(':correo', $correo);
        $stmt_update->execute();

        // Redirigir al usuario a la página de inicio de sesión
        header('Location: login_singin_index.php');
        exit;
    } else {
        // Las contraseñas no coinciden
        $error_msg = "Las contraseñas no coinciden";
    }
} else {
    // No se encontró ningún usuario con el correo electrónico proporcionado
    $error_msg = "El correo electrónico proporcionado no está registrado";
}
?>
