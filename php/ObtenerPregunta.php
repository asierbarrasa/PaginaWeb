<?php
  require_once('../lib/nusoap.php');


  $soapClient= new nusoap_client("http://localhost/PaginaWeb/php/ObtenerPreguntaSW.php?wsdl",true);
    echo $soapClient->call('ObtenerPregunta', array('x'=>intval($_GET["id"])));
    //echo  $result;


 ?>
