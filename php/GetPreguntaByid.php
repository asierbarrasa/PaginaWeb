<?php

$link = mysqli_connect("localhost", "id2921858_swg26","***","id2921858_quiz");

$sql = "Select * from Pregunta Where id =$_GET[id]";
$datos = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($datos);
    echo "$row[enunciado],$row[respCorrecta],$row[respInc1],$row[respInc2],$row[respInc3],$row[complejidad],$row[tema],$row[email]";


?>
