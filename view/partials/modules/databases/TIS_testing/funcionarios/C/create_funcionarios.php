<?php
    require('../conexion.php');

    $nombre_funcionario = $_POST["nombre_funcionario"];
    $tipo_funcionario = $_POST["tipo"];

    $query = "INSERT INTO funcionarios (nombre_funcionario, tipo)
    VALUES ('$nombre_funcionario', '$tipo_funcionario')";
    $resultado = mysqli_query($conexion, $query);

    // header("Location: http://localhost/index.php?p=/modules/databases/kcalendar");
