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

    <form action="../index.html" class="userForm" id="formPublishNew">
        <input type="text" placeholder="Titular de la noticia">
        <input type="text" placeholder="Adjuntar imagen">
        <textarea name="" id="" placeholder="Cuerpo de la noticia"></textarea>
        <input type="submit" class="buttonForm" value="Publicar">

    </form>

    <?php
    require "footer.html";
    ?>
</body>

</html>