<?php
//incluimos la clase nusoap.php
require_once
('../lib/nusoap.php');


//creamos el objeto de tipo soap_server
$ns ="https://adiazdeotazu.000webhostapp.com/web/php";
$server = new soap_server ;
$server -> configureWSDL ('ComprobarPass',$ns);
$server ->wsdl ->schemaTargetNamespace =$ns;
//registramos la función que vamos a implementar
$server ->register('ComprobarPass',
    array('x'=> 'xsd:string'),
    array('z'=> 'xsd:string'),
    $ns);
//implementamos la función
function ComprobarPass($x){
    return array('z'=>'HOla');

  $path = "../assets/txt/toppasswords.txt";
    //$esta=  false;
    $file= fopen($path,"r");
    while(($line= fgets($file)) != false){
      if($line==$x){
        //$esta=true;
        return "VALIDA"  ;

      }
    }
    return "INVALIDA";
  }

//llamamos al método service de la clase nusoap
if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
$server ->service($HTTP_RAW_POST_DATA);

?>
