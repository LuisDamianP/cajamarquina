<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title><?php echo TITLE . ' - ' . $data['title']; ?></title>
    <!-- Favicon -->
    <link href="<?php echo BASE_URL; ?>assets/img/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <!-- Register -->
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="<?php echo BASE_URL; ?>assets/img/Logo.jpg" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Registrarse</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="nombre">Nombre</label>
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Campo Nombre obligatorio
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="apellido">Apellido</label>
                                    <input id="apellido" type="text" class="form-control" name="apellido" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Campo Apellido obligatorio
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Correo</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required>
                                    <div class="invalid-feedback">
                                        Campo Correo obligatorio
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Contraseña</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Require contraseña
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="confirmPassword">Validar Contraseña</label>
                                    <input id="confirmPassword" type="password" class="form-control" name="confirmPassword" required>
                                    <div class="invalid-feedback">
                                        Las contraseñas no coinciden
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="termsCheckbox" required>
                                    <label class="form-check-label" for="termsCheckbox">
                                        Acepta los <a href="#url_a_tus_terminos_y_condiciones" target="_blank">Términos y Condiciones</a>.
                                    </label>
                                </div>
                                <div class="align-items-center d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Registrarse
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                ¿Ya tienes una cuenta? <a href="<?php echo BASE_URL . 'principal/login' ?>" class="text-dark">Iniciar Sesión</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/register.js"></script>
</body>

</html>