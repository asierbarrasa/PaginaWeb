<?php
$id = $_POST["id"];
$link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");

<<<<<<< HEAD
$sql = "DELETE from Pregunta Where id ='".$id."'";
=======
$sql = "DELETE * from Pregunta Where id ='id ";
>>>>>>> 705bedb21fc32f7a7d11d4801de710990eda7045


if (mysqli_query($link, $sql)) {

} else {
    echo mysqli_error($link);
}
mysqli_close($link);
?>
