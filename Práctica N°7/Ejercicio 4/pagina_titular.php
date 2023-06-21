<?php
if(isset($_POST["titular"])){
  $titular = $_POST["titular"];
  setcookie("titular",$titular,time()+(86400 * 90));
}else{
  if (isset($_COOKIE["titular"])){
    $titular = $_COOKIE["titular"];
  }
  else {
    $titular = null;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 4</title>
  <style>
    body{
      background-color: gainsboro;
      font: sans-serif;
    }
  </style>
</head>
<body>
  <h1>NOTICIAS!!<h1>
  <hr>
  <?php
    if($titular != null){
      switch($titular){
        case "politica":
          ?>
          <h1>Procesaron a la madre del sindicalista Marcelo Balcedo por evasión previsional y tributaria</h1>
          <img src="https://www.clarin.com/img/2023/06/16/7_eNp53Hx_1256x620__1.jpg" alt="madre arrestada" width="450" height="250">
          <p>
            La justicia federal de La Plata dictó el procesamiento sin prisión preventiva de Myriam "Nené" Chávez de Balcedo, madre del ex sindicalista Marcelo Balcedo, dueña de la empresa Edigráfica S.A y directora del Diario Hoy, por "evasión tributaria simple" y "evasión previsional simple", y se ordenó trabar embargo sobre los bienes por 12 millones de pesos.
          </p>
          <?php
          break;
        case "economica":
          ?>
          <h1>Las petroleras aumentarán $ 12 todos los combustibles desde esta medianoche</h1>
          <img src="https://www.clarin.com/img/2022/03/14/tFsEk6Sf7_1256x620__1.jpg" alt="playero cargando nafta" width="450" height="250">
          <p>
            Las petroleras aumentarán el precio de los combustibles desde esta medianoche. El incremento será de entre $ 11 y $ 13 en todas las categorías (nafta súper, premium, gasoil y gasoil premium). La suba de YPF será de $ 11,  pero el resto de las banderas apunta más hacia $ 12 y $ 13.  El promedio del aumento es diferente según el combustible en cuestión pero va del 4,5% al 5,5% aproximadamente.
          </p>
          <?php
          break;
        case "deportiva":
          ?>
          <h1>Murió Alfredo Tanque Rojas, goleador implacable y vieja gloria de Boca</h1>
          <img src="https://www.clarin.com/img/2023/06/16/9izrx_CzW_720x0__1.jpg" alt="tanque rojas con la pelota" width="200" height="250">
          <p>
            Alfredo Tanque Rojas, una de las grandes glorias de la historia de Boca, murió este viernes a los 86 años. Fue encontrado sin vida en la cochera de un edificio en Suipacha al 1300, en el barrio porteño de Retiro. 
            Según informaron fuentes de seguridad, personal de la Comisaría Vecinal 1 A de la Policía de la Ciudad de Buenos Aires concurrió a la cochera tras el llamado del encargado del lugar y convocó al SAME, que al llegar confirmó el fallecimiento del exfutbolista, que se había desvanecido y ya no tenía pulso.
          </p>
          <?php
          break;
      }
    } else {
      ?>
        <h1>Procesaron a la madre del sindicalista Marcelo Balcedo por evasión previsional y tributaria</h1>
        <img src="https://www.clarin.com/img/2023/06/16/7_eNp53Hx_1256x620__1.jpg" alt="madre arrestada" width="450" height="250">
        <p>
          La justicia federal de La Plata dictó el procesamiento sin prisión preventiva de Myriam "Nené" Chávez de Balcedo, madre del ex sindicalista Marcelo Balcedo, dueña de la empresa Edigráfica S.A y directora del Diario Hoy, por "evasión tributaria simple" y "evasión previsional simple", y se ordenó trabar embargo sobre los bienes por 12 millones de pesos.
        </p>
        <br>
        <h1>Las petroleras aumentarán $ 12 todos los combustibles desde esta medianoche</h1>
        <img src="https://www.clarin.com/img/2022/03/14/tFsEk6Sf7_1256x620__1.jpg" alt="playero cargando nafta" width="450" height="250">
        <p>
          Las petroleras aumentarán el precio de los combustibles desde esta medianoche. El incremento será de entre $ 11 y $ 13 en todas las categorías (nafta súper, premium, gasoil y gasoil premium). La suba de YPF será de $ 11,  pero el resto de las banderas apunta más hacia $ 12 y $ 13.  El promedio del aumento es diferente según el combustible en cuestión pero va del 4,5% al 5,5% aproximadamente.
        </p>
        <br>
        <h1>Murió Alfredo Tanque Rojas, goleador implacable y vieja gloria de Boca</h1>
        <img src="https://www.clarin.com/img/2023/06/16/9izrx_CzW_720x0__1.jpg" alt="tanque rojas con la pelota" width="200" height="250">
        <p>
         Alfredo Tanque Rojas, una de las grandes glorias de la historia de Boca, murió este viernes a los 86 años. Fue encontrado sin vida en la cochera de un edificio en Suipacha al 1300, en el barrio porteño de Retiro. 
          Según informaron fuentes de seguridad, personal de la Comisaría Vecinal 1 A de la Policía de la Ciudad de Buenos Aires concurrió a la cochera tras el llamado del encargado del lugar y convocó al SAME, que al llegar confirmó el fallecimiento del exfutbolista, que se había desvanecido y ya no tenía pulso.
        </p>
      <?php
    }
  ?>
  <hr>
  <form action="pagina_titular.php" method="post"> Selecciona el tipo de titular que desees visualizar:
    <br>
    <p>
      <label><input type="radio" name="titular" value="politica"> Noticia pol&iacute;tica <br></label>
      <label><input type="radio" name="titular" value="economica"> Noticia econ&oacute;mica <br></label>
      <label><input type="radio" name="titular" value="deportiva"> Noticia deportiva <br></label>
    </p>
    <input type="submit" value="Enviar">
  </form>
  <hr>
  <p>¿Deseas borrar tu selecci&oacute;n?</p>
  <a href="borrar_cookie.php">Haz click aqu&iacute;</a>
</body>
</html>