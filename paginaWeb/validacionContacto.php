<?php
    require("dbConexion.php");

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];

    $consultaContacto = "INSERT INTO contactos (nombre,correo,asunto) VALUES ('$nombre','$correo','$asunto')";
    $validacionConsulta = mysqli_query($conexion,$consultaContacto);

    if ($validacionConsulta) {
        echo "mensaje enviado";
    }else{
        echo "Tu mensaje no se envio con exito";
    }
?>