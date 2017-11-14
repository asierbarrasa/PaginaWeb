<?php
$email = $_POST["email"];
$link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");

$sql = "Select img FROM Users Where email = '".$email."'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

echo $row['img'];


 ?>
