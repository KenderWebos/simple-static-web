<?php
require('../conexion.php');
require('../config.php');

$consulta = "select id, fecha, descripcion, titulo, (DATEDIFF(fecha, CURRENT_DATE)) as days_left from eventos ORDER BY fecha";
$resultado = mysqli_query($conexion, $consulta);
echo "<center>";
echo "<h1>KenderCalendar</h1>";
echo "<hr>";

echo "<table class='table table-striped table-hover' style='width:50%; height:250px'>";
        echo "<thead>
            <th> DIAS RESTANTES </th>
            <th> FECHA </th>
            <th> DESCRIPCION </th>
            <th> TITULO </th>
        </thead>";

        while ($row = mysqli_fetch_assoc($resultado)) {
        $days_left = $row['days_left'];
        $id = $row["id"];
        $fecha = $row["fecha"];
        $descripcion = $row["descripcion"];
        $titulo = $row['titulo'];
        $id = $row["id"];

        if ($days_left > -365) {
        echo '
        <tr>
            <th>' . $days_left . '</th>
            <th>' . $fecha . '</th>
            <th>' . $descripcion . '</th>
            <th>' . $titulo . '</th>
            <th>
        ';

        if($username == "kenderwebos"){
            echo 
            '
            <a href="view/partials/modules/databases/insert/delete_events.php?id=' . $id . '">
                    ELIMINAR
                </a>
            ';
        }

        echo '</th>

        </tr>';
        }
        }
        echo "
    </table>";

    echo "
</center>";
