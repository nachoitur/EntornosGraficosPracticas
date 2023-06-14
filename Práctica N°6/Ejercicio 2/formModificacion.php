<html>
<head>
    <title>Modificacion</title>
</head>
<body>
    <?php
        include ("conexion.php");
        $ciudad = $_POST['ciudad'];
        $query = "SELECT * FROM ciudades WHERE ciudad ='$ciudad' ";
        $result = mysqli_query($link, $query) or die (mysqli_error($link));
        $fila = mysqli_fetch_array($result);
        if(mysqli_num_rows($result) == 0) {
            echo ("Dicha ciudad no se encuentra registrada <br>");
            echo ("<a href='formMod.html'>Volver atrás</a>");
        } else{
    ?>
    <form action="modificacion.php" method="post" name="formModi">
        <table width="356">
            <tr>
                <td width="103"> Ciudad: </td>
                <td width="243">
                    <input type="text" name="ciudad" size="20" maxlength="20" value="<?php echo($fila['ciudad']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Pais: </td>
                <td width="243">
                    <input type="text" name="pais" size="20" maxlength="20" value="<?php echo($fila['pais']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Habitantes: </td>
                <td width="243">
                    <input type="text" name="habitantes" size="20" maxlength="20" value="<?php echo($fila['habitantes']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Superficie: </td>
                <td width="243">
                    <input type="text" name="superficie" size="20" maxlength="20" value="<?php echo($fila['superficie']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> ¿Tiene metro? </td>
                <td width="243">
                    <input type="checkbox" name="tieneMetro" <?php if ($fila['tieneMetro'] == 1) {echo('checked');}; ?>>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="Submit" value="Modificar">
                </td>
            </tr>
        </table>
    </form>
    <?php
        }
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</body>
</html>