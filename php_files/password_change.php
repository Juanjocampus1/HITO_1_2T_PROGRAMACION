<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="../styles/login.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>registro</title>
    </head>
    <body class="contenedor">
    <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <form action="passwor_change_action.php" method="post" class="section text-center">
                                                <h4 class="mb-4 pb-3">CAMBIAR CONTRASEÑA</h4>
                                                <div class="form-group ">
                                                    <input type="email" name="logemail1" class="form-style" placeholder="Tu Email" id="logemail" autocomplete="off" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Introduce un correo electrónico válido" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" name="logpassword1" placeholder="Escriba su contraseña" autocomplete="off" minlength="5" title="Mínimo 8 letras">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" name="logpassword2" placeholder="Repita su contraseña" autocomplete="off" minlength="5" title="Mínimo 8 letras">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                    <?php
                                                    // Verificar si hay un mensaje de error en la URL
                                                    if (isset($_GET['error_msg'])) {
                                                        $error_msg = $_GET['error_msg'];
                                                        echo "<br><br><p>$error_msg</p>"; // Mostrar el mensaje de error
                                                    }

                                                    ?>
                                                </div>
                                                <button type="submit" class="btn mt-4">CAMBIAR</button>
                                                <p class="mb-0 mt-4 text-center">
                                                    <a href="login_singin_index.php" class="link">
                                                        Volver
                                                    </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>