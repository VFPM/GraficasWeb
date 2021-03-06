<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Elementos/Universe_defenders.png" type="image/x-icon">

  <link href="../css/Escenarios_style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/89688bb0b5.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/lightslider.css">

  <script type="text/javascript" src="../js/JQuery3.3.1.js"></script>
  <script type="text/javascript" src="../js/lightslider.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>

  <title>Escenarios</title>



  <script type="text/javascript">

    $(document).ready(function () {

      var dificultad = localStorage.getItem("Dificultad");
      var nombre = localStorage.getItem("Nombre");
      var escenario = localStorage.getItem("Escenario");

    });
  </script>

</head>

<body>

  <iframe src="../Elementos/Música ambiental _8 Ambiente espacial (No copyright)(MP3_128K).mp3" type="audio/mp3"
    allow="autoplay" id="audio" style="display:none"></iframe>
  <audio autoplay loop id="mainAudio">
    <source src="../Elementos/Música ambiental _8 Ambiente espacial (No copyright)(MP3_128K).mp3" type="audio/mp3" />
    <p>If you are reading this, it is because your browser does not support the audio element. </p>
  </audio>

  <section id="cursos">
    <div class="container-fluid">
      <div class="botones-box">
        <form>
          <button type="button" onclick="window.location.href='../html/Inicio.php';" class="btnhome"><i
              class="fas fa-home"></i></button>
          <button type="button" onclick="window.location.href='../html/Inicio.php';" class="btn"><i
              class="fas fa-undo-alt"></i> </button>
          <button type="button" onclick="window.location.href='../html/Configuraciones.php';" class="btnfix"><i
              class="fas fa-cogs"></i> </button>


        </form>
      </div>
      <div class="content_lado">

        <br><br><br>
        <h2>E S C E N A R I O S</h2>
      </div>

      <div class="row">


        <form method= "POST" action="../variables/escenario.php" >
          <div class="contenedor_recuadros">
            <ul id="autoWidth" class="cs-hidden">
              <!-- 1  ---------------------------------------- -->
              <li class="item-a">
                <div class="caja_cursos">
                  <img src="../Elementos/Hiper_velocidad.jpg" class="img_curso_cuadro" alt="curso 1">
                  <div class="detalles_curso">
                  <button type="Sumbit" name= "escenario" value=1>ESTRELLAS</button> <!-- Boton para enviar el dato del escenario1- -->
                </div>
              </li>
              

              <!-- 2  ---------------------------------------- -->
              <li class="item-a">
                <div class="caja_cursos">
                  <img src="../Elementos/vortice.jpg" class="img_curso_cuadro" alt="curso 1">
                  <div class="detalles_curso">
                  <button type="Sumbit" name= "escenario" value=2>VORTICE</button> <!-- Boton para enviar el dato del escenario2- -->
                  </div>
                </div>
              </li>

              <!-- 3  ---------------------------------------- -->
              <li class="item-a">
                <div class="caja_cursos">
                  <img src="../Elementos/nebula.jpg" class="img_curso_cuadro" alt="curso 1">
                  <div class="detalles_curso">
                  <button type="Sumbit" name= "escenario" value=3>NEBULOSA</button> <!-- Boton para enviar el dato del escenario3- -->
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </form>

      </div>
    </div>
  </section>


</body>

</html>