<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date('Y-m-d H:i:s');
    setcookie('ip_fecha', json_encode(['ip' => $ip, 'fecha' => $date]), time() + (86400 * 30), "/"); //hago q la cookie valga 30 dias por poner una fecha
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
    <body class="bg-gray-100 text-gray-900 font-sans">
        <nav>
            <ul class="ul mt-4">
                <li class="li">
                    <a href="#POO">
                        <i class="fa-solid fa-cube"></i>
                    </a>
                </li>
                <li class="li">
                    <a href="#EVENTOS">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </li>
                <li class="li">
                    <a href="#PROCEDURALES">
                        <i class="fa-solid fa-list"></i>
                    </a>
                </li>
                <div class="marker"></div>
            </ul>
        </nav>
        <div class="grid place-items-center min-h-screen">
            <div class="container mx-auto px-4">
                <h1 class="text-3xl font-bold text-center mb-8">Diferencias entre lenguajes de programación</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md" id="POO">
                        <h2 class="text-xl font-semibold mb-2">Orientada a Objetos</h2>
                        <p>Los lenguajes de programación orientada a objetos (OOP) se basan en el concepto de objetos, que pueden contener datos y métodos. Las principales características de la OOP son:</p>
                        <ul class="mt-4 list-disc list-inside">
                            <li>Encapsulación</li>
                            <li>Herencia</li>
                            <li>Polimorfismo</li>
                            <li>Abstracción</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md" id="EVENTOS">
                        <h2 class="text-xl font-semibold mb-2">A Eventos</h2>
                        <p>Los lenguajes de programación a eventos se centran en la interacción del usuario con la interfaz de usuario. Las principales características de la programación a eventos son:</p>
                        <ul class="mt-4 list-disc list-inside">
                            <li>Manejo de eventos</li>
                            <li>Respuesta a acciones del usuario</li>
                            <li>Asincronía</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md" id="PROCEDURALES">
                        <h2 class="text-xl font-semibold mb-2">Procedimentales</h2>
                        <p>Los lenguajes de programación procedimentales se centran en la secuencia de instrucciones que se ejecutan una tras otra. Las principales características de la programación procedimental son:</p>
                        <ul class="mt-4 list-disc list-inside">
                            <li>Ejecución secuencial</li>
                            <li>Variables y funciones</li>
                            <li>Control de flujo</li>
                        </ul>
                    </div>
                </div>
            </div>
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

        </div>
        <script src="../js_files/script.js"></script>
        <script src="../js_files/blog.js"></script>
    </body>
</html>