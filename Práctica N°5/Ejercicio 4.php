<?php
session_start();
if (isset($_SESSION['cant_visitas'])){
  $_SESSION['cant_visitas']++;
} else {
  $_SESSION['cant_visitas'] = 1;
}
if($_SESSION['cant_visitas']== 1){
  echo "Esta es tu primera visita a la página";
} else {
  echo "Has visitado esta página ".$_SESSION['cant_visitas']." veces";
}
?>