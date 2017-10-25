<?php
$link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");
$datos = mysqli_query($link, "select * from Pregunta");
echo '<table border=1> <tr> <th> Email </th> <th> Enunciado </th> <th> Respuesta Correcta</th>'
.'<th> Respuesta Incorrecta 1</th><th> Respuesta Incorrecta 2</th><th> Respuesta Incorrecta 3</th>'
.'<th> Complejidad </th><th> Tema </th><th> Imagen </th></tr>';

while($row = mysqli_fetch_array($datos)){
  echo '<tr><td>'.$row['email'].'</td><td>'.$row['enunciado'].'</td><td>'.$row['respCorrecta'].'</td><td>'
  .$row['respInc1'].'</td><td>'.$row['respInc2'].'</td><td>'.$row['respInc3'].'</td><td>'
  .$row['complejidad'].'</td><td>'.$row['tema'].'</td><td>';
  echo "<img src='VerImagen.php?id=".$row["index"]."' width= '150' heigth='150' >";
  echo "</td></tr>";

}
echo '<table>';
$datos->close();
mysqli_close($link);
 ?>
