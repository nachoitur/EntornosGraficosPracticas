<?php
if(isset($_POST["usuario"])){
  $usuario = $_POST["usuario"];
  setcookie("usuario",$usuario,time()+(86400 * 90));
}else{
  if (isset($_COOKIE["usuario"])){
    $usuario = $_COOKIE["usuario"];
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 3</title>
</head>
<body>
  <?php
    if(isset($_COOKIE["usuario"])){
      echo("<h1>Bienvenido de nuevo ".$usuario."!!</h1>");
      ?>
      <form action="Ejercicio 3.php" method="post">Ingrese su nuevo nombre de usuario si así lo desea
        <br>
        <p>Nombre de usuario: </p>
        <input type="text" name="usuario" size="20" maxlength="20" value="<?php echo($usuario); ?>">
        <input type="submit" value="Ingresar">
      </form> 
      <?php
    } else {
      ?>
      <h1>Bienvenido!</h1>
      <form action="Ejercicio 3.php" method="post">Ingrese un nombre de usuario así lo recordaremos
        <br>
        <p>Nombre de usuario: </p>
        <input type="text" name="usuario" size="20" maxlength="20">
        <input type="submit" value="Ingresar">
      </form> 
      <?php
    }
  ?>
</body>
</html>