<?php
    require('../conexion.php');

    $nombre_consultado = $_POST["nombre"];
    $apellido_resultado = $_POST["apellido"];
    $edad_resultado = $_POST["edad"];
    $correo_resultado = $_POST["correo"];

    $query = "INSERT INTO alumnos (nombre, apellido, edad, correo)
    VALUES ('$nombre_consultado', '$apellido_resultado', '$edad_resultado', '$correo_resultado')";
    $resultado = mysqli_query($conexion, $query);

    header("Location: http://localhost/index.php?p=/modules/databases/index");
    // index.php
?>