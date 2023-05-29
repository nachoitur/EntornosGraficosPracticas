<?php

$destino= $_POST['email'];
$asunto="Visita este sitio!";

$nombre= "Nombre de la Página";
$desde= "maildelapagina@mail.com";
$mensaje= "Tu amigo ".$_POST['nombre']." nos ha brindado el gusto de compartir
este sitio contigo, visitanos en https://www.paginaavisitar.com/home \n
Saludos!";

$header = "From: $nombre <$desde>\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=utf-8\r\n";

if (mail($destino,$asunto,$mensaje,$header)){
  echo "Gracias por recomendarnos!";
} else {
  echo "Hubo un error, intentar de nuevo";
};
?>