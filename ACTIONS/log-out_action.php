<?php
if (isset($_POST['logout'])) {
    // Destruir la sesión
    session_unset();
    session_destroy();

    // Redirigir al usuario a index.php
    header('Location: index.php');
    exit;
}