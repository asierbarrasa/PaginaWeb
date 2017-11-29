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
        <span><a href='ObtenerPreguntaUI.php?<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Obtener Preguntas UI</a></span>

        <span><a href='creditosUser.php?email=<?php echo $_GET['email']?>&img=<?php echo $_GET['img']?>'>Creditos</a></span>
    </nav>

    <section class="main" id="s2">
      <form>
        <div id="revisarPregunta">
         <label>Email: </label> <input placeholder="" readonly>
         <label>Enunciado: </label> <input id="enunciado" placeholder="">
         <label>Respuesta correcta: </label> <input id="resCorrecta" placeholder="">
         <label>Respuesta Incorrecta 1: </label> <input id="respInc1" placeholder="">
         <label>Respuesta Incorrecta 2: </label> <input id="respInc2" placeholder="">
         <label>Respuesta Incorrecta 3: </label> <input id="respInc3" placeholder="">
         <label>Dificultad: </label> <input id="dificultad" placeholder="">
         <label>Tema: </label> <input id="tema" placeholder="">
        </div>

        <input type="submit" id="btn" value="Modificar">
      </form>

      <br>


      <h5 id="LetraPequeña">*Los campos que no se modifiquen se enviaran con el valor anterior </h5>


      <div id="flotante"></div>
    </section>

    <footer class='main' id='f1'>
        <p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
        <a href='https://github.com'>Link GITHUB</a>
    </footer>

    <script>

      //Script quue carga todas las preguntas en una variable
    var r=  <?php
      $link = mysqli_connect("localhost", "id2921858_swg26","*****","id2921858_quiz");
      $datos = mysqli_query($link, "select * from Pregunta");
      echo datos;
    ?>

   </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $("#btn").click(function(){
            var data = new FormData(this);

            $.ajax({
                url:"http://adiazdeotazu.000webhostapp.com/web/php/ActualizarPregunta.php"
                data:data,
                type:'POST',
                processData: false,
                cache: false,
                contentType: false,
                success: function(e){


                }

            });
        });

    </script>
</body>
</html>
