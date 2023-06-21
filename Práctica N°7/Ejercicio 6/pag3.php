<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        if (isset($_SESSION['usuario'])) {
            echo "¡Bienvenido/a ".$_SESSION['usuario']."!";
        } else {
            echo "No puede visitar esta página.";
        }
        session_destroy();
    ?>
    <br> <br>
    <a href="pag1.php">Volver a la primera p&aacute;gina</a>
</body>
</html>