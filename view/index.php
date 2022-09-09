<?php
        //logica para capturar la pagina que queremos abrir
        $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

        //este fragmento de html contiene el head de nuestra pagina web
        require_once "html/header.php";

        require_once "html/".$pagina.'.php';

        require_once "html/footer.php";
?>