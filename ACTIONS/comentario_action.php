<?php

include_once 'config.php';
global $conn;

session_start();

$sql = "SELECT post.contenido, post.fecha
        FROM post
        INNER JOIN usuario ON post.autor = usuario.ID
        WHERE usuario.nombre = :nombre_usuario;";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nombre', $_SESSION['usuario']);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($result) {
    foreach ($result as $row) {
        echo "<div class='bg-white p-6 rounded-lg shadow-md mb-4'>";
        echo "<p>" . $row['contenido'] . "</p>";
        echo "<p class='text-right text-xs'>" . $row['fecha'] . "</p>";
        echo "</div>";
    }
}


