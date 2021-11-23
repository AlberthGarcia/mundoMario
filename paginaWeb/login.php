<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lancelot&display=swap" rel="stylesheet">
</head>
<body class="body-login">
    <main class="contenedor-login">
        <form action="validacion.php" method="post" class="form-login">
            <h2>Login</h2>
            <br>
            <label for="">Usuario</label>
            <br>
            <input type="text" name="correo">
            <br>
            <br>
            <label for="">Contraseña</label>
            <br>
            <input type="password" name="password">
            <br> <br>
            <button>Iniciar</button>
        </form>
        <div class="registro">
            <p class="registrate">No tienes cuenta? Registrate</p>
            <p><a href="registro.php" class="enlaceRegistro">Registrarse</a></p>
        </div>
    </main>
</body>
</html>