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
    <body class="bg-gradient-to-r from-zinc-600 to-zinc-800 text-gray-900 font-sans grid grid-rows-layout gap-y-8">
        <nav >
            <ul class="border-solid border-2 border-zinc-500 ul mt-4 rounded-xl">
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
            <div class=" w-full max-w-[1400px] mx-auto grid grid-rows-3 grid-cols-4 gap-x-8 gap-y-8 mb-4 auto-rows-auto min-h-screen">
                <div class="col-span-4 row-span-1 text-white p-2 rounded-xl">
                    <div class="h-32"></div>
                    <h1 id="POO" class="text-3xl font-bold text-center opacity-75 mb-8">Diferencias entre lenguajes de programación</h1>
                </div>
                <div class="col-span-2 row-span-3 p-4 shadoww rounded-xl">
                    <div class="overflow-auto">
                        <p id="JSON" class="textToSearch text-white opacity-75 text-lg md:text-xl lg:text-2xl">
                            <strong>
                                PROGRAMACIÓN ORIENTADA A EVENTOS
                                <br>
                                <br>
                            </strong>
                            Los lenguajes de programación a eventos se centran en la interacción del usuario con
                            la interfaz de usuario y la respuesta a las acciones del usuario. Las principales características
                            de la programación a eventos son: manejo de eventos, respuesta a acciones del usuario y asincronía.
                            <br>
                            <br>
                            La programación a eventos es común en el desarrollo de aplicaciones de interfaz de usuario y
                            aplicaciones web, donde la interacción del usuario con la interfaz de usuario es fundamental
                            para la funcionalidad de la aplicación. Los lenguajes de programación a eventos suelen
                            proporcionar una forma de asociar eventos del usuario, como clics de ratón o pulsaciones de
                            teclas, con funciones o métodos que se ejecutan en respuesta a esos eventos.
                        </p>
                        <br>
                    </div>
                </div>

                <div class="col-span-2 row-span-3 p-4 shadoww rounded-xl">
                    <div class="overflow-auto  mr-4">
                        <p id="JSON" class="textToSearch text-white opacity-75 text-lg md:text-xl lg:text-2xl">
                            <strong>
                                PROGRAMACIÓN PROCEDIMENTAL
                                <br>
                                <br>
                            </strong>
                            Los lenguajes de programación procedimentales se centran en la secuencia de instrucciones que se
                            ejecutan una tras otra. Las principales características de la programación procedimental son:
                            ejecución secuencial, variables y funciones, y control de flujo.
                            <br>
                            <br>
                            La programación procedimental es común en el desarrollo de aplicaciones de línea de comandos y
                            aplicaciones de procesamiento de datos, donde la secuencia de instrucciones es fundamental para
                            la funcionalidad de la aplicación. Los lenguajes de programación procedimentales suelen proporcionar
                            una forma de definir variables y funciones, y controlar el flujo de ejecución de las instrucciones.
                        </p>
                        <br>
                    </div>

                </div>
                <div class="col-span-4 row-span-1 shadoww text-white p-2 rounded-xl">
                    <p id="XML" class="textToSearch text-white opacity-75 text-lg md:text-xl lg:text-2xl">
                        <strong>
                            Orientada a Objetos
                            <br>
                            <br>
                        </strong>
                        La programación orientada a objetos se centra en la definición de objetos y su interacción entre sí.
                        Las principales características de la programación orientada a objetos son: definición de clases y
                        objetos, encapsulación y herencia, y polimorfismo.
                        <br>
                        <br>
                        La programación orientada a objetos es común en el desarrollo de aplicaciones de software, donde
                        la definición de objetos y su interacción es fundamental para la funcionalidad de la aplicación.
                        Los lenguajes de programación orientada a objetos suelen proporcionar una forma de definir clases
                        y objetos, encapsular datos y funcionalidad en objetos, y heredar y sobrescribir funcionalidad de
                        otros objetos.
                    </p>
                </div>
            </div>
            <div class="h-32"></div>
            <div class="mx-auto btnn" id="acceder">
                <a href="blog_index.php">ACCEDER AL BLOG</a>
            </div>
            <div class="h-32"></div>
        </div>
        <footer id="redes" class=" shadow-2xl border-solid border-2 border-zinc-500 text-white p-2 footer rounded-xl FOO">
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