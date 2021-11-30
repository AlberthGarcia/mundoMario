<?php 
    include_once("dbConexion.php");
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
                <a href="noticias.php">Mas noticias</a>
            </nav>
        </section>
    </header>
    <main>
        <div class="contenedor-usuarios">
            <table>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Usuario</td>
                    <td>Contaseña</td>
                    <td>Correo</td>
                </tr>
                <?php 
            
                    $consulta = "SELECT * FROM usuario";
                    $validacion = mysqli_query($conexion, $consulta);
                    while($resultado = mysqli_fetch_array($validacion)){
                        
                ?>
                        
                <tr class="tabla-usuarios">
                    <td><?php echo $resultado['id_usuario']?></td>
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