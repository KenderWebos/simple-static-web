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
    <div class="webmodule">
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

                <input class="btn btn-outline-dark" type="submit" value="CONSULTAR">
            </form>
            <hr>
    </div>

    <?php
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
        <form action="view/partials/modules/databases/insert/insert_events.php" method="post">
            <H1>AGREGAR EVENTO</H1>

            <input name="descripcion" type="text" placeholder="DESCRIPCION" autocomplete="off">
            <input name="fecha" type="date" placeholder="FECHA">

            <!-- <select name="select">
                <option value="Contabilidad">Contabilidad</option>
                <option value="Economia">Economia</option>
                <option value="Comunicacion de datos">Comunicacion de datos</option>
                <option value="Taller de ingenieria de software">Taller de ingenieria de software</option>
                <option value="Arquitectura de computadores">Arquitectura de computadores</option>
                <option value="Personal" selected>Personal</option>
            </select> -->

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

            <input class="btn btn-outline-dark" type="submit" value="GUARDAR">
        </form>

</body>

</html>