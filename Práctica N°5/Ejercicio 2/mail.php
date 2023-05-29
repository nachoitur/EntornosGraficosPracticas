<?php

$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="ignacioiturburu07@gmail.com";
$asunto="Comentario de ejercicio 2";

$nombre = $_POST['nombre'];
$desde= $_POST['email'];
$mensaje= $_POST['mensaje']."\n
Enviado: $fecha a las $hora\n
\n";

$header = "From: $nombre <$desde>\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=utf-8\r\n";

if (mail($destino,$asunto,$mensaje,$header)){
  echo "Correo enviado correctamente.";
} else {
  echo "Error al enviar el correo.";
};
?>