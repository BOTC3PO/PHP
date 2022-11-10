<?php require("config.php") ?>

<!doctype html>
<html lang="es">

<head>


    <link rel="shortcut icon" href="src/favicon/favicon.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
    <?php require('src/templates/link.php'); ?>

</head>

<body>
    <?php
         require('src/templates/nav.php');
    ?>
    <h2 class="text-center">Contacto</h2>
    <div class="info row row-cols-3 align-items-center mt-5">
        <div class="col text-center">
            <a href="mailto:Contacto@revar.com?Subject=contacto">
                <img src="src/img/icono5.svg" alt="icono email" height="128px">
                Email: Contacto@revar.com
            </a>
        </div>
        <div class="col d-flex text-center justify-content-center">
            <img src="src/img/icono7.svg" alt="horarios" height="128px">
            <div class="d-flex flex-column align-items-center p-0 m-0">
                <h5 class="text-center">horarios</h5>
                <p class="mx-1">lunes a viernes:<br>8hs - 21hs<br>sabados y domingos:<br>9hs - 23hs</p>
            </div>
        </div>

        <div class="col text-center d-flex">
            <img src="src/img/icono8.png" height="128px" alt="delivery">
            <p>delivery solo disponible en CABA</p>
        </div>

    </div>

    <div class="infomap">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d491.7053180318934!2d-58.39588528546312!3d-34.60445499963114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1665011982080!5m2!1ses!2sar"
            height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <div class="input-group m-2  d-flex">
        <form action="#" method="post">
            <label for="floatingInput">Email address</label>
            <input type="email" class="form-control ziup" id="floatingInput" placeholder="name@example.com">
            <label class="input-group-text">mensaje</label>
            <textarea class="form-control ziup" aria-label="With textarea"></textarea>
            <button type="submit" name="enviar_formulario" class="btn l12" id="enviar"><p class="p-0 m-0">Enviar</p></button>
        </form>
    </div>

    <?php
         require('src/templates/foot.php');
    ?>


<?php require('src/templates/script.php') ?>
</body>

</html>