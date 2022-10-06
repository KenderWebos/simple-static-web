<?php
    require('../conexion.php');

    $id = $_POST["id"];
    $nombre_consultado = $_POST["nombre"];
    $apellido_resultado = $_POST["apellido"];
    $edad_resultado = $_POST["edad"];
    $correo_resultado = $_POST["correo"];

    $query = "UPDATE `alumnos` 
    SET `nombre`='$nombre_consultado',`apellido`='$apellido_resultado',`edad`='$edad_resultado',`correo`='$correo_resultado' 
    WHERE alumnos.id = $id";

    $resultado = mysqli_query($conexion, $query);

    header("Location: http://localhost/index.php?p=/modules/databases/index");
    // index.php
?>