<?php
$titular="";
setcookie("titular",$titular,time()-3600);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 4: Borra cookie</title>
  <style>
    body{
      background-color: gainsboro;
      font: sans-serif;
    }
  </style>
</head>
<body>
  <h3>Su selección ha sido borrada</h3>
  <a href="pagina_titular.php">Click aqu&iacute; para volver atr&aacute;s</a>
</body>
</html>