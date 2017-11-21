<?php
require_once('../lib/nusoap.php');


  $soapClient= new nusoap_client("http://adiazdeotazu.000webhostapp.com/web/php/ObtenerPreguntaSW.php?wsdl",true);

  $res=$soapClient->call('ObtenerPregunta', array('x' => $_GET["id"]));
 echo '<table border=1> <tr> <th> Enunciado </th><th> Respuesta Correcta</th>'
.'<th> Complejidad </th></tr>';
echo "<tr><th>$res[z]</th><th>$res[y]</th><th>$res[c]</th></tr>";
 ?>
