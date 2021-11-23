<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lancelot&display=swap" rel="stylesheet">
</head>
<body class="body-registro">
    <main class="contenedor-registro">
        <form action="validacionRegistro.php" method="post" class="form-registro">
            <h2>Registro</h2>
            <br><br>
            <label for="">Nombre</label>
            <br>
            <input type="text" name="nombre" required>
            <br><br>
            <label for="">Usuario</label>
            <br>
            <input type="text" name="usuario" required>
            <br><br>
            <label for="">Contraseña</label>
            <br>
            <input type="password" name="contrasena" required>
            <br><br>
            <label for="">Correo</label>
            <br>
            <input type="email" name="correo">
            <br>
            <button class="registrarse">Registrarse</button>
        </form>
        <div class="registro-registro">
            <p class="registrate">Ya tienes una cuenta? Inicia sesion aqui</p>
            <p><a href="login.php" class="login-registro">Login</a></p>
        </div>
    </main>
</body>
</html>