<?php

if(!empty($_POST["email"])||!empty($_POST["comp"])||!empty($_POST["preg"])||!empty($_POST["respC"])
  ||!empty($_POST["respI1"])||!empty($_POST["respI2"])||!empty($_POST["respI3"])||!empty($_POST["tema"])){

  if(!preg_match("/^[a-z]{2,}[0-9]{3}\@ikasle\.ehu\.(es|eus)$/",$_POST["email"])){
    echo "Email no valido";
    exit;
  }

  if(!preg_match("/^[1-5]{1}$/",$_POST["comp"])){
    echo "Complejidad fuera de rango";
    exit;
  }


}else{
  echo "Algun campo obligatorio vacio";
  exit;
}






$link = mysqli_connect("localhost", "id2921858_swg26","****","id2921858_quiz");
if (is_uploaded_file($_FILES["imagen"]["tmp_name"]))
{
  if ($_FILES["imagen"]["type"]=="image/jpeg" || $_FILES["imagen"]["type"]=="image/pjpeg" || $_FILES["imagen"]["type"]=="image/gif" || $_FILES["imagen"]["type"]=="image/bmp" || $_FILES["imagen"]["type"]=="image/png")
  {
    $ruta = "../assets/imagenesPreguntas/".$_FILES["imagen"]["name"];
    move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
  }



}
$sql = "INSERT INTO Pregunta(email, enunciado, respCorrecta, respInc1, respInc2"
.", respInc3, complejidad, tema, imagen) VALUES ('$_POST[email]', '$_POST[preg]'".
", '$_POST[respC]', '$_POST[respI1]', '$_POST[respI2]', '$_POST[respI3]'".
", '$_POST[comp]', '$_POST[tema]', '$ruta')";
if(!mysqli_query($link, $sql))
{
  die('Error: '.mysqli_error($link));
}

$xml = simplexml_load_file("../assets/xml/preguntas.xml");

$assessmentItem = $xml->addChild('assessmentItem');
$assessmentItem->addAttribute('complexity', $_POST['comp']);
$assessmentItem->addAttribute('subject', $_POST['tema']);
$assessmentItem->addAttribute('author', $_POST['email']);
$itemBody = $assessmentItem->addChild('itemBody');
$itemBody->addChild('p',$_POST['preg']);
$correctResponse = $assessmentItem->addChild('correctResponse');
$correctResponse->addChild('value', $_POST['respC']);
$incorrectResponse = $itemBody->addChild('incorrectResponse');
$incorrectResponse->addChild('value', $_POST['respI1']);
$incorrectResponse->addChild('value', $_POST['respI2']);
$incorrectResponse->addChild('value', $_POST['respI3']);

formatXml($xml);
echo "1 record added";
echo "<p> <a href = 'VerPreguntasConFoto.php'> Ver registros </a>";
echo "<p><a href= 'VerPreguntasXml.php'> Ver Preguntas Xml </a>";
mysqli_close($link);

function formatXml($SimpleXMLElement)
{
  $xmlDocument = new DOMDocument('1.0');
  $xmlDocument->preserveWhiteSpace = false;
  $xmlDocument->formatOutput = true;
  $xmlDocument->loadXML($SimpleXMLElement->asXML());
  return $xmlDocument->saveXML();
}

 ?>
