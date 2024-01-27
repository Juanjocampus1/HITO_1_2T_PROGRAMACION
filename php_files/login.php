<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>CONTACTO</title>
</head>
<body class="contenedor">
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3">
                        <span>PRIMERO</span>
                        <span>SEGUNDO</span>
                    </h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log">
                    <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">CONTACTAME</h4>
                                        <div class="form-group">
                                            <input type="email" name="logemail" class="form-style" placeholder="Tu Email" id="logemail" autocomplete="off" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Introduce un correo electrónico válido" required>
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <select class="form-style form-select" name="pais">
                                                <option value="" disabled selected>Selecciona tu país</option>
                                                <option value="España">España</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Francia">Francia</option>
                                                <option value="Inglaterra">Inglaterra</option>
                                                <option value="Alemania">Alemania</option>
                                            </select>
                                            <i class="input-icon uil uil-globe"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="tel" class="form-style" name="logphone" placeholder="Tu número de teléfono" autocomplete="off">
                                            <i class="input-icon uil uil-phone"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <textarea class="form-style form-control" name="mensaje" placeholder="Mensaje" rows="4" autocomplete="off" minlength="5" title="Mínimo 5 palabras"></textarea>
                                            <i class="input-icon uil uil-comment"></i>
                                        </div>
                                        <a href="#" class="btn mt-4" type="submit">ENVIAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">CONTACTAME</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-style" name="logname" placeholder="NOMBRE COMPLETO" id="logname" autocomplete="off">
                                            <i class="input-icon uil uil-user"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-style" name="logname" placeholder="NOMBRE DE LA EMPRESA" id="logname" autocomplete="off">
                                            <i class="input-icon uil uil-user"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-style" name="logname" placeholder="SECTOR PROFESIONAL" id="logname" autocomplete="off" required>
                                            <i class="input-icon uil uil-user"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="email" name="logemail" class="form-style" placeholder="Tu Email" autocomplete="off">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <a href="#" class="btn mt-4" type="submit">ENVIAR</a>
                                        </div>
                                    </div>
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

