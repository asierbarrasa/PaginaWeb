<?php
$xml = simplexml_load_file("../assets/xml/usuariosActivos.xml");

$numUsuario =$xml->usuarios[0]->numero;
echo $numUsuario;
?>