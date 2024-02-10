<?php
include '../config/config.php';
global $conn;
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['usuario'])) {
    $comentario = isset($_POST['content']) ? $_POST['content'] : null;
    $usuario_id = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : null;

    $archivo_nombre = $_FILES['archivo']['name'];
    $archivo_tipo = $_FILES['archivo']['type'];
    $archivo_tamano = $_FILES['archivo']['size'];
    $archivo_tmp = $_FILES['archivo']['tmp_name'];
    $archivo_error = $_FILES['archivo']['error'];

    $rutaDestino = '../uploads/' . $archivo_nombre;

    if ($archivo_error === UPLOAD_ERR_OK) {
        if (move_uploaded_file($archivo_tmp, $rutaDestino)) {

            try {
                $sql = "INSERT INTO blog.post (contenido, imagen, ID_usuario) VALUES (:contenido, :imagen, :idUsuario)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':contenido', $comentario);
                $stmt->bindParam(':imagen', $rutaDestino);
                $stmt->bindParam(':idUsuario', $usuario_id);
                $stmt->execute();

                header('Location: ../public/src/pages/blog_index.php');
                exit;
            } catch (PDOException $e) {
                header('Location: ../public/src/pages/blog_index.php?error_msg=' . urlencode('Error al guardar el comentario y la imagen'));
                exit;
            }
        } else {
            header('Location: ../public/src/pages/blog_index.php?error_msg=' . urlencode('Error al subir la imagen'));
            exit;
        }
    } else {
        try {
            $sql = "INSERT INTO blog.post (contenido, ID_usuario) VALUES (:contenido, :idUsuario)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':contenido', $comentario);
            $stmt->bindParam(':idUsuario', $usuario_id);
            $stmt->execute();

            header('Location: ../public/src/pages/blog_index.php');
            exit;
        } catch (PDOException $e) {
            header('Location: ../public/src/pages/blog_index.php?error_msg=' . urlencode('Error al guardar el comentario'));
            exit;
        }
    }
}