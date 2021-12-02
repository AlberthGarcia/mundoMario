<?php
    include_once("dbConexion.php");

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    $admin = $_POST['admin'];

    session_start();

    if ($admin === 'administrador') {
        $banderAdmin = 1;
    }else{
        $banderAdmin = 2;
    }
    $_SESSION['admin'] = $banderAdmin;
    
    #SE CREA LA CONSULTA CON EL GUARDADO DE DATOS
    $queryRegistro = "INSERT INTO usuario (nombre,usuario,contrasena,correo,rol) values('$nombre','$usuario','$contrasena','$correo','$banderAdmin');";
    #SE VALIDA LA CONSULTA
    $validacion = mysqli_query($conexion,$queryRegistro);
    
    if ($validacion) {
        header('Location:login.php');
    }else{
        echo "Registro fallido";
    }
?>