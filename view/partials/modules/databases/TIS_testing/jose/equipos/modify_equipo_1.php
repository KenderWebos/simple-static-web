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
    <form action="modify_equipo_2.php" method="post">

        <div class="container-sm">
            <H1 class="mx-auto">Modificar Equipo</H1>
            <?php if (isset($_GET["error"]) && $_GET["error"] == 1) {
                echo "<h3>Error: ID del equipo no esta presente en la base de datos.</h3>";
            } ?>
            <div class="input-group mb-3">
                <span class="input-group-text">ID Equipo</span>
                <input type="number" aria-label="id_equipo" name="id_equipo" class="form-control">
            </div>
            <input class="btn btn-outline-dark" type="submit" value="GUARDAR">
        </div>
    </form>
</body>

</html>