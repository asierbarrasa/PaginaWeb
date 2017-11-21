<?php
  require_once('../lib/nusoap.php');



  $ns = "http://localhost/SW/php/";
  $server = new soap_server;
  $server->configureWSDL('comprobarPass',$ns);
  $server->schemaTargetNamespace=$ns;

$server ->register('comprobarPass ',
    array('x'=>'xsd:string'),
    array('z'=>'xsd:string'),
    $ns);


  function comprobarPass($x){
    echo "aaaa";
    $path = "../assets/txt/toppasswords.txt";
    //$esta=  false;
    $file= fopen($path,"r");
    while(($line= fgets($file)) != false){
      if($line==$x){
        //$esta=true;
        return "VALIDA"  ;
        break;
      }
    }
    return "INVALIDA";
  }

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);

 ?>
