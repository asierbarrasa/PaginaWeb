<?php
$xml = simplexml_load_file("../assets/xml/usuariosActivos.xml");

$numUsuario =$xml->xpath("//numero");
echo $numUsuario[0];
?>
