<?php

    $archivo = file_get_contents('src/comentarios/data.json');
   // var_dump($archivo);
    require_once('src/templates/funciones_input.php');
    require_once('src/templates/funciones_json.php');
    $lista = getJson('src/comentarios/data.json');
    $bolianos=true;
    if( isset($_POST['submit']) ) {
        
        $titulo = test_input( $_POST['titulo'] ?? null );
        if ($titulo==null) {
            $titulo="Anomimo";
        }
        $mensaje = test_input( $_POST['mensaje'] ?? null );

        if (is_null($mensaje) || empty($mensaje)) {
            $bolianos=false;
        }
        #var_dump(is_null($mensaje));
        #var_dump($mensaje);
        $ID= test_input( $_GET['ID'] ?? null );

        if ($archivo=='{}') {
            if (($titulo!==null or $mensaje!==null)) {
            $lista = array(
            'ID' => $ID ,
            'time' => time(),
            'titulo' => $titulo,
            'mensaje' => $mensaje 
         );
        
        }
        }else{
        array_unshift($lista, array(
            'ID' => $ID,
            'time' => time(),
            'titulo' => $titulo,
            'mensaje' => $mensaje  
        ));
        saveJson('src/comentarios/data.json', $lista);
    }

    if ($bolianos==false) {
        $lista="{}";
    }else {
      
        $aux=json_encode($lista);

       # var_dump($aux);
        file_put_contents('src/comentarios/data.json',$aux);
    } 
 //   var_dump($lista);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"
        type="text/css">
    <link rel="stylesheet" href="src/css/style.css" type="text/css">

    <title>Document</title>
</head>

<body onload="setTimeout(cargarmuestra(),3000)">
    <?php
    require('src/templates/nav.php');
?>
<div class="d-flex mastermuestra">


        <div class="row row-cols-1 d-flex m-0 align-content-center justify-content-center text-center staticos w-50">
            <div class="col m-0 ">
                <?php
$category = $_GET['ID'];
$pro= @file_get_contents('src/DB/productos.json');
$pro=json_decode($pro, true);
$i= (int)$category;
foreach ($pro as $value) {

    switch ($value[$i]["categoria"]) {
        case 'Pastas':
            $mensaje = "Plato de ". $value[$i]["nombre"];
            break;
        case 'Salsas':
            $mensaje = "Salsa ". $value[$i]["nombre"];
            break;
        case 'Pizzas':
            $mensaje = "Pizza  ". $value[$i]["nombre"];
            break;
        case 'Hamburguezas':
            $mensaje = "Hamburgueza ". $value[$i]["nombre"];
            break; 
        case 'Japones':
            $mensaje =  $value[$i]["nombre"];
            break;
        case 'Mexicano':
          $mensaje =  $value[$i]["nombre"];
           break; 
        case 'Empanadas':
           $mensaje = "Empanada ". $value[$i]["nombre"];
            break;    
        case 'Otros':
            $mensaje =  $value[$i]["nombre"];
            break; 
        case 'Postres':
            $mensaje =  $value[$i]["nombre"];
            break; 
        case 'locro':
            $mensaje = "Plato de ". $value[$i]["nombre"];
            break;       
        case 'Fiesta':
            $mensaje =  $value[$i]["nombre"];
            break;  
        case 'Bebidas y tragos':
            $mensaje =  $value[$i]["nombre"];
            break;                                  
  }
    echo "<h3>{$mensaje}</h3>";
    ?>
    </div> <div class="h-50 ">
    <?php
    echo "<img src=src/img/{$i}.webp class=a  alt={$value[$i]["nombre"]}>";
    ?>
    </div> <div class="col">
    <?php
    echo  "<h4>$ {$value[$i]["precio"]}</h4>";
        ?>   
    </div> <div class="col">
     <?php
        if ($value[$i]["promociones"]!="") { 
        echo  "<h4> {$value[$i]["promociones"]}</h4>";
    }

    ?>
    </div>


<?php }?>


            

</div>

<div class="divcoment">   
<div class="datos_objetos">
<?php
foreach ($pro as $value) {
    ?>




<?php
}
?>
</div>
        
                <h3> Comentarios </h3>

                <form action="muestra.php?ID=<?php echo $_GET['ID']?>" method="post">

                    <div class="form-group mb-3">
                        <label for="titulo"> Nombre </label>
                        <input type="text" class="form-control" name="titulo" id="titulo" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="mensaje"> Mensaje </label>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit"> Enviar </button>
                </form>

                <hr>

                <?php 
        if ($lista!="{}" && $lista!=NULL && $lista!="" && !is_null($lista) && !empty($lista)) {
         //echo $lista;
        $validador = $_GET['ID'];

        foreach($lista as $item){
            if ($validador==$item['ID']) {
        ?>
                <div class="comentarios mb-3" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $item['titulo'] ?> </h5>
                        <p class="card-text"> <?php echo nl2br($item['mensaje']) ?> </p>
                        <p style="text-align: right;"> Publicado el: <?php echo date('d/m/Y h:i:s', $item['time']) ?>
                        </p>
                    </div>
                </div>
                <?php }}} ?>

            </div>
        </div>
        </div>
    <?php
    require('src/templates/foot.php');
?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"
        type="text/javascript">
    </script>
    <script src="src/lib/bootstrap/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"
        type="text/javascript">
    </script>
    <script src="src/js/index.js" type="text/javascript"></script>
</body>

</html>