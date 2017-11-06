<?php
$xslDoc = new DOMDocument();
$xslDoc->load("../assets/xml/VerPreguntas.xsl");
$xmlDoc = new DOMDocument();
$xmlDoc->load("../assets/xml/preguntas.xml");
$proc = new XSLTProcessor();
$proc->importStylesheet($xslDoc);
echo $proc->transformToXML($xmlDoc);
?>