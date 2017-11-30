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
      <form id="form">
        <div id="revisarPregunta">
         <label>Email: </label> <input id="email" placeholder="" readonly>
         <label>Enunciado: </label> <input id="enunciado" placeholder="">
         <label>Respuesta correcta: </label> <input id="resCorrecta" placeholder="">
         <label>Respuesta Incorrecta 1: </label> <input id="respInc1" placeholder="">
         <label>Respuesta Incorrecta 2: </label> <input id="respInc2" placeholder="">
         <label>Respuesta Incorrecta 3: </label> <input id="respInc3" placeholder="">
         <label>Dificultad: </label> <input id="complejidad" placeholder="">
         <label>Tema: </label> <input id="tema" placeholder="">
        </div>

        <input type="submit" id="btn" value="Modificar">
      </form>

      <br>


      <h5 id="LetraPequeña">*Los campos que no se modifiquen se enviaran con el valor anterior </h5>


      <div id="flotante"><select id= 'ids' placeholder = 'Selecciona una pregunta...' ></selection></div>
    </section>

    <footer class='main' id='f1'>
        <p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
        <a href='https://github.com'>Link GITHUB</a>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script>

      //Script quue carga todas las preguntas en una variable
    $(document).ready(function(){
    var r=  "<?php
      $link = mysqli_connect("localhost", "id2921858_swg26","***","id2921858_quiz");
      $datos = mysqli_query($link, "select * from Pregunta");

      while($row = mysqli_fetch_array($datos)){
    echo "<option>$row[id]</option>";}
    ?>";
    console.log(r);
    $("#ids").html(r);
});

$("#ids").change(function(){
    console.log("Entra en ids");
  var id= $("#ids option:selected").val();
  console.log(id);
  $.ajax({
    url:"GetPreguntaByid.php?id="+id,
    type:'GET',
    processData: false,
    cache: false,
    contentType: false,
    success: function(e){
       var dats = e.split(",");
      $("#enunciado").attr("placeholder",dats[0]);
      $("#resCorrecta").attr("placeholder",dats[1]);
      $("#respInc1").attr("placeholder",dats[2]);
      $("#respInc2").attr("placeholder",dats[3]);
      $("#respInc3").attr("placeholder",dats[4]);
      $("#complejidad").attr("placeholder",dats[5]);
      $("#tema").attr("placeholder",dats[6]);
      $("#email").attr("placeholder",dats[7]);
    }
  });

});
   </script>


    <script>
        function formatInput(id){
          if($("#"+id).val()==""){
            return $("#"+id).attr("placeholder");
          }
          return $("#"+id).val();
        }


        $("#btn").click(function(event){
            event.preventDefault();
            var data = new FormData();
            data.append("enunciado",formatInput("enunciado"));
            data.append("resCorrecta",formatInput("resCorrecta"));
            data.append("respInc1",formatInput("respInc1"));
            data.append("respInc2",formatInput("respInc2"));
            data.append("respInc3",formatInput("respInc3"));
            data.append("complejidad",formatInput("complejidad"));
            data.append("tema", formatInput("tema"));
            data.append("id",$("#ids option:selected").val());

            $.ajax({
                url:"http://adiazdeotazu.000webhostapp.com/web/php/ActualizarPregunta.php",
                data: data,
                type:'POST',
                processData: false,
                cache: false,
                contentType: false,
                success: function(e){
                console.log(e);

                }

            });
            $("#form")[0].reset();
             $("#enunciado").attr("placeholder","");
            $("#resCorrecta").attr("placeholder","");
            $("#respInc1").attr("placeholder","");
            $("#respInc2").attr("placeholder","");
            $("#respInc3").attr("placeholder","");
            $("#complejidad").attr("placeholder","");
            $("#tema").attr("placeholder","");
            $("#email").attr("placeholder","");
        });



    </script>
</body>
</html>
