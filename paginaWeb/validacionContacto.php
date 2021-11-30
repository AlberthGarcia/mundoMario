<?php
    require("dbConexion.php");
    session_start();
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $idUsuario = $_SESSION['usuarioBD']['id_usuario'];

    $consultaContacto = "INSERT INTO contactos (nombre,id_usuario,correo,asunto) VALUES ('$nombre','$idUsuario','$correo','$asunto')";
    $validacionConsulta = mysqli_query($conexion,$consultaContacto);

    if ($validacionConsulta) {
        echo "mensaje enviado";
    }else{
        echo "Tu mensaje no se envio con exito";
    }
?>