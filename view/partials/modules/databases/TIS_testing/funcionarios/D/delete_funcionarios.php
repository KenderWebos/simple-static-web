<?php
    require('../conexion.php');

    $id = $_GET["id"];

    $query = "DELETE FROM `funcionario` WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    // header("Location: http://localhost/index.php?p=/modules/databases/kcalendar");
?>