<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <form action="post_equipo.php" method="post">

        <div class="container-sm">
            <H1 class="mx-auto">AGREGAR EQUIPO</H1>
            <div class="input-group mb-3">
                <span class="input-group-text">ID y Nombre Equipo</span>
                <input type="number" aria-label="id_equipo" name="id_equipo" class="form-control">
                <input type="text" aria-label="nombre_equipo" name="nombre_equipo" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Rut Funcionario</span>
                <input type="text" class="form-control" aria-label="rut" name="rut" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Fecha Adquisicion</span>
                <input type="date" class="form-control" aria-label="fAdquisicion" name="fAdquisicion" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Costo de Adquisicion</span>
                <textarea  type="number" class="form-control" aria-label="cAdquisicion" name="cAdquisicion" aria-describedby="inputGroup-sizing-default"></textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Caracteristicas Adquisicion</span>
                <input type="text" class="form-control" aria-label="tAdquisicion" name="tAdquisicion" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Forma Adquisicion</span>
                <input type="text" class="form-control" aria-label="foAdquisicion" name="foAdquisicion" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">id_departamento</span>
                <input type="number" class="form-control" aria-label="id_departamento" name="id_departamento" aria-describedby="inputGroup-sizing-default">
            </div>
            <input class="btn btn-outline-dark" type="submit" value="GUARDAR">
        </div>
    </form>
</body>

</html>