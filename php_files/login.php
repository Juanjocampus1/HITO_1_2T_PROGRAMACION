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
                    <h6 class="mb-0 pb-3">
                        <span>LOG IN</span>
                        <span>SING IN</span>
                    </h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log">
                    <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <form action="sesion.php" method="post" class="section text-center">
                                        <h4 class="mb-4 pb-3">LOG IN</h4>
                                        <div class="form-group">
                                            <input type="email" name="logemail" class="form-style" placeholder="Tu Email" id="logemail" autocomplete="off" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Introduce un correo electrónico válido" required>
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" class="form-style" name="logpassword" placeholder="contraseña" autocomplete="off" minlength="5" title="Mínimo 8 letras">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <button type="submit" class="btn mt-4">ENVIAR</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="center-wrap">
                                    <form action="registro.php" method="post" class="section text-center">
                                        <h4 class="mb-4 pb-3">SING IN</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-style" name="singname" placeholder="NOMBRE COMPLETO" id="singname" autocomplete="off" required>
                                            <i class="input-icon uil uil-user"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-style" name="singsector" placeholder="SECTOR PROFESIONAL" id="singsector" autocomplete="off">
                                            <i class="input-icon uil uil-building"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="email" name="singemail" class="form-style" placeholder="Tu Email" autocomplete="off" required>
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" class="form-style" name="singpassword" placeholder="contraseña" autocomplete="off" minlength="5" title="Mínimo 5 palabras" required>
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn mt-4">ENVIAR</button>
                                        </div>
                                    </form>
                                    <?php if (isset($error_login)): ?>
                                        <p style="color: red;"><?php echo $error_login; ?></p>
                                    <?php endif; ?>
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

