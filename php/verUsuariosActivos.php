<?php
$xml = simplexml_load_file("../assets/xml/usuariosActivos.xml");

$numUsuario =$xml->numero[0];
echo $numUsuario;
$xml->asXML("../assets/xml/usuariosActivos.xml")

?>
