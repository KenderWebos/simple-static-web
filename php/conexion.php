<?php
    $dbMode = "mysql";
    $isInTesting = true;

    // Variables para conexion
    $equipo= "localhost";
    $namebd= "biogames_db";
    $puerto= "5432";
    $usuario= "kenderwebos";
    $clave= ""; // admin2021

    if ($isInTesting)
    {
        $equipo= "localhost";
        $namebd= "kenderwebosdb";
        $puerto= "3306";
        $usuario= "KenderWebos";
        $clave= "";
    }

    if($dbMode == "mysql")
    {
        $conexion = mysqli_connect($equipo, $usuario, $clave, $namebd);
    }
    else if($dbMode == "pgsql")
    {
        $conexion = pg_connect("host=$equipo port=$puerto dbname=$namebd user=$usuario password=$clave");
    }

    if  (!$conexion)
    {
        echo "Error en la conexion";
    } 
    else 
    {
        echo "Conexion exitosa";
    }                       
?>