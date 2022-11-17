<?php
    require('../../conexion.php');

    $rut_funcionario = $_POST["rut_funcionario"];
    $nombre_funcionario = $_POST["nombre_funcionario"];
    $tipo_funcionario = $_POST["tipo"];

    $query = "UPDATE `funcionarios` SET NOMBRE_FUNCIONARIO=".$nombre_funcionario.", tipo=".$tipo_funcionario."WHERE rut_funcionario =".$rut_funcionario.";";

    $resultado = mysqli_query($conexion, $query);

    echo $resultado;

    // header("Location: http://localhost/index.php?p=/modules/databases/TIS_testing/funcionarios/U/update_funcionarios_form.php");

