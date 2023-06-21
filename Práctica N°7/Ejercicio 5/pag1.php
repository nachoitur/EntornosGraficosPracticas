<?php
    session_start();
    $_SESSION["usuario"] = $_POST["nomUsu"];
    $_SESSION["contrasena"] = $_POST["conUsu"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5</title>
</head>
<body>
    <h3>¡Variables almacenadas!</h3>
    <br>
    <a href="pag2.php">Pasar a la siguiente p&aacute;gina</label>
</body>
</html>