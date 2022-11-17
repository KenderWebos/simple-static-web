<!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#add_event">
      Agregar eventos
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="add_event" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
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
          </div>
          <div class="modal-footer">
            <small>🎁</small>
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>