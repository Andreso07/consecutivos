<?php
include "../Controllers/loginUsuarioController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> || Login </title>
    <link rel="stylesheet" href="../resources/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../resources/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../resources/AdminLTE-3.2.0/dist/css/adminlte.min.css?v=3.2.0">
    <style>
        /* Estilo para centrar el card */
        .login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ajustar la altura para que ocupe toda la pantalla */
            background-image: url('../img/logo_alcaldia.png'); /* Establecer la imagen como fondo */
            background-size: 55%; /* Ajustar el tamaño de la imagen */
            background-position: center; /* Centrar la imagen */
            background-repeat: no-repeat;
            width: auto; /* Ajustar el tamaño del logo según sea necesario */
            margin-top: -50px;
        }

        /* Estilo para el card transparente */
        .transparent-card {
            background-color: rgba(255, 255, 255, 0.7); /* Fondo transparente */
            border: none;
            padding: 10px;
        }

        /* Estilo para centrar el card */
        .center-card {
            width: 95%;
            padding: 0px;
        }

        /* Estilo para hacer los inputs transparentes */
        .form-control {
            background-color: rgba(255, 255, 255, 0.5); /* Fondo transparente con opacidad */
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- Agregar el card del login con estilos de Bootstrap y personalizados -->
        <div class="card card-outline card-dark transparent-card center-card">
            <!-- /.login-logo -->

            <div class="card-header text-center">
                <a style="color: #1588D9;" href="./index.php" class="h1"><b>Iniciar sesión</b></a>
            </div>
            <div class="card-body">

                <form action="" method="post">

                    <div class="form-group has-feedback">

                        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                    </div>

                    <div class="form-group has-feedback">

                        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    </div>

                    <div class="row">

                        <div class="col-xs-4">

                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

                        </div>

                    </div>

                    <?php
                    $login = new LoginUsuarioController();
                    $login->ctrIngresoUsuario();
                    ?>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <script src="../resources/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <script src="../resources/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../resources/AdminLTE-3.2.0/dist/js/adminlte.min.js?v=3.2.0"></script>

</body>

</html>
