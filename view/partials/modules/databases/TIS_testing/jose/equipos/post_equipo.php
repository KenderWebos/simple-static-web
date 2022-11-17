<?php
    require('../conexion.php');

    $nombre_equipo = $_POST["nombre_equipo"];
    $id_equipo = $_POST["id_equipo"];
    $rut = $_POST["rut"];
    $fechaAdquisicion = $_POST["fAdquisicion"];
    $costoaAdquisicion = $_POST["cAdquisicion"];
    $caracteristicasAdquisicion = $_POST["tAdquisicion"];
    $formaaAdquisicion = $_POST["foAdquisicion"];
    $id_departamento = $_POST["id_departamento"];

    $query = "INSERT INTO equipos
        VALUES ('$id_equipo', '$rut', '$nombre_equipo', '$fechaAdquisicion', '$costoaAdquisicion','$caracteristicasAdquisicion', '$formaaAdquisicion', '$id_departamento')";
    $resultado = mysqli_query($conexion, $query);
    header("Location: ../componentes/create_componente.php?id_equipo=".$id_equipo);