<?php
  require_once('../lib/nusoap.php');



  $ns = "https://adiazdeotazu.000webhostapp.com/web/php";
  $server = new soap_server;
  $server->configureWSDL('comprobar',$ns);
  $server->schemaTargetNamespace=$ns;

  $server->register('comprobar',
                    array('x'=>xsd:string),
                    array('z'=>xsd:string),$ns);


  function comprobar($x){
    $path = "../assets/txt/toppasswords.txt";
    $esta=  false;
    $file= fopen($path,"r");
    while(($line= fgets($file)) != false){
      if($line==$x){
        $esta=true;
        break;
      }
    }
    return $esta;
  }

 ?>
