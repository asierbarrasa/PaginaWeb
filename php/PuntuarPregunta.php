<?php
$id = $_POST["id"];
$link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");

$sql1 = "SELECT Like from Pregunta Where id ='".$id."'";

$sql2 = "SELECT Dislike from Pregunta Where id ='".$id."'";
$likes= $sql1 +1 ;
$dislikes= $dislikes +1;



$sql = "UPDATE Pregunta SET Like='$likes' , Dislikes='$dislikes' WHERE id='$id'";



if (mysqli_query($link, $sql)) {

} else {
    echo mysqli_error($link);
}
mysqli_close($link);
?>
