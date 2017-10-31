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
        <span class="right" ><a href="/logout">Logout</a></span>
        <span class="rigth"> <label id="user" value = '<?php echo $_GET["email"]?>'> <img id="imgUser" src= '<?php echo $_GET['img']?>'>
        >
      <h2>Quiz: el juego de las preguntas</h2>
    </header>
    <nav class='main' id='n1' role='navigation'>
    <span><a href='layout.php?email=<?php echo $_GET['email']?>&img="<?php echo $_GET['img']?>"'>Inicio</a></spam>
		<span><a href='pregunta.html?email=<?php echo $_GET['email']?>&img="<?php echo $_GET['img']?>"'>Preguntas</a></spam>
		<span><a href ='php/Verdatos.php?email=<?php echo $_GET['email']?>&img="<?php echo $_GET['img']?>"'>Ver Preguntas</a></spam>
		<span><a href='creditos.html?email=<?php echo $_GET['email']?>&img="<?php echo $_GET['img']?>"'>Creditos</a></spam>
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
