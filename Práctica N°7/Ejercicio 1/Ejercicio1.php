<?php
if(isset($_POST["estilo"])){
  $estilo = $_POST["estilo"];
  setcookie("estilo",$estilo,time()+(86400 * 90));
}else{
  if (isset($_COOKIE["estilo"])){
    $estilo = $_COOKIE["estilo"];
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 1</title>
  <?php
    if (isset($estilo)){echo '<link rel="STYLESHEET" type="text/css" href="'.$estilo.'.css">';}
  ?>
</head>
<body>
  <h1>Bienvenido a la página, elige tu propio estilo</h1>
  <form action="Ejercicio1.php" method="post"> Seleccionar el estilo que deseas visualizar en la página:
    <br> <br>
    <select name="estilo">
      <option value="amarillo">Amarillo
      <option value="azul">Azul
      <option value="rosa">Rosa
      <option value="verde">Verde
    </select>
    <input type="submit" value="Cambiar estilo">
  </form>
</body>
</html>