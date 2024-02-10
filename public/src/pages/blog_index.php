<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:login_singin_index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../styles/blog.css">
</head>
<body class="bg-gradient-to-r from-zinc-600 to-zinc-800" onload="cargarComentarios()">
<nav>
    <ul class="ul mt-4">
        <li class="li">
            <a href="index.php">
                <i class="fa-solid fa-cube"></i>
            </a>
        </li>
        <li class="li">
            <a href="login_singin_index.php">
                <i class="fa-solid fa-bell"></i>
            </a>
        </li>
        <li class="li">
            <a href="#redes">
                <i class="fa-solid fa-list"></i>
            </a>
        </li>
        <div class="marker"></div>
    </ul>
</nav>
<section id="blog" class="py-12">
    <div class="container mx-auto px-4">
        <form action="../../../ACTIONS/log-out_action.php" method="post" class="flex justify-end mb-4">
            <span class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-lg">
            <input type="submit" name="logout" value="Cerrar sesión" >
            <i class="uil uil-signout"></i>
            </span>
        </form>
        <h2 class="text-3xl font-bold text-center mb-8 text-white opacity-75">Blog</h2>
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-12 md:col-span-4 lg:col-span-3"></div>
            <div class="col-span-12 md:col-span-4 lg:col-span-6 p-6 rounded-lg shadow-md bg-white">
                <div class="flex justify-between mb-4">
                    <div class="flex items-center">
                        <div>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-bold ">
                                <?php
                                echo $_SESSION['usuario'];
                                ?>
                            </h3>
                            <p class="text-gray-500" id="fechaPublicacion"></p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mb-4">
                    <button id="commentButton" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cerrar</button>
                </div>
                <form action="../../../ACTIONS/almacenar_comentario_action.php" method="post" id="commentSection" class="flex justify-center mb-4">
                    <label for="commentInput" class="sr-only">Comentario</label>
                    <input type="text" id="commentInput" name="content" class="mb-2 p-2 border rounded" placeholder="tu comentario aqui">
                    <div id="subirArchivo" class="cursor-pointer">
                        <i class="uil uil-paperclip text-black text-2xl"></i>
                    </div>
                    <input type="file" id="fileInput" accept="image/png, image/jpeg" style="display: none;">
                    <span class="text-white font-bold py-1 px-3 rounded text-md -rotate-45">
                        <button type="submit" value="">
                            <i class="uil uil-message text-black text-2xl"></i>
                        </button>
                    </span>
                </form>
                    <?php
                    if (isset($_GET['error_msg'])) {
                        $error_msg = $_GET['error_msg'];
                        echo "<br><br><p>$error_msg</p>";
                    }
                    ?>
                <div>
                    <?php
                        include '../../../ACTIONS/comentario_action.php'; // Incluye el archivo donde está definida la función mostrarComentarios()// Llama a la función para mostrar los comentarios
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
    <footer id="redes" class=" shadoww text-white p-2 footer rounded-xl FOO">
        <div class="containeer">
            <a href="https://www.youtube.com" class="aa" style="--color: #e1306c">
                <i class="uil uil-youtube"></i>
            </a>
            <a href="https://twitter.com/home?lang=es" class="aa" style="--color: #0072b1">
                <i class="uil uil-twitter"></i>
            </a>
            <a href="https://www.instagram.com" class="aa" style="--color: #e81cff">
                <i class="uil uil-instagram"></i>
            </a>
            <a href="https://github.com/Juanjocampus1" class="aa" style="--color: #282330">
                <i class="uil uil-github"></i>
            </a>
        </div>
    </footer>
<script src="../components/blog.js"></script>
<script src="../components/actualizar_comentarios.js"></script>
<script src="../components/subir_imagen.js"></script>
</body>
</html>