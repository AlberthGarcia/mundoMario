<?php
    session_start();
    //Se quitan precacuciones una ves ya acabada la app y si solo son avisos
    error_reporting(0);
    //Se verifica que el usuario no este vacio ni nulo para acceder
    if ($_SESSION['usuario'] === null || $_SESSION['usuario'] === '') {
        echo "<h2>Usted no tiene autorizacion</h2>";
        //Se crea un boton para refresar al login
        echo "<a href=login.php>Regresar </a>";
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <section class="navegacion">
            <a class="logo" href="home.php">MarioBros</a>
            <nav class="nav">
                <a href="contacto.php">Contacto</a>
                <a href="usuarios.php">Usuarios</a>
                <a href="noticias.php">Mas noticias</a>
                <a href="cerrarSesion.php">Cerrar Sesion</a>
            </nav>
        </section>
    </header>
    <main class="back-contacto">
        <section  class="boxContacto">
            <form action="validacionContacto.php" method="POST">
                <h2>Contactanos</h2>
                <br>
                <label for="">Ingresa tu nombre</label>
                <br>
                <input type="text" name="nombre">
                <br><br>
                <label for="">Ingresa tu correo</label>
                <br>
                <input type="email" name="correo">
                <br><br>
                <label for="">Asunto</label>
                <br>
                <textarea name="asunto" id="" rows="5"></textarea>
                <br><br>
                <button class="botonContacto">Enviar</button>
            </form>
        </section>
    </main>
</body>
</html>