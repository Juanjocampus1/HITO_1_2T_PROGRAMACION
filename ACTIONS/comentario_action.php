<?php
function mostrarComentarios() {
    $conn = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

    $usuario_actual = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;

    $sql = "SELECT post.contenido, post.fecha, post.imagen, post.mime_type, usuario.nombre
            FROM post
            INNER JOIN usuario ON post.ID_usuario = usuario.ID_usuario
            ORDER BY post.fecha DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        if (empty($row['contenido']) && !empty($row['imagen'])) {
            mostrarImagen($row, $usuario_actual);
        }
        else {
            mostrarComentario($row, $usuario_actual);
        }
    }
}

function mostrarComentario($row, $usuario_actual) {
    echo "<div class='p-6 rounded-lg shadow-xl mb-4";

    if ($usuario_actual && $row['nombre'] === $usuario_actual) {
        echo " bg-zinc-600";
    } else {
        echo " bg-white";
    }
    echo "'>";
    echo "<p><strong>Autor:</strong> " . $row['nombre'] . "</p>";
    echo "<p><strong>Contenido:</strong> " . $row['contenido'] . "</p>";
    echo "<p class='text-right text-xs'><strong>Publicado:</strong> " . $row['fecha'] . "</p>";

    if (!empty($row['imagen']) && !empty($row['mime_type'])) {
        mostrarImagen($row, $usuario_actual);
    }

    echo "</div>";
}

function mostrarImagen($row, $usuario_actual){

    $base64Prefix = 'data:' . $row['mime_type'] . ';base64,';

    echo "<div class='p-6 rounded-lg shadow-xl mb-4";
    if ($usuario_actual && $row['nombre'] === $usuario_actual) {
        echo " bg-zinc-600";
    } else {
        echo " bg-white";
    }
    echo "'>";
    echo "<p><strong>Autor:</strong> " . $row['nombre'] . "</p>";
    echo "<img
        height='300px' 
        src='" . $base64Prefix . base64_encode($row['imagen']) . "' 
        alt='Imagen del comentario' 
        class='rounded-lg shadow-md mb-4'
        >";
    echo "<p class='text-right text-xs'><strong>Publicado:</strong> " . $row['fecha'] . "</p>";
    echo "</div>";
}

mostrarComentarios();