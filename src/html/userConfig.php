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

    <main>
        <section id="userConfig">
            <section id="leftConfig">
                <i class="fa-solid fa-circle-user fa-3x" id="loginIcon"></i>
                <button>Usuario123</button>
            </section>
            <section id="rightConfig">
                <a href="createNew.php"><button>Redactar una noticia</button></a>
                <button>Ver mis noticias</button>
                <button>Cerrar Sesión</button>
                <button>Eliminar cuenta</button>
            </section>


        </section>

    </main>

    <?php
    require "footer.html";
    ?>
</body>

</html>