<head>
    <title>Modificacion</title>
</head>
<body>
    <?php
    include ("conexion.php");

    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = $_POST['tieneMetro'];

    if($tieneMetro == 'on'){
      $tieneMetro = 1;
    } else {$tieneMetro = 0;}

    $query = "UPDATE ciudades set ciudad='$ciudad', pais='$pais', habitantes='$habitantes', superficie='$superficie', tieneMetro=$tieneMetro where ciudad='$ciudad' ";
    mysqli_query($link,$query) or die (mysqli_error($link));
    echo("La ciudad fue modificada<br>");
    echo("<a href= 'menu.html'>Volver al menú del ABM</a>");
    mysqli_close($link);
?>
</body>
</html>