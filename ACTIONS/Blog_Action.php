<?php
    include_once 'config.php';
    global $conn;

    $comentario = $_POST['coment'];

    $sql = "INSERT INTO blog.post (:comentario) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$comentario]);