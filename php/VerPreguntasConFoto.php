<?php
$link = mysqli_connect("localhost", "id2921858_swg26","*****","id2921858_quiz");
$datos = mysqli_query($link, "select * from Pregunta");
echo '<style> th {
    background-color: #4CAF50;
    color: white;
}tr:nth-child(even) {background-color: #f2f2f2}</style><table border=1><tr><th> Enunciado </th> <th> Respuesta Correcta</th>'
.'<th> Respuestas Incorrecta<s/th>'
.'<th> Complejidad </th><th> Tema </th><th> Imagen </th></tr>';

while($row = mysqli_fetch_array($datos)){
  echo '<tr><td>'.$row['enunciado'].'</td><td>'.$row['respCorrecta'].'</td><td><ul><li>'
  .$row['respInc1'].'</li><li>'.$row['respInc2'].'</li><li>'.$row['respInc3'].'</li></ul></td><td>'
  .$row['complejidad'].'</td><td>'.$row['tema'].'</td><td><img src ="'.$row['imagen'].'" width="50px" heigth= "50px" ></td></tr>';


}
echo '<table>';
$datos->close();
mysqli_close($link);
 ?>
