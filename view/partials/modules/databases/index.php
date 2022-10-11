<?php
// $conexion = mysqli_connect("localhost", "root", "", "ingsoft")
require("conexion.php");
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
        echo "<hr>";

        echo "<table class='table table-striped table-hover' style='width:50%; height:250px'>";
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
            $id = $row["id"];

            echo '
                    <tr>
                        <th>'.$nombre_consultado.'</th>
                        <th>'.$apellido_resultado.'</th>
                        <th>'.$edad_resultado.'</th>
                        <th>'.$correo_resultado.'</th>
                        <th>
                            <button type="button" class="btn btn-warning">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </button>
                        </th>
                        <th>
                            <a href="view/partials/modules/databases/insert/delete_alumno.php?id='.$id.'">
                                ELIMINAR
                            </a>
                            '.$id.'
                        </th>
                        
                    </tr>
                ';
        }
        echo "</table>";
        echo "<hr>";
        echo '<form id="update_alumnos" action="view/partials/modules/databases/insert/update_alumnos.php" method="post">
                <H1>EDITAR ALUMNOS</H1>
                
                <input name="id" type="text" placeholder="ID"><p></p>
                <input name="nombre" type="text" placeholder="NOMBRE"><p></p>
                <input name="apellido" type="text" placeholder="APELLIDO"><p></p>
                <input name="edad" type="text" placeholder="EDAD"><p></p>
                <input name="correo" type="text" placeholder="CORREO"><p></p>
                <input class="btn btn-outline-dark" type="submit" value="SAVE">
            </form>';

        echo "</center>";
        
    ?>
    <center>
        <hr>
        <form action="view/partials/modules/databases/insert/insert_alumno.php" method="post">
            <H1>AGREGAR ALUMNOS</H1>
            
            <input name="nombre" type="text" placeholder="NOMBRE"><p></p>
            <input name="apellido" type="text" placeholder="APELLIDO"><p></p>
            <input name="edad" type="text" placeholder="EDAD"><p></p>
            <input name="correo" type="text" placeholder="CORREO"><p></p>
            <input class="btn btn-outline-dark" type="submit" value="SAVE">
        </form>
    </center>
    
</body>
</html>



