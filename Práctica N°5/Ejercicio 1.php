<?php

$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="ignacioiturburu07@gmail.com";
$asunto="Ejercicio 1";

$nombre = $_POST['nombre'];
$desde= $_POST['email'];

$header = "From: $nombre <$desde>\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=utf-8\r\n";

$comentario= "
\n
$_POST[texto]\n
Enviado: $fecha a las $hora\n
\n
";

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

if (mail($destino,$asunto,$comentario,$header)){
  echo "Correo enviado correctamente.";
} else {
  echo "Error al enviar el correo.";
};
?>