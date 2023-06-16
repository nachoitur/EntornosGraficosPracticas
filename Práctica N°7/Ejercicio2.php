<?php
if(isset($_COOKIE["contador"])){
  $contador = $_COOKIE["contador"] + 1;
  setcookie("contador",$contador,time()+(86400 * 30));
}else{
  $contador = 1;
  setcookie("contador",$contador,time()+(86400 * 30));
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 2</title>
</head>
<body>
  <?php
    if($contador == 1){
      echo("<h1> Bienvenido a esta página! </h1> <br> <p>Por favor, vuelve a visitarnos!</p> <br> <a href='ola.php'>Recargar</a>");
    } else {
      echo("<h1> Bienvenido de nuevo! </h1> <br> <p>Has visitado esta página ".$contador." veces.</p> <br> <a href='ola.php'>Recargar</a>");
    }
  ?>
</body>
</html>