<?php
// $conexion = mysqli_connect("localhost", "root", "", "ingsoft")
require("conexion.php");

$contabilidad = true;
$economia = true;
$comunicacion_de_datos = true;
$taller_de_ingenieria_de_software = true;
$arquitectura_de_computadores = true;
$personal = true;

?>

<body>

    <?php
    $consulta = "select id, fecha, descripcion, titulo, (DATEDIFF(fecha, CURRENT_DATE)) as days_left from eventos ORDER BY fecha";
    $resultado = mysqli_query($conexion, $consulta);
    echo "<center>";
    echo "<h1>kCalendar</h1>";
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

        $days_left_formated = $days_left;

        // if($days_left > -365){
        //     continue;
        // }

        if($days_left == 0)
        {
            $days_left_formated = "<strong>HOY</strong>";
        }
        elseif($days_left > 0)
        {
            $days_left_formated = "<strong style='color: green'>" . $days_left . "</strong>";
            if($days_left == 1){
                $days_left_formated = "<strong style='color: green'> Mañana </strong>";
            }
        }
        elseif($days_left < 0)
        {
            $days_left_formated = "<strong style='color: red'>" . $days_left . "</strong>";
        }

        if ($days_left > -21) {
            echo '
                    <tr>
                        <th><center>' . $days_left_formated . '</center></th>
                        <th>' . $fecha . '</th>
                        <th>' . $descripcion . '</th>
                        <th>' . $titulo . '</th>
                        <th>
                        </th>
                    </tr>
                ';
        }
    }
    echo "</table>";

    echo "</center>";

    ?>

</body>

</html>