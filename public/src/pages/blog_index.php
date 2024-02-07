<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login_singin_index.php');
    exit;
}

mostrarComentarios();
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
</head>
<body class="bg-gradient-to-r from-zinc-600 to-zinc-800" onload="cargarComentarios()">
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
                <div class="flex justify-end mb-4">
                    <button id="commentButton" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cerrar</button>
                </div>
                <form action="../../../ACTIONS/almacenar_comentario_action.php" method="post" id="commentSection" class="flex justify-center mb-4">
                    <input type="text" id="commentInput" name="content" class="mb-2 p-2 border rounded">
                    <button id="publishButton" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-2" type="submit">Publicar</button>
                </form>
                <div id="commentsDisplay">
                    <?php
                        // Función que muestra los comentarios
                        function mostrarComentarios() {
                            include_once '../../ACTIONS/comentario_action.php';
                        }
                    ?>
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
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../components/blog.js"></script>
<script src="../components/actualizar_comentarios.js"></script>
</body>
</html>