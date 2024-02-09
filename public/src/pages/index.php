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
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    </head>
    <body class="bg-gradient-to-r from-zinc-600 to-zinc-800 text-gray-900 font-sans">
        <nav>
            <ul class="ul mt-4">
                <li class="li">
                    <a href="#POO">
                        <i class="fa-solid fa-cube"></i>
                    </a>
                </li>
                <li class="li">
                    <a href="#acceder">
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
        <div>
        <div class="grid place-items-center min-h-screen">
            <div class="container mx-auto px-4">
                <h1 class="text-3xl font-bold text-center mb-8">Diferencias entre lenguajes de programación</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="shadow-2xl p-6 rounded-lg shadow-md" id="POO">
                        <h2 class="text-xl font-semibold mb-2 text-white">Orientada a Objetos</h2>
                        <p class="text-white">Los lenguajes de programación orientada a objetos (OOP) se basan en el concepto de objetos, que pueden contener datos y métodos. Las principales características de la OOP son:</p>
                        <ul class="mt-4 list-disc list-inside text-white">
                            <li>Encapsulación</li>
                            <li>Herencia</li>
                            <li>Polimorfismo</li>
                            <li>Abstracción</li>
                        </ul>
                    </div>
                    <div class="shadow-2xl p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold mb-2 text-white">A Eventos</h2>
                        <p class="text-white">Los lenguajes de programación a eventos se centran en la interacción del usuario con la interfaz de usuario. Las principales características de la programación a eventos son:</p>
                        <ul class="mt-4 list-disc list-inside text-white">
                            <li>Manejo de eventos</li>
                            <li>Respuesta a acciones del usuario</li>
                            <li>Asincronía</li>
                        </ul>
                    </div>
                    <div class="shadow-2xl p-6 rounded-lg shadow-md" ">
                        <h2 class="text-xl font-semibold mb-2 text-white">Procedimentales</h2>
                        <p class="text-white">Los lenguajes de programación procedimentales se centran en la secuencia de instrucciones que se ejecutan una tras otra. Las principales características de la programación procedimental son:</p>
                        <ul class="mt-4 list-disc list-inside text-white">
                            <li>Ejecución secuencial</li>
                            <li>Variables y funciones</li>
                            <li>Control de flujo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mx-auto btnn" id="acceder">
                <a href="blog_index.php">ACCEDER AL BLOG</a>
            </div>
        </div>
        <footer id="redes" class=" shadow-2xl text-white p-2 footer rounded-xl FOO">
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
        <script src="../components/script.js"></script>
    </body>
</html>