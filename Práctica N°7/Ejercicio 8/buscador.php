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
        $result = mysql_query("select * from buscador where canciones LIKE '%".$palabra."%'") or die (mysql_error());
        if(mysql_num_rows($result) == "0") {
            echo "No hay resultados respecto a la palabra que busca.";
        } else {
            echo "<center><strong>RESULTADOS DE BUSQUEDA</strong></center><tr>";
            while($cat = mysql_fetch_array($result)) {
                ?><td><?php echo ($cat['canciones']); ?></td>
            </tr>    
            <tr>
              <td colspan="5">
            <?php  } }
    }else{
        echo "<form name='FormBuscador' method='post' action=''><input name='Palabra' type='text' id='Palabra'><input type='submit' name='Submit' value='Buscar!'></form>";
    }?>
</body>
</html>