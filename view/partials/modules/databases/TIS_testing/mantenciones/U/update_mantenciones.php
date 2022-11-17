<form action="view/partials/modules/databases/insert/insert_events.php" method="post">
    <H1>UPDATE MANTENCION</H1>

    <input name="descripcion" type="text" placeholder="id" autocomplete="off">
    <input name="descripcion" type="text" placeholder="DESCRIPCION" autocomplete="off">
    <input name="fecha" type="date" placeholder="FECHA">

    <div class="input-group mb-3">
        <select class="custom-select" name="select">
            <option value="tipo_1">tipo_1</option>
            <option value="tipo_2">Tipo_2</option>
        </select>
        <div class="input-group-append">
            <label class="input-group-text btn-success">Selected</label>
        </div>
    </div>

    <center>
        <input class="btn btn-outline-dark" type="submit" value="GUARDAR">
    </center>
</form>