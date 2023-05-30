<?php
session_start();
?>
<html>
  <body>
    <h1 style="color:blue;">¡Bienvenido a la página 1!</h1>
    <p>
    <?php
      if (isset($_SESSION['cant_visitas'])){
        $_SESSION['cant_visitas']++;
      } else {
        $_SESSION['cant_visitas'] = 1;
      }
      if($_SESSION['cant_visitas']== 1){
        echo "Esta es tu primera visita a estas páginas";
      } else {
        echo "Has visitado las páginas ".$_SESSION['cant_visitas']." veces";
      }
    ?>
    </p>
    <br>
    <a href='Pagina2.php'>Dirigete a la página 2</a>
  </body>
</html>