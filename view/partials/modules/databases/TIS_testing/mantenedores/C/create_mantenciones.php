<?php
    require('../conexion.php');

    $rut = $_POST["rut"];
    $nombre = $_POST["nombre"];

    $query = "INSERT INTO mantenedores (rut, nombre)
    VALUES ('$rut', '$nombre')";
    $resultado = mysqli_query($conexion, $query);

    // header("Location: http://localhost/index.php?p=/modules/databases/kcalendar");
