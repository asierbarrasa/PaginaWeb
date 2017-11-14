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
        <?php echo $_GET["email"]?> <img id="imgUser" src= '<?php echo $_GET['img']?>' width='50px' height='50px'><br>
        <span class="right" ><a href="logOut.php">Logout</a></span>

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
            <form id="fpreguntas" name="fpreguntas" action="../php/InsertarPreguntaConFoto.php" method="post" enctype="multipart/form-data">
                <label>Dirección de correo * :</label><input type="text" name="email" id="email" value ='<?php echo $_GET["email"]?>'><br>
                <label>Enunciado de la pregunta * :</label><input type="text" name="preg" id="preg"><br>
                <label>Respuesta correcta * :</label><input type="text" name="respC" id="respC"><br>
                <label>Respueta incorrecta 1 * :</label><input type="text" name="respI1" id="respI1"><br>
                <label>Respueta incorrecta 2 * :</label><input type="text" name="respI2" id="respI2"><br>
                <label>Respueta incorrecta 3 * :</label><input type="text" name="respI3" id="respI3">

                <br>
                <br>

                <label>Complejidad * :</label><input type="text" name="comp" id="compl"><br>
                <label>Tema de la pregunta * :</label><input type="text" name="tema" id="tema">
                <br>
                <label>Imagen:</label><input id="fileInput" type="file" size="50" name="imagen">
                <br>
                <input type="submit" id="boton">
            </form>
            <div>
                <img src="" id="imagen" width="140px" height="140px">

            </div>
        </div>


    </section>
    <footer class='main' id='f1'>
        <p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
        <a href='https://github.com'>Link GITHUB</a>
    </footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>

    /*$("#fpreguntas").submit(function(){
       if (!requiredField("email")) {
         alert("Introuce un email")
         event.preventDefault();
       }else if(!validateEmail()){
         alert("Introduce un email valido")
         event.preventDefault();
       }else if (!requiredField("preg") ) {
           alert("Introduce una pregunta")
           event.preventDefault();
       }else if (!validarPregunta()) {
         alert("Introduce una pregunta de al menos 10 caracteres")
         event.preventDefault();
       }else if (!requiredField("respC")) {
           alert("Introduce una respuesta correcta")
           event.preventDefault();
       }else if (!requiredField("respI1")) {
           alert("Campo Respuesta 1 requerido")
           event.preventDefault();
       }else if (!requiredField("respI2")) {
           alert("Campo Respuesta2 requerido")
           event.preventDefault();
       }else if (!requiredField("respI3")) {
           alert("Campo respuesta 3 requerido")
           event.preventDefault();
       }else if (!requiredField("compl")) {
         alert("Introduce una cmplejidad")
         event.preventDefault();
       }else if (!validarCompl()) {
         alert("Introduce un numero entre el 1 y el 5")
         event.preventDefault();
       }else if (!requiredField("tema")) {
         alert("Introduce un tema")
         event.preventDefault();
       }else {
         return;
       }
     }); */
    $("#fileInput").change(function(){
        var exp = $("#fileInput")[0].files;
        console.log(exp);
        var reader = new FileReader();
        reader.onloadend = function(e){
            var origen,tipo;
            origen = e.target;
            $('#imagen').attr('src', origen.result)
        };
        reader.readAsDataURL(exp[0]);
    });

    /*function validateEmail(){
      var email=$("#email").val();
      var er1= new RegExp("[a-z]*[0-9]{3}@ikasle.ehu.[es|eus]");
      var rta=er1.test(email);
      console.log(rta)
      return rta;
    }

    function requiredField(id){
      var var1=$("#"+id).val();
      if (var1=="") {
        console.log("FAIL")
        return false;
      }else {
        console.log("OK")
        return true;
      }
    }

    function validarPregunta(){
      var pregunta =$("#preg").val();
      if (pregunta.length<10) {
        return false;
      }else {
        return true;
      }


    function validarCompl(){
      var compl=$("#compl").val();
      if (compl>=1 && compl <=5) {
        return true;
      } else {
        return false;
      }
    }*/


</script>
</body>
</html>
