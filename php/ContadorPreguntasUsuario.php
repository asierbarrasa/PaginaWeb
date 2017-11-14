<?php
$link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");
$sql = "Select * from Pregunta where email='".$_GET["email"]."'";
$sql2 = "Select * from Pregunta";
if(!$res=mysqli_query($link, $sql))
{
  die('Error: '.mysqli_error($link));
}

if(!$res2 = mysqli_query($link,$sql2))
{
    die('Error: '.mysqli_error($link));
}
$row1 = mysqli_num_rows($res);
$row2 = mysqli_num_rows($res2);
echo $row1;
echo "/";
echo $row2;

mysqli_close($link);
 ?>
