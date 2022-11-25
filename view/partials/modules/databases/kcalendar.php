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
    <div class="feedback text-white border">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">kCalendar</li>
            </ol>
        </nav>
    </div>

    <!-- aqui es para hacer las notificaciones feedback -->
    
    <!-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div> -->

    <center>
        <h1>kCalendar</h1>
        <hr>
        <table class='table table-striped table-hover' style='width:50%; height:250px'>
            <thead>
                <th> DIAS RESTANTES </th>
                <th> FECHA </th>
                <th> DESCRIPCION </th>
                <th> TITULO </th>
            </thead>

            <?php
            $consulta = "select id, fecha, descripcion, titulo, (DATEDIFF(fecha, CURRENT_DATE)) as days_left from eventos ORDER BY fecha";
            $resultado = mysqli_query($conexion, $consulta);

            // require "view\partials\modules\sidebar\index.php";
            ?>

            <div class="createButtonContainer border col-10 bg-dark text-light p-20">
                <h3>Agregar eventos</h3>
                <?php require "view\partials\kcalendar\create_event_form.php"; ?>
            </div>

            <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <?php
                $days_left = $row['days_left'];
                $id = $row["id"];
                $fecha = $row["fecha"];
                $descripcion = $row["descripcion"];
                $titulo = $row['titulo'];
                $id = $row["id"];

                $day_left_class = $days_left == 0 ? "" : ($days_left >= 1 ? "text-success" : "text-danger");
                $day_left_text = $days_left == 0 ? "Hoy" : ($days_left == 1 ? "Mañana" : $days_left);
                ?>


                <?php if ($days_left > -365) { ?>

                    <tr>
                        <th>
                            <center>
                                <strong class='<?= $day_left_class ?>'><?= $day_left_text  ?></strong>
                            </center>
                        </th>
                        <th><?= $fecha ?></th>
                        <th><?= $descripcion ?></th>
                        <th><?= $titulo ?></th>
                        <th>
                            <!-- <a class="btn btn-primary" href="view/partials/modules/databases/insert/update_events.php?id=<?= $id ?>">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </a> -->
                            <?php require "view\partials\kcalendar\update_event_form.php"; ?>
                        </th>

                        <th>
                            <?php //require "view\partials\kcalendar\delete_event_form.php"
                            ?>
                            <a class="btn btn-danger" href="view/partials/modules/databases/insert/delete_events.php?id=<?= $id ?>">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </a>
                        </th>
                    </tr>

                <?php } ?>
            <?php  } ?>


        </table>
    </center>
</body>

</html>