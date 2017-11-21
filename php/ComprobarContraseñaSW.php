<?php
//incluimos la clase nusoap.php
require_once
('../lib/nusoap-0/lib/nusoap.php');
require_once
('../lib/nusoap-0/lib/class.wsdlcache.php');

//creamos el objeto de tipo soap_server
$ns ="https://adiazdeotazu.000webhostapp.com/web/php";
$server = new soap_server ;
$server -> configureWSDL ('comprobar',$ns);
$server ->wsdl ->schemaTargetNamespace =$ns;
//registramos la función que vamos a implementar
$server ->register('comprobar',
    array('x'=> 'xsd:string' ),
    array('z'=> 'xsd:string', 'y' => 'xsd:string' ),
    $ns);
//implementamos la función
function comprobar($x){
$pagina = file_get_contents('../assets/txt/toppasswords.txt');
$pos = strpos($pagina, $x);
if ($pos === false){
    return array('z'=> "", 'y' => 'VALIDA');
}
else{
    return array('z'=> "", 'y' => 'INVALIDA');
}
}
//llamamos al método service de la clase nusoap
if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
$server ->service($HTTP_RAW_POST_DATA);

?>
