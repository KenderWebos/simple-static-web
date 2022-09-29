<?php

// $conexion = mysqli_connect("localhost", "root", "", "ingsoft")
require("conexion.php");

// if($conexion){
//     echo "MAMAHUEVO FUNCIONOOOOO"
// }else{
//     echo "hermanito toi sad no funciono"
// }

?>

<!DOCTYPE html>
<html lang="en" style="font-family: arial">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El gran titulo</h1>
    <p>mentira no es tan grande</p>
    <?php
        $consulta = "SELECT * FROM alumnos";
        $resultado = mysqli_query($conexion, $consulta);

        echo "<center>";
        echo "<table style='background-color:black;color:white; width:50%; height:250px'>";
        echo "<thead>
            <th> NOMBRE </th>
            <th> APELLIDO </th>
            <th> EDAD </th>
            <th> CORREO </th>
        </thead>";
        while( $row = mysqli_fetch_assoc($resultado) ){
            $nombre_consultado = $row["nombre"];
            $apellido_resultado = $row["apellido"];
            $edad_resultado = $row["edad"];
            $correo_resultado = $row["correo"];
            // echo "<center><h1>".$nombre_consultado." ";
            // echo "".$apellido_resultado." ";
            // echo "".$edad_resultado." ";
            // echo "".$correo_resultado."</h1></center>";

            echo '
                    <tr>
                        <th>'.$nombre_consultado.'</th>
                        <th>'.$apellido_resultado.'</th>
                        <th>'.$edad_resultado.'</th>
                        <th>'.$correo_resultado.'</th>
                    </tr>
                ';
        }
        echo "</table>";
        echo "</center>"
        
    ?>
    <hr>
    <form action="insert/insert_alumno.php" method="post">
        <H1>AGREGAR ALUMNOS</H1>
        <input name="nombre" type="text" placeholder="NOMBRE"><p></p>
        <input name="apellido" type="text" placeholder="APELLIDO"><p></p>
        <input name="edad" type="text" placeholder="EDAD"><p></p>
        <input name="correo" type="text" placeholder="CORREO"><p></p>
        <input type="submit" value="SAVE">
    </form>
</body>
</html>



