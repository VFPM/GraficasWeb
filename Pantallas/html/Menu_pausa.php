<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/Pausa_style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tourney:wdth,wght@97.2,494&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dhurjati&family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="shortcut icon" href="../Elementos/Universe_defenders.png" type="image/x-icon">

    <title> Pausa </title>
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
        <source src="../Elementos/Música ambiental _8 Ambiente espacial (No copyright)(MP3_128K).mp3"
            type="audio/mp3" />
        <p>If you are reading this, it is because your browser does not support the audio element. </p>
    </audio>

    <div class="Menu-box">
        <img class="Logo" src="../Elementos/Pausa_def.png" alt="Logo_juego">
        <h1>P A U S A</h1>
        <form>
            <!-- <div class="col-md-6 animated infinite jello"> -->
            <div class="animated infinite bounce">
                <input type="button" value="Reaunudar" onclick="window.location.href='../html/Pantalla_Juego.php';">
                <br>
                <input type="button" value="Ajustes" onclick="window.location.href='../html/Configuraciones.php';">
                <br>
                <input type="button" value="Inicio" onclick="window.location.href='../html/Inicio.php';">
                <br>
            </div>
        </form>
    </div>



</body>

</html>