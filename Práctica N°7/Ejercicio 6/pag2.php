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
    include ("conexion.php");
    $mail= $_POST['mail'];
    $query = "select * FROM alumnos WHERE mail ='$mail' ";
    $result = mysqli_query($link, $query) or die (mysqli_error($link));
    $fila = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) == 0) {
        echo ("<p style='color:red'>El mail ingresado no se encuentra registrado</p> <br>");
    }
    else{
        $_SESSION['usuario']= $fila['nombre'];
    }
    ?>
    <a href="pag3.php">Ingresar a p&aacute;gina principal</a>
</body>
</html>