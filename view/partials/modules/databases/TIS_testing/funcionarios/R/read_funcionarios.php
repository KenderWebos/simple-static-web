<?php
require("conexion.php");

?>

<body>

    <?php
    $consulta = "select rut_funcionario, nombre_funcionario, tipo from funcionario"; // cambio de nombre funcionarios (?)
    $resultado = mysqli_query($conexion, $consulta);
    echo "<center>";
    echo "<h1>funcionarios</h1>";
    echo "<hr>";

    echo "<table class='table table-striped table-hover' style='width:50%; height:250px'>";
    echo "<thead>
            <th> rut_funcionario </th>
            <th> nombre_funcionario </th>
            <th> tipo </th>
        </thead>";

    while ($row = mysqli_fetch_assoc($resultado)) {
        $rut_funcionario = $row['rut_funcionario'];
        $nombre_funcionario = $row["nombre_funcionario"];
        $tipo_funcionario = $row["tipo"];

        echo '
                    <tr>
                        <th>' . $rut_funcionario . '</th>
                        <th>' . $nombre_funcionario . '</th>
                        <th>' . $tipo_funcionario . '</th>
                        <th>
                        </th>
                    </tr>
                ';
    }
    echo "</table>";

    echo "</center>";

    ?>

</body>

</html>