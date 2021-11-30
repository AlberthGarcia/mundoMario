<?php
    include_once("dbConexion.php");

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];

    #SE CREA LA CONSULTA CON EL GUARDADO DE DATOS
    $queryRegistro = "INSERT INTO usuario (nombre,usuario,contrasena,correo) values('$nombre','$usuario','$contrasena','$correo')";
    #SE VALIDA LA CONSULTA
    $validacion = mysqli_query($conexion,$queryRegistro);
    
?>