<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procuctos</title>
    <link href="src/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"
        type="text/css">
    <link rel="stylesheet" href="src/css/style.css" type="text/css">
    <link rel="shortcut icon" href="src/favicon/favicon.jpg" type="image/x-icon">
</head>

<body onload="setTimeout(cargarprod(),3000)">
    <?php
         require('src/templates/nav.php');
    ?>
<!--
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
        </button>
        <ul class="dropdown-menu">
            <?php    /*       
                
                $data= @file_get_contents('src/DB/categoria.json');
                $data=json_decode($data, true);
                $date_now = date('d-m');
                $bola=true;
                foreach ($data as $value ) {
                for ($i=0; $i < count($value); $i++) {        
                  if ($value[$i]["categoria"]=="Locro") {
                      //depuracion
                      #gtm+0
                      #var_dump($value[$i]["dia"]);
                      #argentina gtm-3
                      #var_dump($date_now);
                     if (!(in_array($date_now,$value[$i]["dia"]))) {
                      $bola=false;
                     }
                  }
                  if ($bola) {
                echo "<li><a class=dropdown-item href={$value[$i]["link"]} >{$value[$i]["categoria"]}</a></li>";
            }
            $bola=true;      
          };
        }
                   */ ?>

        </ul>
    </div>
-->

    <div class="container text-center">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 justify-content-around justify-content-lg-center justify-content-xxl-center indexmen">
    <?php
    $category = $_GET['id'];
    $nand=$_GET['n'];
    $disponibles = array("Pastas","Salsas","Pizzas","Hamburguezas","Japones","Mexicano","Empanadas","Otros","Postres","Locro","Fiesta","Bebidasytragos" );    
    $nand=intval($nand);
    if (!in_array($category,$disponibles)) {
    header("Location: index.php");
    }else {
        $pro= @file_get_contents('src/DB/productos.json');
                $pro=json_decode($pro, true);
                $date_now = date('d-m');
                $bolian=false;
                foreach ($pro as $value) {
                    for ($i=0; $i < 100; $i++) { 
                    $boliano=(in_array($date_now,$value[81]["dia"]));
                    if ($nand==9&&$boliano) {
                        $bolian=true;
                    } else {
                        $bolian=false;
                    }
           
                  $bolian=(($category==$disponibles[$nand]) and ($category==preg_replace('/\s+/', '',$value[$i]["categoria"]))); 

                    if ($bolian) {

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

                   
                    echo "<div class=col><div class=card style=width:18rem><img src=src/img/{$i}.webp class=a id=a{$i} alt={$value[$i]["nombre"]}><div class=texto><h5 class=card-title>{$mensaje}</h5><p class=card-text>{$value[$i]["datos"]}</p></div><ul class=list-group list-group-flush><li class=list-group-item>&#36 {$value[$i]["precio"]}</li></ul><div class=card-body><a href=muestra.php?ID={$value[$i]["ID"]} class=card-link>ver</a><a href=carrito.php?ID={$value[$i]["ID"]} class=card-link>carrito</a></div></div></div >";
                      
                    }

                }


                    }
                    #var_dump($numeros);
                }

?>
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