<?php
    include 'config.php';
    global $conn;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST['singname']) ? $_POST['singname'] : '';
        $sector = isset($_POST['singsector']) ? $_POST['singsector'] : '';
        $email = $_POST['singemail'];
        $password = $_POST['singpassword'];

        var_dump($_POST);

        $opcion = ['cost' => 12];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, $opcion);
    }

    try {
        // Preparar la consulta SQL con los marcadores de posición
        $sql = "INSERT INTO usuario (nombre, correo, contrasena, sector_profesional) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Ejecutar la consulta con las variables pasadas directamente al método execute
        $stmt->execute([$name, $email, $hashed_password, $sector]);
        
        header('Location: login_singin_index.php');
    } catch (PDOException $e) {
        echo "Error al guardar los datos: " . $e->getMessage();
    }