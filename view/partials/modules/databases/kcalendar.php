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

    require "view\partials\kcalendar\add_event.php";
    // require "view\partials\modules\sidebar\index.php";

    echo "<p> buscar lo de nodemailer </p>";

    // echo `<!-- Button trigger modal -->
    // <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#kcalendar_filter_modal">
    //   Filtro
    // </button>
    
    // <!-- Modal -->
    // <div class="modal fade" id="kcalendar_filter_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    //   <div class="modal-dialog" role="document">
    //     <div class="modal-content">
    //       <div class="modal-header">
    //         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
    //         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    //           <span aria-hidden="true">&times;</span>
    //         </button>
    //       </div>
    //       <div class="modal-body">
            
    //       </div>
    //       <div class="modal-footer">
    //         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    //         <button type="button" class="btn btn-primary">Save changes</button>
    //       </div>
    //     </div>
    //   </div>
    // </div>`;

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

</body>

</html>