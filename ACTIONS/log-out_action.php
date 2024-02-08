<?php
if (isset($_POST['logout']) && isset($_SESSION['usuario_id'])) {
// Destruir la sesión
session_unset();
session_destroy();
header('Location:../public/src/pages/index.php');
exit;
}
