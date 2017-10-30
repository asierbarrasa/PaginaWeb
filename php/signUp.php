<?php

$link = mysqli_connect("localhost", "root","","Quiz");

$datetime = date("YmdH:m:s");

if (is_uploaded_file($_FILES["imagen"]["tmp_name"]))
{
  if ($_FILES["imagen"]["type"]=="image/jpeg" || $_FILES["imagen"]["type"]=="image/pjpeg" || $_FILES["imagen"]["type"]=="image/gif" || $_FILES["imagen"]["type"]=="image/bmp" || $_FILES["imagen"]["type"]=="image/png")
  {
    $img = "../assets/imagenesUsuarios".$datetime;
    move_uploaded_file($_FILES["imagen"]["tmp_name"],$img);
  }

$sql = "INSERT INTO Users(email,pass,name,lastname,img) VALUES ('".$_POST["email"]
."', '".$_POST["pass1"]."', '".$_POST["nombre"]."', '".$_POST["apellido"]."','".$img."')";

if(!mysqli_query($link, $sql))
{
  die('1');
}
echo "0";
}

?>
