<?php
$emailcryp = $_GET["cod"];
$email = decrypt($emailcryp,"EmailQueTieneQueRecuperar");
$link = mysqli_connect("localhost", "id2921858_swg26","SWG26","id2921858_quiz");

$sql = "Select 'email' FROM Users Where email = $email";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows ($result)!=1){
  header('Location: adiazdeotazu.000webhostapp.com/web/html/layout.html');
}
 ?>

 <!DOCTYPE html>
 <html>

 <head>
   <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
   <title>Login</title>
   <link rel='stylesheet' type='text/css' href='../estilos/style.css' />
   <link rel='stylesheet' type='text/css' media='only screen and (min-width: 530px) and (min-device-width: 481px)' href='../estilos/wide.css' />
   <link rel='stylesheet' type='text/css' media='only screen and (max-width: 480px)' href='../estilos/smartphone.css' />
   <script type="text/javascript"></script>
 </head>

 <body>


   <div id='page-wrap'>
     <header class='main' id='h1'>
       <span class="right"><a href="registro.html">Registrarse</a></span>
       <span class="right"><a href="login.html">Login</a></span>
       <span class="right" style="display:none;"><a href="/logout">Logout</a></span>
       <h2>Quiz: el juego de las preguntas</h2>
     </header>
     <nav class='main' id='n1' role='navigation'>
       <span><a href='layout.html'>Inicio</a></span>
       <span><a href='creditos.html'>Creditos</a></span>
     </nav>


     <section class="main" id="s1">

       <div id="msg">
         <form id="frecuperar" name="flogin" action="" method="post" enctype="multipart/form-data">
           <label>Contraseña nueva * :</label><input type="password" name="pass1" id="pass1" required><br>
           <label>Repite la contraseña * :</label> <input type="password" name="pass2" id="pass2" required><br>
           <br>
           <br>
           <input type="submit" id="boton" value="Cambiar">
         </form>
       </div>
     </section>
     <footer class='main' id='f1'>
       <p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
       <a href='https://github.com'>Link GITHUB</a>
     </footer>
   </div>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script>
   $("#frecuperar").submit(function(event){
     event.preventDefault;
     if ($("#pass1").val()==$("#pass2").val()){
       var data = new FormData();
       data.append("pass",$("#pass1").val());
       $.ajax({
         url:"ActualizarPass.php",
         type:'POST',
         data:data,
         processData: false,
         cache: false,
         contentType: false,
         success: function(e){
           $("#msg").html("Contraseña restablecida con exito");
         }

       });
     }
   });

   </script>
 </body>



 </html>
