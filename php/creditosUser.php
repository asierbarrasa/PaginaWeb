<!DOCTYPE html>
<html>

<head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
    <title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='../estilos/style.css' />
    <link rel='stylesheet' type='text/css' media='only screen and (min-width: 530px) and (min-device-width: 481px)' href='../estilos/wide.css' />
    <link rel='stylesheet' type='text/css' media='only screen and (max-width: 480px)' href='../estilos/smartphone.css' />
</head>

<body>
<div id='page-wrap'>
    <header class='main' id='h1'>
        <?php echo $_GET["email"]?> <img id="imgUser" src= '<?php echo $_GET['img']?>' width = '50px' height='50px'><br>
        <span class="right"><a href="logOut.php">Logout</a></span>
        <h2>Quiz: el juego de las preguntas</h2>
    </header>
    <nav class='main' id='n1' role='navigation'>
      <span><a href='layoutUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Inicio</a></span>
      <span><a href='GestionPreguntas.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Gestionar Preguntas</a></span>
        <span><a href ='ObtenerDatos.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Consultar usuarios</a></span>
        <span><a href='ObtenerPreguntaUI.php?<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Obtener Preguntas UI</a></span>

      <span><a href='creditosUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Creditos</a></span>

    </nav>
    <section class="main" id="s1">

        <div>
            <p>
            <h2>Aplicacion desarrollada por Asier Barrasa y Aitor Diaz de Otazu</h2>
            <h2>Especialidad de Ingeniería de Software</h2>
            <img src="../asier.jpg" id=imm3 width="140px" height="140px">
            <img src="../Aitor.jpeg" id=imm2 width="140px" height="140px">
            <br>
            <a href="layout.html">Inicio</a>
            </p>
        </div>
    </section>
    <footer class='main' id='f1'>
        <p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
        <a href='https://github.com'>Link GITHUB</a>
    </footer>
</div>
</body>
</html>
