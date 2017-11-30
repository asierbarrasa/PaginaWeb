<?php
require_once('../lib/nusoap.php');


  $soapClient= new nusoap_client('http://adiazdeotazu.000webhostapp.com/web/php/ComprobarContrasenaSW.php?wsdl',true);
  $sentence = array('x' => "$_GET[pass]");
 
  $res = ($soapClient->call('comprobar', $sentence));
  echo($res['y']);
 
 ?>