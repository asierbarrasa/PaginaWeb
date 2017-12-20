
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
        <?php echo $_SESSION["email"]?> <img id="imgUser" src= '<?php echo $_SESSION["img"]?>' width = '50px' heigth= '50px'><br>
        <span class="right" ><a href="logOut.php">Logout</a></span>

        <h2>Quiz: el juego de las preguntas</h2>
    </header>
    <nav class='main' id='n1' role='navigation'>
        <span><a href='layoutUser.php'>Inicio</a></span>
        <span><a href='GestionPreguntas.php'>Gestionar Preguntas</a></span>
        <span><a href ='ObtenerDatos.php'>Consultar usuarios</a></span>
        <span><a href='ObtenerPreguntaUI.php'>Obtener Preguntas UI</a></span>
        <span id="revisarPreg" style="visibility: hidden;"><a href='RevisarPreguntas.php'>Revisar Preguntas</a></span>

        <span><a href='creditosUser.php'>Creditos</a></span>


    </nav>
    <section class="main" id="s1">
        <div>
            <label>Enunciado</label><br>
            <label id="enunciado"> </label> <br><br>

            <div id="radButton">
            <!--Al tener el mismo name quedan agrupados-->
            <input type="radio" name="respuesta" value=""><br>
            <input type="radio" name="respuesta" value=""><br>
            <input type="radio" name="respuesta" value=""><br>
            <input type="radio" name="respuesta" value="">
            </div>

            <input type="button" value="Corregir" id="corregir"><br>
            <input type="button" value="Siguiente" id="siguiente">



        </div>
    </section>
    <footer class='main' id='f1'>
        <p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
        <a href='https://github.com'>Link GITHUB</a>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        if("<?php echo $_SESSION["email"]?>" == "web000@ehu.es"){
            $("#revisarPreg").css("visibility","visible");
        }
    })
    $("#corregir").click(function(){
        $.ajax({
            url:"Corregir.php",
            type:'POST',
            processData: false,
            cache: false,
            contentType: false,
            success: function(e){
                $("#ajax").html(e);
            }
        });
    });

</script>
</body>
</html>