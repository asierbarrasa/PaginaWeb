<?php
$respuesta = $_POST["respuesta"];
$link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");

$sql = "Select respCorrecta FROM Pregunta ";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows ($result)==1){
    if ($row["respCorrecta"] == $respuesta){
        echo "correcto";
    }else{
        echo "incorrceto";
    }
}


?>