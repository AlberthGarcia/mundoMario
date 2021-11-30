<?php
    //Iniciamos sesion
    session_start();
    //Destruimos la sesion al cerrar sesion
    session_destroy();
    //Se redirige al login
    header("location:login.php");
?>