<?php
$email = $_POST["email"];
$link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");

$sql = "Select img FROM Users Where email = '".$email."'";
$result = mysqli_query($link, $sql);

echo $result;

 ?>
