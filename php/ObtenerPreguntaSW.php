<?php
//incluimos la clase nusoap.php
require_once
('../lib/nusoap.php');
require_once
('../lib/class.wsdlcache.php');
//creamos el objeto de tipo soap_server
$ns ="http://localhost/nusoap-0.9.5/samples";
$server = new soap_server ;
$server -> configureWSDL ('ObtenerPregunta',$ns);
$server ->wsdl ->schemaTargetNamespace =$ns;
//registramos la función que vamos a implementar
$server ->register('ObtenerPregunta ',
    array('x'=>'xsd:int'),
    array('z'=>'xsd:string','y'=>'xsd:string','c'=>'xsd:int'),
    $ns);
//implementamos la función
function ObtenerPregunta($x){

}

//llamamos al método service de la clase nusoap
$HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server ->service($HTTP_RAW_POST_DATA);
?>