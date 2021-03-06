<?php

session_start();

$descripcion;
$puntaje;
$url;

if (!isset($_GET['Jugador'])) {
    $descripcion = "Defensor del universo";
    $puntaje = "tu puntaje es";
    $url = "../variables/db_AgregarPuntuacion.php?Puntaje=".$_GET['Puntaje']."&nombre=".$_SESSION['Nickname'];
    
} else {
    $descripcion = "Ganador: Jugador ".$_GET['Jugador'];
    $puntaje = "";
    $url = "../html/Inicio.php";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:url" content="http://www.your-domain.com/your-page.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Universe Defenders" />
    <meta property="og:description" content="No permitas que los invasores nos derroten " />
    <meta property="og:image" content="http://www.your-domain.com/path/image.jpg" />
    <link href="../css/Victoria_style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Tourney:wdth,wght@97.2,494&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dhurjati&family=DotGothic16&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <link rel="shortcut icon" href="../Elementos/Universe_defenders.png" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/89688bb0b5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet" />
    <script type="text/javascript" src="../js/apiFacebook.js"></script>

    <title>Victoria</title>
    <script type="text/javascript">
        $(document).ready(function () {
            var dificultad = localStorage.getItem("Dificultad");
            var nombre = localStorage.getItem("Nombre");
            var escenario = localStorage.getItem("Escenario");
        });

        function shareFB() {
            var score = $(".Score").val();
            shareScore(score);
        }
    </script>
</head>

<body>
    <iframe src="../Elementos/M??sica ambiental _8 Ambiente espacial (No copyright)(MP3_128K).mp3" type="audio/mp3"
        allow="autoplay" id="audio" style="display: none"></iframe>
    <audio autoplay loop id="mainAudio">
        <source src="../Elementos/M??sica ambiental _8 Ambiente espacial (No copyright)(MP3_128K).mp3"
            type="audio/mp3" />
        <p>
            If you are reading this, it is because your browser does not support the
            audio element.
        </p>
    </audio>

    <div class="Menu-box">
        <img class="Logo" src="../Elementos/Universe_defenders.png" alt="Logo_juego" />
        <h1>FELICIDADES</h1>
        <p><?php echo $descripcion ?></p>
        <p><?php echo $puntaje ?></p>
        <form method= "GET" action="" style="margin-top: 30px">
            <input type="number" class="Score" value="<?php echo $_GET['Puntaje']; ?>" disabled />

            <!-- <div class="col-md-6 animated infinite jello"> -->
            <div class="animated infinite bounce">
                <button class="btnShare" onclick="shareFB();">Compartir</button>
            </div>
            <button type="button" onclick="window.location.href='<?php echo $url ?>';" class="btnhome">
                <i class="fas fa-home"></i>
            </button>
            <!--
            <button type="button" onclick="window.location.href='../html/Inicio.php';" class="btn">
                <i class="fas fa-undo-alt"></i>
            </button>
            <button type="button" onclick="window.location.href='../html/Configuraciones.php';" class="btnfix">
                <i class="fas fa-cogs"></i>
            </button>
            -->
        </form>
    </div>

    <div class="lasers">
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
        <div class="laser"></div>
    </div>
</body>

</html>