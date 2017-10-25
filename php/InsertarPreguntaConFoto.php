<?php
$link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");
if (is_uploaded_file($_FILES["imagen"]["tmp_name"]))
{
  if ($_FILES["imagen"]["type"]=="image/jpeg" || $_FILES["imagen"]["type"]=="image/pjpeg" || $_FILES["imagen"]["type"]=="image/gif" || $_FILES["imagen"]["type"]=="image/bmp" || $_FILES["imagen"]["type"]=="image/png")
  {
    $ruta = "../assets/imagenesPreguntas/".$_FILES["imagen"]["name"];
    move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
  }

$sql = "INSERT INTO Pregunta(email, enunciado, respCorrecta, respInc1, respInc2"
.", respInc3, complejidad, tema, imagen) VALUES ('$_POST[email]', '$_POST[preg]'".
", '$_POST[respC]', '$_POST[respI1]', '$_POST[respI2]', '$_POST[respI3]'".
", '$_POST[comp]', '$_POST[tema]', '$ruta')";
if(!mysqli_query($link, $sql))
{
  die('Error: '.mysqli_error($link));
}

}
echo "1 record added";
echo "<p> <a href = 'VerPreguntasConFoto.php'> Ver registros </a>";
mysqli_close($link);

 ?>
