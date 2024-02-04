<?php
include_once 'config.php';
global $conn;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['usuario'])) {
    $comentario = $_POST['comentario'];

    try {
        $sql = "INSERT INTO post (contenido, autor, fecha) VALUES (?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $comentario);
        $stmt->bindParam(2, $_SESSION['usuario_id']);
        $stmt->execute();
    } catch (PDOException $e) {
        // Manejar errores de base de datos
        echo "Error al guardar el comentario: " . $e->getMessage();
    }
}
