<?php require("config.php") ?>




<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--no cache-->
    <meta http-equiv="Expires" content="0">

    <meta http-equiv="Last-Modified" content="0">

    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

    <meta http-equiv="Pragma" content="no-cache">
    <link rel="shortcut icon" href="<?php BASE_URL ?>src/favicon/favicon.jpg" type="image/x-icon">

    <title>indice</title>

    <?php require("src/templates/link.php"); ?>

</head>    
    <body>
    <?php
    require('src/templates/nav.php');
?>
    

    <div style="height: 80vh ;min-height:fit-content ;text-align: center;" class="d-flex row">
        <h2 style="margin-top:10rem">
            Error cargando el menu
        </h2>
        <p>
            intenta de nuevo mas tarde
        </p>
    </div>




<?php
require('src/templates/foot.php');
?>
<?php require('src/templates/script.php') ?>

</body>

</html>