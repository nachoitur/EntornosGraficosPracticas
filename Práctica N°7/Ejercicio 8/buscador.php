<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    include("conexion.php");
    $palabra=$_POST['Palabra'];
    if($palabra){
        $query = "SELECT * FROM buscador WHERE canciones LIKE '%".$palabra."%'";
        $result = mysqli_query($link,$query);
        if(mysqli_num_rows($result) == "0") {
            echo "No hay resultados respecto a la palabra que busca.<br>";
        } else {
            echo "<strong>RESULTADOS DE B&Uacute;SQUEDA:</strong><tr>";
            while($cat = mysqli_fetch_array($result)) {
                ?><td><p>Canción N°<?php echo ($cat['id'].": ".$cat['canciones']); ?><br></td>
            </tr>    
            <tr>
              <td colspan="5">
            <?php  } }
    }else{
        echo "No se ha ingresado ninguna palabra, por favor, vuelva hacia atrás";
    }
    ?>
    <br>
    <a href="buscador.html">Volver atr&aacute;s</a>
</body>
</html>