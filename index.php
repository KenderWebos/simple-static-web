<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="description" content="la gran descripcion del sitio web">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> HeriTech </title>
        <!-- <link rel="stylesheet" href="css/styles.css"> -->
        <link rel="shortcut icon" href="images/tierra_icon.png" href="/favicon.jpeg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
        <?php
        //logica para capturar la pagina que queremos abrir
        $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

        //este fragmento de html contiene el head de nuestra pagina web

        // require_once "partials/header.php";
        // require_once "partials/" . $pagina . '.php';
        // require_once "partials/footer.php";

        require_once "view/partials/header.php";
        require_once "view/partials/" . $pagina . '.php';
        require_once "view/partials/footer.php";

        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="view/public/js/main.js"></script>
</body>
</html>