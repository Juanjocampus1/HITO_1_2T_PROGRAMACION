<?php
include_once '../config/config.php';
global $conn;

session_start();

// Función para mostrar los comentarios
function mostrarComentarios() {
    global $conn;
    // Obtener todos los comentarios y sus autores
    $sql = "SELECT p.contenido, p.fecha, u.nombre
            FROM post p
            INNER JOIN usuario u ON p.autor = u.ID
            ORDER BY p.fecha DESC"; // Ordenar por fecha descendente para mostrar los comentarios más recientes primero
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo "<div class='bg-white p-6 rounded-lg shadow-md mb-4'>";
        echo "<p><strong>Autor:</strong> " . $row['nombre'] . "</p>"; // Mostrar el nombre del autor
        echo "<p><strong>Contenido:</strong> " . $row['contenido'] . "</p>"; // Mostrar el contenido del comentario
        echo "<p class='text-right text-xs'><strong>Fecha:</strong> " . $row['fecha'] . "</p>"; // Mostrar la fecha del comentario
        echo "</div>";
    }
}

mostrarComentarios(); // Llamar a la función para mostrar los comentarios

