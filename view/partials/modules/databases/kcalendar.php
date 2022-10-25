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

<!DOCTYPE html>
<html lang="en" style="font-family: arial">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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

        if ($days_left > -365) {
            echo '
                    <tr>
                        <th><center>' . $days_left_formated . '</center></th>
                        <th>' . $fecha . '</th>
                        <th>' . $descripcion . '</th>
                        <th>' . $titulo . '</th>
                        <th>
                            <a href="view/partials/modules/databases/insert/delete_events.php?id=' . $id . '">
                                ELIMINAR
                            </a>
                        </th>
                        
                    </tr>
                ';
        }
    }
    echo "</table>";

    echo "</center>";

    ?>
        <hr>
        <div class="db_module_container">
            <div class="db_module_container_element">
                <form action="view/partials/modules/databases/read/read_events.php" method="post">
                    <H1>CONSULTAR EVENTOS</H1>
                    <p></p>

                    <div class="switch-container">
                    <?php
                    $consulta = "SELECT name FROM `event-types`";
                    $resultado = mysqli_query($conexion, $consulta);

                    while ($row = mysqli_fetch_assoc($resultado))
                    {
                        $name = $row['name'];

                        echo 
                        '<div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">'. $name .'</label>
                        </div>';
                    }
                    ?>
                    </div>

                    <center>
                        <input class="btn btn-outline-dark" type="submit" value="CONSULTAR">
                    </center>
                </form>
            </div>

            <div class="simplecube"></div>

            <form class="db_module_container_element" action="view/partials/modules/databases/insert/insert_events.php" method="post">
                <H1>AGREGAR EVENTO</H1>

                <input name="descripcion" type="text" placeholder="DESCRIPCION" autocomplete="off">
                <input name="fecha" type="date" placeholder="FECHA">

                <div class="input-group mb-3">
                    <select class="custom-select" name="select">
                        <option value="Contabilidad">Contabilidad</option>
                        <option value="Economia">Economia</option>
                        <option value="Comunicacion de datos">Comunicacion de datos</option>
                        <option value="Taller de ingenieria de software">Taller de ingenieria de software</option>
                        <option value="Arquitectura de computadores">Arquitectura de computadores</option>
                        <option value="Personal" selected>Personal</option>
                    </select>
                    <div class="input-group-append">
                        <label class="input-group-text btn-success">Selected</label>
                    </div>
                </div>

                <center>
                    <input class="btn btn-outline-dark" type="submit" value="GUARDAR">
                </center>
            </form>

            <div class="simplecube"></div>
        </div>

</body>

</html>