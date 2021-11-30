<?php
    include_once("dbConexion.php");//Llamado a la conexion de la base de datos

    //declaramos las variables que contendra los datos del formulario-login
    $usuario= $_POST['usuario'];
    $constrasena= $_POST['password'];
     
    //Realizamos la peticion
    $consulta = "SELECT * FROM usuario WHERE usuario='$usuario' and contrasena = '$constrasena'";
    
    //Se realiza la consulta
    $querySesion = mysqli_query($conexion, $consulta);

    //validacion de datos, recupera el numero de filas que trae la consulta
    if (mysqli_num_rows($querySesion) == 1) {
        //arrancamos la sesion
        session_start();
        //Se recorren todos los datos y se guardan en una variable global
        while($usuarioBD = mysqli_fetch_array($querySesion)){
            $_SESSION['usuarioBD'] = $usuarioBD;
        }
        // Redirecciona al home si es correcto
        header('location:home.php');
    }else{
        //Dato incorrecto
        echo "<h1>Usuario y contrasena incorrecta</h1>";   
        }
?>