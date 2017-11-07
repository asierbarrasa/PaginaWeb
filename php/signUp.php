<?php

$link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");

$datetime = date("YmdH:m:s");
$img="";
if(!empty($_FILES["imagen"])){
if (is_uploaded_file($_FILES["imagen"]["tmp_name"]))
{
  if ($_FILES["imagen"]["type"]=="image/jpeg" || $_FILES["imagen"]["type"]=="image/pjpeg" || $_FILES["imagen"]["type"]=="image/gif" || $_FILES["imagen"]["type"]=="image/bmp" || $_FILES["imagen"]["type"]=="image/png")
  {
    $img = "../assets/imagenesUsuarios/".$datetime;
    move_uploaded_file($_FILES["imagen"]["tmp_name"],$img);
  }
}
}
$sql = "INSERT INTO Users(email,pass,name,lastname,img) VALUES ('".$_POST["email"]
."', '".$_POST["pass1"]."', '".$_POST["nombre"]."', '".$_POST["apellido"]."','".$img."')";

  $xml = simplexml_load_file("usuarios.xml");
  $usuario=$xml->addChild('usuario');
  $usuario->addChild('email',$_POST["email"]);
  $usuario->addChild('nombre',$_POST["nombre"]);
  $usuario->addChild('apellido1','0');
  $usuario->addChild('apellido2','0');
  $usuario->addChild('telefono','0');
  formatXml($xml)->save('usuarios.xml');



if(!mysqli_query($link, $sql))
{
  die('1');
}
echo "0";

function formatXml($SimpleXMLElement)
{
  $xmlDocument = new DOMDocument('1.0');
  $xmlDocument->preserveWhiteSpace = false;
  $xmlDocument->formatOutput = true;
  $xmlDocument->loadXML($SimpleXMLElement->asXML());
  return $xmlDocument;
}


?>
