<?php
    require('../conexion.php');

    $nombre_equipo = $_POST["nombre_equipo"];
    $id_equipo = $_POST["id_equipo"];
    $rut = $_POST["rut"];
    $fechaAdquisicion =  $_POST["fAdquisicion"];
    $costoaAdquisicion = $_POST["cAdquisicion"];
    $caracteristicasAdquisicion = $_POST["tAdquisicion"];
    $formaaAdquisicion = $_POST["foAdquisicion"];
    $id_departamento = $_POST["id_departamento"];

    $query = "UPDATE equipos
        SET id_equipo=".$id_equipo.", rut_funcionario=".$rut.", nombre_equipo='".$nombre_equipo."', fecha_adquisicion='".$fechaAdquisicion."', 
        costo_adquisicion=".$costoaAdquisicion.",caracteristicas_adquisicion='".$caracteristicasAdquisicion."', forma_adquisicion='".$formaaAdquisicion."', id_departamento=".$id_departamento."
        WHERE id_equipo=".$id_equipo.";";
    $resultado = mysqli_query($conexion, $query);
    header("Location: ..index.html");