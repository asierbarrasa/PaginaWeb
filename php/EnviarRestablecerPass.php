<?php
$email = $_GET["email"];

$emailencrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5("email"), $email, MCRYPT_MODE_CBC, md5(md5("email")));
$msg = "Para recuperar la contraseña pulsa en este link adiazdeotazu.000webhostapp.com/web/php/RestablecerPass.php?email=".$email;

$headers = 'FROM: <no-reply@adiazdeotazu.com>'."\r\n";

mail("defcom32@gmail.com","Recuperar contraseña",$msg,$headers);

 ?>
