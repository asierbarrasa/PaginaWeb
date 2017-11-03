<?php
$xml = simplexml_load_file("../assets/xml/preguntas.xml");

echo '<table border=1> <tr> <th> Email </th> <th> Enunciado </th> <th> Respuesta Correcta</th>'
.'<th> Respuesta Incorrecta 1</th><th> Respuesta Incorrecta 2</th><th> Respuesta Incorrecta 3</th>'
.'<th> Complejidad </th><th> Tema </th><th> Imagen </th></tr>';

foreach($xml->as $assessmentItem){
  echo 
  foreach ($assessmentItem->children() as $child) {

    if($child->getName()=="itemBody"){}
  }
}
  echo '<tr><td>'.$row['email'].'</td><td>'.$row['enunciado'].'</td><td>'.$row['respCorrecta'].'</td><td>'
  .$row['respInc1'].'</td><td>'.$row['respInc2'].'</td><td>'.$row['respInc3'].'</td><td>'
  .$row['complejidad'].'</td><td>'.$row['tema'].'</td><td><img src ="'.$row['imagen'].'" width="150px" heigth= "150px" ></td></tr>';



echo '<table>';
$datos->close();
mysqli_close($link);
 ?>
