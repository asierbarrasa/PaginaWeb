<?php
require_once('../lib/nusoap.php');


$soapClient= new nusoap_client("https://adiazdeotazu.000webhostapp.com/web/php/ComprobarContraseña.php?wsdl",true);


    $result=$soapClient->call('ComprobarPass', "1111");
print $result


?>
