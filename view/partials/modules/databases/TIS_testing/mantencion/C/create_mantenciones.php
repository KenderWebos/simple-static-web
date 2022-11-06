<?php
    require('../conexion.php');

    $nombre_mantencion = $_POST["nombre_mantencion"];
    $tipo_mantencion = $_POST["tipo_mantencion"];
    $id_equipo = $_POST["id_equipo"];


    $query = "INSERT INTO mantenciones (nombre_mantencion, tipo_mantencion, id_equipo)
    VALUES ('$nombre_mantencion', '$tipo_mantencion', '$id_equipo')";
    $resultado = mysqli_query($conexion, $query);

    // header("Location: http://localhost/index.php?p=/modules/databases/kcalendar");
