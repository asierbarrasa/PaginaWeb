<?php
  require_once('../lib/nusoap.php');


  $soapClient= new nusoap_client("http://ehusw.es/jav/ServiciosWeb/comprobarmatricula.php?wsdl",true);
  if(isset($_POST["email"])){
    $result=$soapClient->call('comprobar', array('x'=>$_POST["email"]));
    echo  $result;
  }

 ?>
