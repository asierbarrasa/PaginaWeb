<?php
$link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");
if (is_uploaded_file($_FILES["imagen"]["tmp_name"]))
{
  if ($_FILES["imagen"]["type"]=="image/jpeg" || $_FILES["imagen"]["type"]=="image/pjpeg" || $_FILES["imagen"]["type"]=="image/gif" || $_FILES["imagen"]["type"]=="image/bmp" || $_FILES["imagen"]["type"]=="image/png")
  {

    $imagenEscapes=$link->real_escape_string(file_get_contents($_FILES["imagen"]["tmp_name"]));


  }

$sql = "INSERT INTO Pregunta(email, enunciado, respCorrecta, respInc1, respInc2"
.", respInc3, complejidad, tema, imagen) VALUES ('$_POST[email]', '$_POST[preg]'".
", '$_POST[respC]', '$_POST[respI1]', '$_POST[respI2]', '$_POST[respI3]'".
", '$_POST[comp]', '$_POST[tema]', '$imagenEscapes')";
if(!mysqli_query($link, $sql))
{
  die('Error: '.mysqli_error($link));
}

}
echo "1 record added";
echo "<p> <a href = 'Verdatos.php'> Ver registros </a>";
mysqli_close($link);

 ?>
