<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
            </nav>
        </section>
    </header>
    <main>
        <form action="" method="POST">
            <h2>Contactanos</h2>
            <br>
            <label for="">Ingresa tu nombre</label>
            <br>
            <input type="text" name="nombre">
            <br><br>
            <label for="">Ingresa tu Usuario</label>
            <br>
            <input type="text" name="usuario">
            <br><br>
            <label for="">Ingresa tu correo</label>
            <br>
            <input type="email" name="correo">
            <br><br>
            <label for="">Asunto</label>
            <br>
            <textarea name="asunto" id="" cols="30" rows="10"></textarea>
            <br><br>
            <button>Enviar</button>
        </form>
    </main>
</body>
</html>