<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
    <link rel="stylesheet" href="../styles/sass/principal.css">
    <link rel="stylesheet" href="../styles/all.min.css">
    <script
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=maps,marker&v=beta"
        defer></script>
</head>

<body>
    <?php
    require "header.html";
    ?>

    <section id="contactSection">
        <h1>¿Quiénes somos?</h1>
        <p>Somos una compañía de periódico digital que tiene como objetivo hacer llegar una
            información veraz y contrastada al mayor número de personas posible además de dar
            voz a todo el mundo por igual para evitar la información sesgada.

            Esta compañía se fundó recientemente con ese propósito y cuenta con un equipo
            numeroso de redactores, actualmente ubicados en nuestra sede en Granada, España.
        </p>
        <section>
            <!-- <gmp-map center="37.4220656,-122.0840897" zoom="10" map-id="DEMO_MAP_ID" style="height: 400px"></gmp-map> -->
            <img id="googleMap" src="../media/placeholder_map.webp" alt="Google Maps" />
            <form action="">
                <input type="text" placeholder="Correo electrónico">
                <textarea name="" id="" placeholder="Mensaje"></textarea>
                <input type="submit" class="buttonForm" value="Enviar">
            </form>
        </section>
    </section>



    <?php
    require "footer.html";
    ?>
</body>

</html>