<?php

$xml = simplexml_load_file("../assets/xml/usuariosActivos.xml");
$numUsuario =$xml->numero[0];
$aux=$numUsuario-1;
$xml->numero[0]=$aux;
$xml->asXML("../assets/xml/usuariosActivos.xml");
header("Location: ../html/layout.html");

//Recupera la sesión activa y la destruye.
session_start();
session_destroy();

?>
