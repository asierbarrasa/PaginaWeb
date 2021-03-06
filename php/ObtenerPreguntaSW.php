<?php
//incluimos la clase nusoap.php
require_once
('../lib/nusoap-0/lib/nusoap.php');
require_once
('../lib/nusoap-0/lib/class.wsdlcache.php');

//creamos el objeto de tipo soap_server
$ns ="https://adiazdeotazu.000webhostapp.com/web/php";
$server = new soap_server ;
$server -> configureWSDL ('ObtenerPregunta',$ns);
$server ->wsdl ->schemaTargetNamespace =$ns;
//registramos la función que vamos a implementar
$server ->register('ObtenerPregunta',
    array('x'=> 'xsd:int' ),
    array('z'=> 'xsd:string','y'=> 'xsd:string' ,'c'=> 'xsd:int'),
    $ns);
//implementamos la función
function ObtenerPregunta($x){

  $link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");
  $sql = "select * from Pregunta Where id = $x";
  $datos = mysqli_query($link, $sql);

  $row = mysqli_fetch_assoc($datos);
  
    return array('z'=> "$row[enunciado]", 'y'=> "$row[respCorrecta]", 'c'=> "$row[complejidad]" );


  return array('z' => "", 'y'=> "", 'c' => 0);
}

//llamamos al método service de la clase nusoap
if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
$server ->service($HTTP_RAW_POST_DATA);

?>
