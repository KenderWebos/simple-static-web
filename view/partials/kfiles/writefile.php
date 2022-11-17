<?php
    $ruta_indexphp = dirname(realpath(__FILE__));
    $ruta_fichero_origen = $_FILES['imagen1']['tmp_name'];
    $ruta_nuevo_destino = $ruta_indexphp . '/imagenes/' . $_FILES['imagen1']['name'];
    if ( in_array($_FILES['imagen1']['type'], $extensiones) ) {
        echo 'Es una imagen';
        if ( $_FILES['imagen1']['size']< $max_tamanyo ) {
            echo 'Pesa menos de 1 MB';
            if( move_uploaded_file ( $ruta_fichero_origen, $ruta_nuevo_destino ) ) {
                echo 'Fichero guardado con éxito';
            }
        }
    }
?>