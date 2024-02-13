<?php
include '../config/config.php';
global $conn;
session_start();

if (empty($_POST['content'])) {
    $usuario_id = $_SESSION['usuario_id'];

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        // Obtener el tipo MIME de la imagen
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime_type = $finfo->file($_FILES['imagen']['tmp_name']);

        // Obtener el contenido binario de la imagen
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);

        // Preparar la consulta para insertar la imagen en la base de datos
        $sql = "INSERT INTO blog.post (imagen, mime_type, ID_usuario) VALUES (:imagen, :mime_type, :idUsuario)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':imagen', $imagen, PDO::PARAM_LOB);
        $stmt->bindParam(':mime_type', $mime_type);
        $stmt->bindParam(':idUsuario', $usuario_id);
    }
    else {
        header('Location: ../public/src/pages/blog_index.php?error_msg=' . urlencode('No se recibio la imagen'));
        exit;
    }

    try {
        $stmt->execute();
        header('Location: ../public/src/pages/blog_index.php');
        exit;
    }
    catch (PDOException $e) {
        header('Location: ../public/src/pages/blog_index.php?error_msg=' . urlencode('Error al guardar la imagen'));
        exit;
    }
}
else {
    $usuario_id = $_SESSION['usuario_id'];
    $comentario = isset($_POST['content']) ? $_POST['content'] : null;

    // Verificar si se envió una imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        // Obtener el tipo MIME de la imagen
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime_type = $finfo->file($_FILES['imagen']['tmp_name']);

        // Obtener el contenido binario de la imagen
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);

        $sql = "INSERT INTO blog.post (contenido, imagen, mime_type, ID_usuario) VALUES (:contenido, :imagen, :mime_type, :idUsuario)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':imagen', $imagen, PDO::PARAM_LOB);
        $stmt->bindParam(':mime_type', $mime_type);
    }
    else {
        $sql = "INSERT INTO blog.post (contenido, ID_usuario) VALUES (:contenido, :idUsuario)";
        $stmt = $conn->prepare($sql);
    }

    $stmt->bindParam(':contenido', $comentario);
    $stmt->bindParam(':idUsuario', $usuario_id);

    try {
        $stmt->execute();
        header('Location: ../public/src/pages/blog_index.php');
        exit;
    }
    catch (PDOException $e) {
        header('Location: ../public/src/pages/blog_index.php?error_msg=' . urlencode('Error al guardar el comentario y la imagen o la imagen pesa mucho'));
        exit;
    }
}
