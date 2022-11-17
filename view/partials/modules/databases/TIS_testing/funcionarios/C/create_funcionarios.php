<?php
    require('../../conexion.php');

    $rut_funcionario = $_POST["rut_funcionario"];
    $nombre_funcionario = $_POST["nombre_funcionario"];
    $tipo_funcionario = $_POST["tipo"];

    $query = "INSERT INTO funcionarios (rut_funcionario, nombre_funcionario, tipo)
    VALUES ('$rut_funcionario', '$nombre_funcionario', '$tipo_funcionario')";
    $resultado = mysqli_query($conexion, $query);

    // header("Location: http://localhost/index.php?p=/modules/databases/kcalendar");
