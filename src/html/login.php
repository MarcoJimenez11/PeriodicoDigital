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

    <form action="userConfig.php" class="userForm">
        <input type="text" placeholder="Nombre de usuario">
        <input type="text" placeholder="Correo electrónico">
        <a href="">¿Olvidaste la contraseña?</a>
        <label><input type="checkbox" /> Mantener sesión iniciada</label>
        <input type="submit" class="buttonForm" value="Iniciar sesión">
    </form>

    <?php
    require "footer.html";
    ?>
</body>

</html>