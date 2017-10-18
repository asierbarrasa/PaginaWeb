<?php
$link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");
$sql = "INSERT INTO Pregunta(email, enunciado, respCorrecta, respInc1, respInc2"
.", respInc3, complejidad, tema) VALUES ('$_POST[email]', '$_POST[preg]'".
", '$_POST[respC]', '$_POST[respI1]', '$_POST[respI2]', '$_POST[respI3]'".
", '$_POST[comp]', '$_POST[tema]')";
if(!mysqli_query($link, $sql))
{
  die('Error: '.mysqli_error($link));
}
echo "1 record added";
echo "<p> <a href = 'Verdatos.php'> Ver registros </a>";
mysqli_close($link);
 ?>
