<?php
$xml = simplexml_load_file("../assets/xml/preguntas.xml");

echo '<table border=1> <tr> <th> Email </th> <th> Enunciado </th> <th> Respuesta Correcta</th>'
.'<th> Respuesta Incorrecta 1</th><th> Respuesta Incorrecta 2</th><th> Respuesta Incorrecta 3</th>'
.'<th> Complejidad </th><th> Tema </th></tr>';

foreach($xml->xpath('//assessmentItem') as $assessmentItem){

  echo '<tr><td>'.$assessmentItem->attributes()->author.'</td><td>'.$assessmentItem->itemBody->p.'</td><td>'.$assessmentItem->correctResponse->value.'</td><td>'
  .$assessmentItem->incorrectResponses->value[0].'</td><td>'.$assessmentItem->incorrectResponses->value[1].'</td><td>'.$assessmentItem->incorrectResponses->value[2].'</td><td>'
  .$assessmentItem->attributes()->complexity.'</td><td>'.$assessmentItem->attributes()->subject.'</td></tr>';
}


echo '<table>';


?>
