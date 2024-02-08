<?php
function mostrarComentarios() {
    $conn = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

    $usuario_actual = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;

    $sql = "SELECT post.contenido, post.fecha, usuario.nombre
            FROM post
            INNER JOIN usuario ON post.ID_usuario = usuario.ID_usuario
            ORDER BY post.fecha DESC"; // Corregido: Utilizar JOIN explícito y ordenar correctamente
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo "<div class='p-6 rounded-lg shadow-xl mb-4";
        // Verificar si el autor del comentario es el usuario actualmente autenticado
        if ($usuario_actual && $row['nombre'] === $usuario_actual) {
            echo " bg-zinc-600"; // Si es el mismo usuario, aplicar el fondo zinc-600
        } else {
            echo " bg-white"; // Si no es el mismo usuario, mantener el fondo blanco
        }
        echo "'>";
        echo "<p><strong>Autor:</strong> " . $row['nombre'] . "</p>"; // Mostrar el nombre del autor
        echo "<p><strong>Contenido:</strong> " . $row['contenido'] . "</p>"; // Mostrar el contenido del comentario
        echo "<p class='text-right text-xs'><strong>Publicado:</strong> " . $row['fecha'] . "</p>"; // Mostrar la fecha del comentario
        echo "</div>";
    }
}

// Llamar a la función para mostrar los comentarios
mostrarComentarios();