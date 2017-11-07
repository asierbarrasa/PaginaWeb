<!DOCTYPE html>
<html>

<head>
  <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>Preguntas</title>
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
      <span><a href='layoutUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Inicio</a></span>
        <span><a href='preguntaUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Preguntas</a></span>
        <span><a href ='VerPreguntasConFoto.php'>Ver Preguntas</a></span>
        <span><a href='creditosUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Creditos</a></span>
        <span><a href ='ObtenerDatos.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Consultar usuarios</a></span>
	</nav>
    <section class="main" id="s1">
    <div>
      <label>Email</label>
      <input type="text" id="email" name="email" required placeholder="xx000@ikasle.ehu.es">
      <label>Nombre</label>
      <input type="text" id="nombre" name="nombre" readonly>
      <label>Apellidos</label>
      <input type="text" id="apellidos" name="apellidos" readonly>
      <label>Telefono</label>
      <input type="text" id="telefono" name="telefono" readonly>
      <br>
      <br>
      <input type="button" value="Autocompletar" id="btn">
    </div>
    </section>
  <footer class='main' id='f1'>
    <p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
    <a href='https://github.com'>Link GITHUB</a>
  </footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
  $("#btn").click(function(){
    console.log("Entro");
    $.get("usuarios.xml",function(d){
      console.log("Entro en xml");
      var listUsuarios = $(d).find('usuario');
      var emailSelec = $("#email").val();
      console.log(listUsuarios);

      for(var i = 0; i<listUsuarios.length; i++){
        console.log($(listUsuarios[i]).find("email").text());
        if($(listUsuarios[i]).find("email").text() == emailSelec){
            console.log($(listUsuarios[i]).find("email").text());
          $("#nombre").val($(listUsuarios[i]).find("nombre").text());
          $("#apellidos").val($(listUsuarios[i]).find("apellido1").text()+" "+$(listUsuarios[i]).find("apellido2").text());
          $("#telefono").val($(listUsuarios[i]).find("telefono").text());
          return;
        }
      }
      //$("#nombre").val("");
      //$("#apellidos").val("");
      //$("#telefono").val("");
      alert("No se ha encontrado ningun usuario con email: "+emailSelec);

    });
  });

</script>
</body>
</html>
