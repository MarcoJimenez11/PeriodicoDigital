<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
    <link rel="stylesheet" href="../styles/sass/principal.css">
    <link rel="stylesheet" href="../styles/all.min.css">
</head>

<body>
    <?php
    require "header.html";
    ?>

    <section class="sectionNewDetailed">
        <h1 class="newTitle">Termina el partido con victoria para la selección Española</h1>
        <picture class="newImage">
            <!-- AVIF -->
            <source type="image/avif" media="(min-width: 2560px)" srcset="../media/img/avif/estadio-de-futbol_2560.avif" />
            <source type="image/avif" media="(min-width: 1920px)" srcset="../media/img/avif/estadio-de-futbol_1920.avif" />
            <source type="image/avif" media="(min-width: 1200px)" srcset="../media/img/avif/estadio-de-futbol_1200.avif" />
            <source type="image/avif" media="(min-width: 768px)" srcset="../media/img/avif/estadio-de-futbol_768.avif" />
            <source type="image/avif" media="(max-width: 767px)" srcset="../media/img/avif/estadio-de-futbol_480.avif" />
            <!-- WEBP -->
            <source type="image/webp" media="(min-width: 2560px)" srcset="../media/img/webp/estadio-de-futbol_2560.webp" />
            <source type="image/webp" media="(min-width: 1920px)" srcset="../media/img/webp/estadio-de-futbol_1920.webp" />
            <source type="image/webp" media="(min-width: 1200px)" srcset="../media/img/webp/estadio-de-futbol_1200.webp" />
            <source type="image/webp" media="(min-width: 768px)" srcset="../media/img/webp/estadio-de-futbol_768.webp" />
            <source type="image/webp" media="(max-width: 767px)" srcset="../media/img/webp/estadio-de-futbol_480.webp" />
            <!-- JPEG -->
            <source type="image/JPEG" media="(min-width: 2560px)" srcset="../media/img/jpeg/estadio-de-futbol_2560.jpeg" />
            <source type="image/JPEG" media="(min-width: 1920px)" srcset="../media/img/jpeg/estadio-de-futbol_1920.jpeg" />
            <source type="image/JPEG" media="(min-width: 1200px)" srcset="../media/img/jpeg/estadio-de-futbol_1200.jpeg" />
            <source type="image/JPEG" media="(min-width: 768px)" srcset="../media/img/jpeg/estadio-de-futbol_768.jpeg" />
            <source type="image/JPEG" media="(max-width: 767px)" srcset="../media/img/jpeg/estadio-de-futbol_480.jpeg" />
            <img id="imagen1" src="../media/img/jpeg/estadio-de-futbol_1920.jpeg" alt="Estadio de fútbol" />
        </picture>
        <p class="newDescription">El partido de semifinales de la Eurocopa ha concluido con la victoria para la selección
            de España con un resultado de 3-0. </p>
        <p class="newDescription">El jugador Nico Williams fue el encargado de
            anotar los primeros dos goles, que celebró de forma efusiva junto con su compañero
            Lamine Yamal que fue el que realizó la asistencia en su primer tanto.
        </p>
        <p class="newDescription">
            Dani Olmo fue el encargado de meter el tercer y último gol que terminó por sentenciar
            el partido.
            Los jugadores han declarado que están concentrados ya en su próximo encuentro que
            será la final de este emocionante torneo.</p>
    </section>
    
    <?php
    require "footer.html";
    ?>
</body>

</html>