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
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <section class="navegacion">
            <a class="logo" href="home.php">MarioBros</a>
            <h1 class="h1-home">Bienvenido <?php echo  $_SESSION['usuario'] ?></h1>

            <nav class="nav">
                <a href="contacto.php">Contacto</a>
                <a href="usuarios.php">Usuarios</a>
                <a href="cerrarSesion.php">Cerrar Sesion</a>
            </nav>
        </section>
        <div class="section-header">
            <section class="noticias">
                <h3 class="texto-header">Noticias</h3>
            </section>
            <section class="juegos">
                <h3 class="texto-header">Juegos</h3>
            </section>
            <section class="personajes">
                <h3 class="texto-header">Personajes</h3>
            </section>
        </div>
    </header>
    <main>
    
    </main>
</body>
</html>