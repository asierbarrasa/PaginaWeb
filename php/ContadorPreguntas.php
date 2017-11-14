<?php
$link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");
$sql = "Select * from Preguntas";
if(!$res=mysqli_query($link, $sql))
{
  die('Error: '.mysqli_error($link));
}
echo mysqli_num_row($res);

mysqli_close($link);
 ?>
