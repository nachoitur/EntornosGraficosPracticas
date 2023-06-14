<html>
<head>
  <title>Alta Usuario</title>
</head>
<body>
<?php
  include("conexion.php");

  $ciudad = $_POST['ciudad'];
  $pais = $_POST['pais'];
  $habitantes = $_POST['habitantes'];
  $superficie = $_POST['superficie'];
  $tieneMetro = $_POST['tieneMetro'];
  
  $query = "SELECT Count(ciudad) as cant FROM ciudades WHERE ciudad='$ciudad'";
  $result = mysqli_query($link, $query) or die (mysqli_error($link));;
  $cant = mysqli_fetch_assoc($result);
  
  if ($cant ['cant']!=0){
    echo ("La ciudad ya está registrada<br>");
    echo ("<A href='Menu.html'>Volver al men&uacute;</A>");
  }
  else {
    if($tieneMetro == 'on'){
      $tieneMetro = 1;
    } else {$tieneMetro = 0;}
    $query = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
    values ('$ciudad','$pais', '$habitantes', '$superficie', '$tieneMetro')";
    mysqli_query($link, $query) or die (mysqli_error($link));
    echo("Alta de ciudad cargada correctamente<br>");
    echo ("<A href='Menu.html'>Volver al men&uacute;</A>");
    mysqli_free_result($result);
  }
  mysqli_close($link);
?>
</body>
</html>