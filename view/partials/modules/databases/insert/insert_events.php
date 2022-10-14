<?php
    require('../conexion.php');

    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $descripcion = $_POST["descripcion"];
    $titulo = $_POST["select"];

    $query = "INSERT INTO eventos (fecha, descripcion, titulo)
    VALUES ('$fecha', '$descripcion', '$titulo')";
    $resultado = mysqli_query($conexion, $query);

    header("Location: http://localhost/index.php?p=/modules/databases/kcalendar");
    // index.php
?>