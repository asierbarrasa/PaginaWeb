<?php
  require_once('../lib/nusoap.php');



  $ns = "https://adiazdeotazu.000webhostapp.com/web/php";
  $server = new soap_server;
  $server->configureWSDL('comprobarPass',$ns);
  $server->schemaTargetNamespace=$ns;

$server ->register('comprobarPass ',
    array('x'=>'xsd:int'),
    array('z'=>'xsd:string'),
    $ns);


  function comprobarPass($x){
    console.log("aaaa");
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

 ?>
