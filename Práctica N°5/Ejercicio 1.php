<?php

$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="ignacioiturburu07@gmail.com";
$asunto="Ejercicio 1";

$nombre = "Usuario";
$desde= "usuario@mail.com";
$comentario= "
\n
Hola, como estas?\n
Este es una prueba de envío de emails\n
Enviado: $fecha a las $hora\n
\n
";

$header = "From: $nombre <$desde>\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=utf-8\r\n";

$contenido = "<html>
<head>
  <title>Ejercicio 1</title>
</head>
<body>
  <h1>Prueba de ejercicio 1</h1>
  <p><strong>Nombre:</strong> $nombre</p>
  <p><strong>Correo:</strong> $desde</p>
  <p><strong>Mensaje:</strong> $comentario</p>
</body>
</html>";

if (mail($destino,$asunto,$contenido,$header)){
  echo "Correo enviado correctamente.";
} else {
  echo "Error al enviar el correo.";
};
?>