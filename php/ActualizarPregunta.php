<?php
$id = $_POST["id"];
$enunciado= $_POST["enunciado"];
$respCorrecta= $_POST["respCorrecta"];
$respInc1= $_POST["respInc1"];
$respInc2= $_POST["respInc2"];
$respInc3= $_POST["respInc3"];
$comlejidad= $_POST["complejidad"];
$tema= $_POST["tema"];

$link = mysqli_connect("localhost", "id2921858_swg26","*******","id2921858_quiz");

$sql = "UPDATE Pregunta SET enunciado='$enunciado' , respCorrecta='$respCorrecta' ,respInc1='$respInc1',"
    ." respInc2='$respInc2', respInc3='$respInc3', compejidad='$comlejidad',tema='$tema' WHERE id='$id'";


if (mysqli_query($link, $sql)) {
    console.log("Record updated successfully");
} else {
    console.log("Error updating record: " . mysqli_error($link));
}
mysqli_close($link);



?>