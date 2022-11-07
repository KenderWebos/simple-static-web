<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="la gran descripcion del sitio web">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HeriTech </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="view/public/images/heritech/logo/heritech_logo_white.png" />
    <link rel="stylesheet" href="view/public/css/fix_bootstrap.css">
    <link rel="stylesheet" href="view/public/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
    <?php
        //logica para capturar la pagina que queremos abrir
        $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

        $isInAppMode = false;

        // require_once "view/partials/header.php";
        // require_once "view/partials/" . $pagina . '.php';
        // require_once "view/partials/footer.php";

        if($isInAppMode){
            // require_once "view\partials\modules\sidebar\index.php";
            require "view\partials\modules\sidebar\index.php";
            require "view\partials\modules\page_container\up.php";
            require_once "view/partials/" . $pagina . '.php';
            require "view\partials\modules\page_container\down.php";
            require_once "view/partials/footer.php";
        }else{
            require_once "view/partials/header.php";
            require_once "view/partials/" . $pagina . '.php';
            require_once "view/partials/footer.php";
        }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="view/public/js/main.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

</body>

</html>

<?php
    
?>