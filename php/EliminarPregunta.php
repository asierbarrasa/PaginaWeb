<?php
$id = $_POST["id"];
$link = mysqli_connect("localhost", "id2921858_swg26","******","id2921858_quiz");

$sql = "DELETE * from Pregunta Where id ='id";


if (mysqli_query($link, $sql)) {

} else {
    echo mysqli_error($link);
}
mysqli_close($link);
?>