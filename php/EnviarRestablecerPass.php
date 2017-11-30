<?php
$email = $_GET["email"];

$emailencrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5("email"), $email, MCRYPT_MODE_CBC, md5(md5("email")));
$msg = "Hola";

$headers = 'FROM: <no-reply@adiazdeotazu.com>'."\r\n";

echo $emailencrypt;
mail("defcom32@gmail.com","Recuperar contraseña","",$headers);

 ?>
