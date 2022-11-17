<form action="view\partials\modules\databases\TIS_testing\funcionarios\U\update_funcionarios.php" method="post">
    <H1>ACTUALIZAR FUNCIONARIO</H1>

    <input name="rut_funcionario" type="text" placeholder="RUT" autocomplete="off"><br>
    <small>ingresar rut sin puntos ni guion</small><br><br>
    <input name="nombre_funcionario" type="text" placeholder="NOMBRE" autocomplete="off"><br><br>

    <div class="input-group mb-3">
        <select class="custom-select" name="tipo">
            <option value="tipo_1">tipo_1</option>
            <option value="tipo_2">Tipo_2</option>
        </select>
        <div class="input-group-append">
            <label class="input-group-text btn-success">Selected</label>
        </div>
    </div>
    
    <input class="btn btn-outline-dark" type="submit" value="GUARDAR">
</form>