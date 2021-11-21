<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../Elementos/Universe_defenders.png" type="image/x-icon" />

    <link href="../css/Puntuaciones_style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/89688bb0b5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet" />

    <title>Puntuaciones</title>

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
        allow="autoplay" id="audio" style="display: none"></iframe>
    <audio autoplay loop id="mainAudio">
        <source src="../Elementos/Música ambiental _8 Ambiente espacial (No copyright)(MP3_128K).mp3"
            type="audio/mp3" />
        <p>
            If you are reading this, it is because your browser does not support the
            audio element.
        </p>
    </audio>

    <div class="Menu-box">
        <img class="Logo" src="../Elementos/score.png" alt="Logo_juego" />
        <form method= "GET" action="">
            <p>
                <i class="fas fa-user-astronaut"></i>1. KONAN BIG
                .................................1'000'000pts
            </p>
            <br />
            <!--<p>
                <i class="fas fa-user-astronaut"></i>2. EMMA HUEVO
                ...................................800'000pts
            </p>
            <br />
            <p>
                <i class="fas fa-user-astronaut"></i>3. ERNESTO CHAVANA
                ..............................500'000pts
            </p>
            <br />
            <p>
                <i class="fas fa-user-astronaut"></i>4. BRENDA BEZARES
                ................................23'000pts
            </p>
            <br />
            <p>
                <i class="fas fa-user-astronaut"></i>5. HECTOR BENAVIDES
                ..............................1'000pts
            </p>
            <br />-->
            <button type="button" onclick="window.location.href='../html/Inicio.php';" class="btnhome">
                <i class="fas fa-home"></i>
            </button>
            <button type="button" onclick="window.location.href='../html/Inicio.php';" class="btn">
                <i class="fas fa-undo-alt"></i>
            </button>
            <button type="button" onclick="window.location.href='../html/Configuraciones.php';" class="btnfix">
                <i class="fas fa-cogs"></i>
            </button>

            <!-- <div class="col-md-6 animated infinite jello"> -->
            <!-- <div class="animated infinite bounce">
                <input type="button" value="START">
                <br>
                <input type="button" value="Niveles">
                <br>
                <input type="button" value="2 jugadores">
                <br>
                <input type="button" value="Puntación">
                <br>
                <input type="button" value="Ajustes">
            </div> -->
        </form>
    </div>
</body>

</html>