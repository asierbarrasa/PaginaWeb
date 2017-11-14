<?php
$link = mysqli_connect("localhost", "id2921858_swg26","******","id2921858_quiz");
$sql = "Select * from Pregunta";
if(!$res=mysqli_query($link, $sql))
{
  die('Error: '.mysqli_error($link));
}
$numrow = mysqli_num_rows($res);
echo $numrow;

mysqli_close($link);
 ?>
