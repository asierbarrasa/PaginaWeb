<?php
require_once('../lib/nusoap.php');


$soapClient= new nusoap_client("http://localhost/SW/php/ComprobarContasena.php?wsdl",true);

if(isset($_POST["pass1"])){

    $result=$soapClient->call('comprobarPass', array('x'=>$_POST["pass1"]));

    print_r($result);
}

?>
