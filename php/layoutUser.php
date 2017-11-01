<!DOCTYPE html>
<html>

<head>
  <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>Layout</title>
  <link rel='stylesheet' type='text/css' href='../estilos/style.css' />
  <link rel='stylesheet' type='text/css' media='only screen and (min-width: 530px) and (min-device-width: 481px)' href='../estilos/wide.css' />
  <link rel='stylesheet' type='text/css' media='only screen and (max-width: 480px)' href='../estilos/smartphone.css' />
  <script type="text/javascript"></script>
</head>

<body>
  <div id='page-wrap'>
    <header class='main' id='h1'>
      <?php echo $_GET["email"]?> <img id="imgUser" src= '<?php echo $_GET['img']?>'><br>
        <span class="right" ><a href="../html/layout.html">Logout</a></span>

      <h2>Quiz: el juego de las preguntas</h2>
    </header>
    <nav class='main' id='n1' role='navigation'>
    <span><a href='layoutUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Inicio</a></span>
		<span><a href='preguntaUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Preguntas</a></span>
		<span><a href ='Verdatos.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Ver Preguntas</a></span>
		<span><a href='creditosUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Creditos</a></span>
	</nav>
    <section class="main" id="s1">

	<div>

	</div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
		<a href='https://github.com'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
