<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_event">
  <span class="material-symbols-outlined">
    add
  </span>
  <!-- <p>Evento</p> -->
</button>

<!-- Modal -->
<div class="modal fade text-dark mx-auto" id="add_event" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR EVENTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="" action="view/partials/modules/databases/insert/insert_events.php" method="post">
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