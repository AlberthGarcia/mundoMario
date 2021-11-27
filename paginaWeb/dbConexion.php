<?php

    $conexion = mysqli_connect('localhost','root','','blogkof');
    if ($conexion) {
       echo "conexion exitosa"; 
       header('Location:login.php');
    }else{
        echo "error en la conexion";
    }

?>