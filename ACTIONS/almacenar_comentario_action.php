<?php
include '../config/config.php';
global $conn;
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['usuario'])) {
    $comentario = $_POST['content'];

    try {
        $sql = "INSERT INTO blog.post (contenido, ID_usuario) VALUES (:contenido, :idUsuario)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':contenido', $comentario);
        $stmt->bindParam(':idUsuario', $idUsuario);

        $stmt->execute();
        // Redirigir después de guardar el comentario
        header('Location: ../public/src/pages/blog_index.php');
        exit;
    } catch (PDOException $e) {
        // Manejar errores de base de datos
        header('Location: ../public/src/pages/blog_index.php');
        exit;
    }
}