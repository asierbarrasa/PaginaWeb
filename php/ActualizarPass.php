<?php
$email = $_POST["email"];
$pass = $_POST["pass"];
$passHash=crypt($pass,"Ap");
$link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");
$sql = "UPDATE Users set pass = '".$passHash."' where email = '".$email."'";
if(!mysqli_query($link, $sql)){
  die(mysqli_error($link));
}
 ?>
