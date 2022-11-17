<form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
    <input type="file" name="imagen1" />
	<input type="submit" name="subir-imagen" value="Enviar imagen" />
</form>

<?php
    echo $_FILES['imagen1']['name'];
    echo $_FILES['imagen1']['tmp_name'];
    echo $_FILES['imagen1']['type'];
    echo $_FILES['imagen1']['size'];
    echo $_FILES['imagen1']['error'];
?>