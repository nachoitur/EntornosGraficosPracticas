<html>
<head>
    <title>Paginación</title>
</head>
<body>
    <?php
    include("conexion.php");
    $cant_pags = 2;
    $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
    if (!$pagina) {
        $inicio = 0;
        $pagina=1;
    }
    else {
        $inicio = ($pagina - 1) * $cant_pags;
    }
    $query = "SELECT * FROM ciudades";
    $result = mysqli_query($link, $query);
    $registros=mysqli_num_rows($result);
    $total_paginas = ceil($registros/ $cant_pags);
    echo "Numero de registros encontrados: " . $registros . "<br>";
    echo "Se muestran paginas de " . $cant_pags . " registros cada una<br>";
    echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
    $query2 = "SELECT * FROM ciudades"." limit " . $inicio . "," . $cant_pags;
    $result = mysqli_query($link, $query2);
    $registros=mysqli_num_rows($result);
    ?>
    <table border=1>
        <tr>
            <td><b>Ciudad</b></td>
            <td><b>Pais</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>¿Tiene Metro?</b></td>
        </tr>
        <?php
        while ($fila = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo ($fila['ciudad']); ?></td>
            <td><?php echo ($fila['pais']); ?></td>
            <td><?php echo ($fila['habitantes']); ?></td>
            <td><?php echo ($fila['superficie']); ?></td>
            <td><?php if($fila['tieneMetro'] == 0) { echo ('No');} else { echo('Si');}; ?></td>
        </tr>
        <tr>
            <td colspan="5">
                <?php }
                mysqli_free_result($result);
                mysqli_close($link);
                ?>
            </td>
        </tr>
    </table>
    <?php
    if ($total_paginas > 1) {
        for ($i=1;$i<=$total_paginas;$i++) {
            if ($pagina == $i) { echo $pagina . " "; }
            else {echo "<a href='listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}
        }
    }
    ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center"><a href="menu.html">Volver al men&uacute;</a></p>
</body>
</html>