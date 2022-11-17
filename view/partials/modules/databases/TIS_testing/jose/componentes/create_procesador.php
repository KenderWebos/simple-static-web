<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <form id=mainForm action="post_componente.php" method="post">
        <div class="container-sm">
            <H1 class="mx-auto">AGREGAR COMPONENTE</H1>
            <div class="input-group mb-3">
                <span class="input-group-text">ID Equipo</span>
                <input type="text" aria-label="idEquipo" name="idEquipo" class="form-control" value=<?php isset($_GET["id_equipo"]) ? print $_GET["id_equipo"] : ""; ?> readonly>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre Componente</span>
                <input type="text" class="form-control" aria-label="nComponente" name="nComponente" aria-describedby="inputGroup-sizing-default" value=<?php isset($_GET["nComponente"]) ? print $_GET["nComponente"] : ""; ?> readonly>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Marca</span>
                <input type="text" class="form-control" aria-label="mComponente" name="mComponente" aria-describedby="inputGroup-sizing-default" value=<?php isset($_GET["mComponente"]) ? print $_GET["mComponente"] : ""; ?> readonly>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Modelo</span>
                <input type="text" class="form-control" aria-label="modComponente" name="modComponente" aria-describedby="inputGroup-sizing-default" value=<?php isset($_GET["modComponente"]) ? print $_GET["modComponente"] : ""; ?> readonly>
            </div>
            <select class="form-selec mb-3" aria-label="Tipo de Componente" name="selectComponente" readonly >
                <option selected>Procesador</option>
            </select>
            <div class="input-group mb-3">
                <span class="input-group-text">Nucleos</span>
                <input type="number" aria-label="cpuNucleo" name="cpuNucleo" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Socket</span>
                <input type="text" aria-label="cpuSocket" name="cpuSocket" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Reloj Base</span>
                <input type="number" class="form-control" aria-label="cpuRelojBase" name="cpuRelojBase" aria-describedby="inputGroup-sizing-default">
                <span class="input-group-text">GHz</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Hilos</span>
                <input type="number" class="form-control" aria-label="cpuHilos" name="cpuHilos" aria-describedby="inputGroup-sizing-default">
            </div>    
            <input class="btn btn-outline-dark" type="submit" value="GUARDAR">
        </div>
    </form>
</body>

</html>