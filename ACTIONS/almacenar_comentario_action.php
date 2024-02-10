<?php
include '../config/config.php';
global $conn;
session_start();

class Comentario {
    private $contenido;
    private $usuarioId;

    public function __construct($contenido, $usuarioId) {
        $this->contenido = $contenido;
        $this->usuarioId = $usuarioId;
    }

    public function getContenido() {
        return $this->contenido;
    }

    public function getUsuarioId() {
        return $this->usuarioId;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['usuario_id'])) {

    $comentario = isset($_POST['content']) ? new Comentario($_POST['content'], $_SESSION['usuario_id']) : null;

    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $contenidoImagen = addcslashes(file_get_contents($_FILES['imagen']['tmp_name']), "\0");

        try {
            $sql = "INSERT INTO blog.post (contenido, imagen, ID_usuario) VALUES (:contenido, :imagen, :idUsuario)";
            $stmt = $conn->prepare($sql);
            $coment = $comentario->getContenido();
            $stmt->bindParam(':contenido', $coment);
            $stmt->bindParam(':imagen', $contenidoImagen, PDO::PARAM_LOB);
            $idUsuario = $comentario->getUsuarioId();
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->execute();

            header('Location: ../public/src/pages/blog_index.php');
            exit;
        } catch (PDOException $e) {
            header('Location: ../public/src/pages/blog_index.php?error_msg=' . urlencode('Error al guardar la imagen'));
            exit;
        }
    }

    // Si no se envió un archivo, insertar solo el comentario
    try {
        $sql = "INSERT INTO blog.post (contenido, ID_usuario) VALUES (:contenido, :idUsuario)";
        $stmt = $conn->prepare($sql);
        $coment = $comentario->getContenido();
        $stmt->bindParam(':contenido', $coment);
        $idUsuario = $comentario->getUsuarioId();
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->execute();

        header('Location: ../public/src/pages/blog_index.php');
        exit;
    } catch (PDOException $e) {
        header('Location: ../public/src/pages/blog_index.php?error_msg=' . urlencode('Error al guardar el comentario'));
        exit;
    }
}