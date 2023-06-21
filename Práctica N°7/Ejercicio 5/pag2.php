<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5</title>
</head>
<body>
    <h3>Las variables que has guardado son:</h3>
    <table>
        <tr>
            <td>Usuario: </td>
            <td><?php echo $_SESSION["usuario"]; ?></td>
        </tr>
        <tr>
            <td>Contrase&ntilde;a: </td>
            <td><?php echo $_SESSION["contrasena"]; ?></td>
        </tr>
        <tr>
            <td><a href="formUsuario.html">Volver a la primera p&aacute;gina</td>
        </tr>
    </table>
</body>
</html>