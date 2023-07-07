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
    <center>
        <h1>kCalendar</h1>
        <h3>Crear</h3>
        <form class="p-4 m-4 col-5" action="view/partials/modules/databases/insert/insert_events.php" method="post">
          <input name="descripcion" type="text" placeholder="DESCRIPCION" autocomplete="off">
          <br>
          <input name="fecha" type="date" placeholder="FECHA">
          <br>
          <select class="custom-select" name="select">
            <option value="termodinamica">termodinamica</option>
            <option value="ingenieria economica">ingenieria economica</option>
            <option value="TIS 2">TIS 2</option>
            <option value="sistemas operativos">sistemas operativos</option>
            <option value="topicos de investigacion">topicos de investigacion</option>
            <option value="Personal" selected>Personal</option>
          </select>

          <center>
            <input class="btn btn-success" type="submit" value="ACTUALIZAR">
          </center>
        </form>

        <div class="tableContainer col-sm-12 col-md-8 col-lg-6">
            <table class='table table-striped table-hover'>
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


                    <?php if ($days_left > -30) { ?>

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
        </div>
    </center>
</body>

</html>