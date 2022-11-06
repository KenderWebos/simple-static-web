<?php
require("conexion.php");

?>

<body>

    <?php
    $consulta = "select id_mantencion, nombre_mantencion, tipo_mantencion, id_equipo from mantenciones";
    $resultado = mysqli_query($conexion, $consulta);
    echo "<center>";
    echo "<h1>mantenciones</h1>";
    echo "<hr>";

    echo "<table class='table table-striped table-hover' style='width:50%; height:250px'>";
    echo "<thead>
            <th> nombre_mantencion </th>
            <th> tipo_mantencion </th>
            <th> id_equipo </th>
        </thead>";

    while ($row = mysqli_fetch_assoc($resultado)) {
        $id_mantencion = $row['id_mantencion'];
        $nombre_mantencion = $row["nombre_mantencion"];
        $tipo_mantencion = $row["tipo_mantencion"];
        $id_equipo = $row["id_equipo"];

        echo '
                    <tr>
                        <th>' . $nombre_mantencion . '</th>
                        <th>' . $tipo_mantencion . '</th>
                        <th>' . $id_equipo . '</th>
                        <th>
                        </th>
                    </tr>
                ';
    }
    echo "</table>";

    echo "</center>";

    ?>

</body>

</html>