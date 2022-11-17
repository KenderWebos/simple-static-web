<?php
    require('../conexion.php');

    $id_equipo = $_POST["id_equipo"];

    $query = "DELETE FROM equipos WHERE id_equipo=".$id_equipo.";";
    $resultado = mysqli_query($conexion, $query);
    header("Location: ../index.html");