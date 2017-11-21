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
        <?php echo $_GET["email"]?> <img id="imgUser" src= '<?php echo $_GET['img']?>' width = '50px' heigth= '50px'><br>
      <span class="right"><a href="logOut.php">Logout</a></span>
      <h2>Quiz: el juego de las preguntas</h2>
    </header>
    <nav class='main' id='n1' role='navigation'>
      <span><a href='layoutUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Inicio</a></span>
      <span><a href='GestionPreguntas.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Gestionar Preguntas</a></span>
        <span><a href ='ObtenerDatos.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Consultar usuarios</a></span>
      <span><a href='creditosUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Creditos</a></span>
      </nav>
    <section class="main" id="s1">
    <div>
      <input type="text" id="ID" name="id" required placeholder="Introduce el id ( > 50)">
      <div id="resp" style="width: 100%;">
      </div>
      <br>
      <br>
      <input type="button" value="Buscar Pregunta" id="btn">
    </div>
    </section>
  <footer class='main' id='f1'>
    <p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
    <a href='https://github.com'>Link GITHUB</a>
  </footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
  $("#btn").click(function(){

    $.ajax({
      url:"http://adiazdeotazu.000webhostapp.com/web/php/ObtenerPregunta.php?id="+$("#ID").val(),
      beforeSend: function(){$("#resp").html("<img src = '../assets/Imagenes/carga.gif' width='50px' height='50px'/>")},
      type:'GET',
      cache: false,
      success: function(e){
        $("#resp").html(e);

    }

  });
});

</script>
</body>
</html>
