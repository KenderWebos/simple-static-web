<?php
    // require('../conexion.php');

    // $fecha = $_POST["fecha"];
    // $hora = $_POST["hora"];
    // $descripcion = $_POST["descripcion"];
    // $titulo = $_POST["select"];

    // // $query = "INSERT INTO eventos (fecha, descripcion, titulo)
    // // VALUES ('$fecha', '$descripcion', '$titulo')";
    // //$resultado = mysqli_query($conexion, $query);

    // header("Location: http://localhost/index.php?p=/modules/databases/kcalendar");
    // // index.php
?>

<!-- Button trigger modal -->
<button type="button text-dark" class="btn btn-primary" data-toggle="modal" data-target="#update_event">
  <span class="material-symbols-outlined">
    edit
  </span>
</button>

<!-- Modal -->
<div class="modal fade text-dark mx-auto text-center" id="update_event" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR EVENTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="m-5" action="view/partials/modules/databases/insert/insert_events.php" method="post">
          <input name="descripcion" type="text" placeholder="DESCRIPCION" autocomplete="off">
          <br>
          <input name="fecha" type="date" placeholder="FECHA">
          <br>
          <select class="custom-select" name="select">
            <option value="Contabilidad">Contabilidad</option>
            <option value="Economia">Economia</option>
            <option value="Comunicacion de datos">Comunicacion de datos</option>
            <option value="Taller de ingenieria de software">Taller de ingenieria de software</option>
            <option value="Arquitectura de computadores">Arquitectura de computadores</option>
            <option value="Personal" selected>Personal</option>
          </select>

          <center>
            <input class="btn btn-success" type="submit" value="GUARDAR">
          </center>
        </form>

      </div>
      <div class="modal-footer">
        <small>🎁</small>
        <a href="/"></a>
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" class="btn btn-success">Save changes</button> -->
      </div>
    </div>
  </div>
</div>