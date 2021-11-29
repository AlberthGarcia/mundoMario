<?php
    include_once("dbConexion.php");//Llamado a la conexion de la base de datos

    //declaramos las variables que contendra los datos del formulario-login
    $usuario= $_POST['usuario'];
    $constrasena= $_POST['password'];

    //INICIAMOS SESION
    session_start();
    $_SESSION['usuario'] = $usuario;
    //Realizamos la peticion
    $consulta = "SELECT * FROM usuario WHERE usuario='$usuario' and contrasena = '$constrasena'";
    
    //Se realiza la consulta
    $querySesion = mysqli_query($conexion, $consulta);
    $row= mysqli_fetch_array($querySesion);

    //validacion de datos
    if (mysqli_num_rows($querySesion) == 1) {
        //Redirecciona al home si es correcto
        header('location:home.php');
    }else
        if(mysqli_num_rows($querySesion) !=1 ){
        //Dato incorrecto
        echo "<h1>Usuario y contrasena incorrectose</h1>";   
        }
?>