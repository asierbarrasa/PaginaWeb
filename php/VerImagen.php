
 <?php
 header("C")
 $link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");
 $datos = mysqli_query($link, "select imagen` from Pregunta WHERE `index` = $_GET['id']);
 while($row = mysqli_fetch_array($datos)){
  echo $row;
 }
 $datos->close();
 mysqli_close($link);
  ?>
