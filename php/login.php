<?php
$email = $_POST["email"];
$pass = $_POST["pass"];
$link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");
$sql = "Select * FROM Users Where email = '".$email"'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows ($result)==1){
  if ($row["email"] == $email && $row["pass"] == $pass){
  return True;
  }
}
return False;
 ?>
