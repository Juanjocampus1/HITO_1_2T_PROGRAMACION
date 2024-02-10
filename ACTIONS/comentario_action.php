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
        echo "<div class='p-6 rounded-lg shadow-xl mb-4";
        // Verificar si el autor del comentario es el usuario actualmente autenticado
        if ($usuario_actual && $row['nombre'] === $usuario_actual) {
            echo " bg-zinc-600";
        } else {
            echo " bg-white";
        }
        echo "'>";
        echo "<p><strong>Autor:</strong> " . $row['nombre'] . "</p>";
        echo "<p><strong>Contenido:</strong> " . $row['contenido'] . "</p>";
        echo "<p class='text-right text-xs'><strong>Publicado:</strong> " . $row['fecha'] . "</p>";

        // Verificar si hay una imagen asociada al comentario y mostrarla si existe
        if (!empty($row['imagen']) && !empty($row['mime_type'])) {
            // Construir la URL base de la imagen utilizando el tipo MIME
            $base64Prefix = 'data:' . $row['mime_type'] . ';base64,';
            // Mostrar la imagen con el prefijo adecuado
            echo "<div class='rounded-xl'>";
            echo "<img
                height='300px' 
                src='" . $base64Prefix . base64_encode($row['imagen']) . "' 
                alt='Imagen del comentario' 
                class='rounded-lg shadow-md mb-4'
                >";
            echo "</div>";
        }

        echo "</div>";
    }
}
mostrarComentarios();

