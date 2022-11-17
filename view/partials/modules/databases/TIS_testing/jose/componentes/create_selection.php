<?php
require('../conexion.php');
session_start();
$_SESSION["id_equipo"] = $_POST["idEquipo"];
$_SESSION["nComponente"]  = $_POST["nComponente"];
$_SESSION["mComponente"]  = $_POST["mComponente"];
$_SESSION["modComponente"] = $_POST["modComponente"];
$_SESSION["selectComponente"]  = $_POST["selectComponente"];


if ($_SESSION["selectComponente"] == "form2") {
    header("Location: ../componentes/create_procesador.php?id_equipo=" .$id_equipo."&nComponente=" .$nComponente. "&mComponente=" .$mComponente. "&modComponente=" . $modComponente);
} else if ($_SESSION["selectComponente"] == "form3") {
    header("Location: ../componentes/create_pb.php?id_equipo=" .$id_equipo."&nComponente=" .$nComponente. "&mComponente=" .$mComponente. "&modComponente=" . $modComponente);
} else if ($_SESSION["selectComponente"]== "form4") {
    header("Location: ../componentes/create_ram.php?id_equipo=" .$id_equipo."&nComponente=" .$nComponente. "&mComponente=" .$mComponente. "&modComponente=" . $modComponente);
} else if ($_SESSION["selectComponente"] == "form5") {
    header("Location: ../componentes/create_disco.php");
} else {
    $query = "INSERT INTO componentes
        VALUES ('2','$id_equipo', '$nComponente', '$mComponente', '$modComponente')";
    $resultado = mysqli_query($conexion, $query);
}
