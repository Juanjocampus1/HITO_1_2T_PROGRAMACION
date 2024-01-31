<?php
    include_once 'action_session.php';
    global $user;
    session_start();
    if (!isset($_SESSION['usuario_logueado'])) {
        header('Location: login_singin_index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hito programacion</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../styles/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <section id="blog" class="py-12">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8">Blog</h2>
                <div class="grid grid-cols-12 gap-20">
                    <div class="col-span-12 bg-white p-6 rounded-lg shadow-md">
                        <div class="flex justify-end">
                            <button id="commentButton" class="mb-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Comentar</button>
                        </div>
                        <div id="commentSection" class="hidden flex justify-center">
                            <input type="text" id="commentInput" placeholder="Escribe tu comentario aquí" class="mb-2 p-2 border rounded">
                            <div class="flex justify-end">
                                <input type="button" id="publishButton" value="Publicar" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            </div>
                        </div>
                        <div id="commentsDisplay" class="mt-4">
                            <!-- Aquí se mostrarán los comentarios -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="../js_files/blog.js"></script>
    </body>
</html>