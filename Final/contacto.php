<?php require("config.php") ?>


<?php

    $archivo = file_get_contents('src/DB/admin.json');
   #var_dump($archivo);
    require_once('src/templates/funciones_input.php');
    require_once('src/templates/funciones_json.php');
    $lista = getJson('src/DB/admin.json');
    $bolianos=true;
    if( isset($_POST['submit'] ))   {
        
        $email = test_input( $_POST['email'] ?? null );
        $mensaje = test_input( $_POST['mensaje'] ?? null );
        $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
        if (preg_match($regex, $email)) {
            
            if (is_null($mensaje) || empty($mensaje)) {
            $bolianos=false;
        }
        #var_dump(is_null($mensaje));
        #var_dump($mensaje);
        #$ID= test_input( $_GET['ID'] ?? null );

        if ($archivo=='{}') {
            if (($email!==null or $mensaje!==null)) {
            $lista = array(
            'Estado'=>"0",
            'email' => $email,
            'mensaje' => $mensaje 
         );
        
        }
        }else{
        array_unshift($lista, array(
            'Estado'=>"0",
            'email' => $email,
            'mensaje' => $mensaje  
        ));
        saveJson('src/DB/admin.json', $lista);
        
          }
   
          if ($bolianos==false) {
            $lista="{}";
        }else {
          
            $aux=json_encode($lista);
    
           # var_dump($aux);
            file_put_contents('src/DB/admin.json',$aux);
    
        } 
        
         header('Location:success.php');
        
    }

    
 //   var_dump($lista);
}
?>

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
        <form action="contacto.php" method="post">
            <label for="email">Email address</label>
            <!---placeholder="name@example.com"-------> 
            <input type="email" class="form-control ziup" id="email" name="email" >
            <label for="mensaje" class="input-group-text">mensaje</label>
            <textarea class="form-control ziup" name="mensaje" id="mensaje" aria-label="With textarea"></textarea>
            <button type="submit" name="submit" class="btn l12" id="enviar"><p class="p-0 m-0">Enviar</p></button>
        </form>
    </div>

    <?php
         require('src/templates/foot.php');
    ?>


<?php require('src/templates/script.php') ?>
</body>

</html>