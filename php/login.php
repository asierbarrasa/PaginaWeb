<?php
$email = $_POST["email"];
$pass = $_POST["pass"];
$link = mysqli_connect("localhost", "id2921858_swg26","*****","id2921858_quiz");

$sql = "Select * FROM Users Where email = '".$email."'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows ($result)==1){
  if ($row["email"] == $email && $row["pass"] == $pass){
      $xml = simplexml_load_file("../assets/xml/usuariosActivos.xml");
      $numUsuario =$xml->numero[0];
      $aux=$numUsuario+1;
      $xml->numero[0]=$aux;
      $xml->asXML("../assets/xml/usuariosActivos.xml");

      echo "0";
      exit;
  }
}
echo "1";
 ?>
