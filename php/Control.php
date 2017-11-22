<?php
    session_start();
    if(!isset($_SESSION["email"])){
      header("location: https://adiazdeotazu.000webhostapp.com/web/html/login.html");
    }
 ?>
