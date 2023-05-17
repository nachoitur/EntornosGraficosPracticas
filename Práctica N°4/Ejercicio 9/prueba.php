<?php
include 'funcion.php';
echo "Validación del nombre de usuario: na:\n";
comprobar_nombre_usuario("na");
echo "Validación del nombre de usuario: hola|c°m°|estas:\n";
comprobar_nombre_usuario("hola|c°m°|estas");
echo "Validación del nombre de usuario: pepitoalcach0fa:\n";
comprobar_nombre_usuario("pepitoalcach0fa");
?>