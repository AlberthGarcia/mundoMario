<?php
    include_once("dbConexion.php");
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
    if( $_SESSION['admin'] === 'user'){
        echo "<h2>Usted no tiene autorizacion de consultar usuarios</h2>";
        //Se crea un boton para refresar al home  
        echo "<a href=home.php>Regresar </a>";
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <section class="navegacion">
            <a class="logo" href="home.php">MarioBros</a>
            <nav class="nav">
                <a href="contacto.php">Contacto</a>
                <a href="usuarios.php">Usuarios</a>
                <a href="cerrarSesion.php">Cerrar Sesion</a>
            </nav>
        </section>
    </header>
    <main>
        <div class="contenedor-usuarios">
            <table class="tabla-usuarios tabla-estilos">
                <caption>USUARIOS</caption>
                <tr>
                    <td class="borde-final">ID</td>
                    <td>Nombre</td>
                    <td>Usuario</td>
                    <td>Contraseña</td>
                    <td>Correo</td>
                </tr>
                <?php 
            
                    $consulta = "SELECT * FROM usuario";
                    $validacion = mysqli_query($conexion, $consulta);
                    while($resultado = mysqli_fetch_array($validacion)){
                        
                ?>
                        
                <tr>
                    <td class="borde-final"><?php echo $resultado['id_usuario']?></td>
                    <td><?php echo $resultado['nombre']?></td>
                    <td><?php echo $resultado['usuario']?></td>
                    <td><?php echo $resultado['contrasena']?></td>
                    <td><?php echo $resultado['correo']?></td>
                    <?php
                        }
                    ?>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>