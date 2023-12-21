<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistema de Inventario</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">

     <style>
        body {
            background-image: url('../../img/fondo2.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #login-box {
            background-color: rgba(255, 255, 255, 0.8); /* Ajustar la opacidad del cuadro de login si es necesario */
            padding: 20px;
            border-radius: 10px;
        }

        /* Otros estilos... */
    </style>
</head>

<body>
    
    <div class="container">
        <div id="login"></div>
        <div class="row justify-content-center align-items-center min-vh-100">
            <div id="login-box" class="col-12 col-md-8 col-lg-6">
                <h2 class="text-center">LOGIN | SISTEMA</h2>
                <p class="text-center">Ingrese su usuario y contraseña para iniciar sesión</p>


                <div id="alert">
                </div>
                <form class="row g-3 needs-validation" novalidate id="loginForm" name="loginData">


                    <div class="form-group">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Acceder</button>
                    </div>
                </form>
                <br>

                <!-- <p class="text-center">¿Olvidaste tu contraseña? <a href="../recovery.php">Haz clic aquí</a></p> -->
            </div>
        </div>
    </div>


    <script src="../../js/login.js"></script>
</body>

</html>