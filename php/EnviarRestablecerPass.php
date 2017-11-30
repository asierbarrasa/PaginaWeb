<?php
$email = $_GET["email"];
$emailencrypt = encrypt($email,"EmailQueTieneQueRecuperar");
$msg = wordwrap("<html><body><p>Pincha en el siguiente enlace para restablecer la contraseña: <a href='adiazdeotazu.000webhostapp.com/web/php/RestablecerPass.php?cod=$emailencrypt'>Restablecer</a></p></body></html>";
$headers ="MIME-Version: 1.0"."\r\n";
$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
$headers .= 'FROM: <no-reply@adiazdeotazu.com>'."\r\n";

mail($email,"Recuperar contraseña",$msg,$headers);

 ?>
