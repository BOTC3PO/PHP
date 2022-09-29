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


    <title>indice</title>
    <link href="src/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"
        type="text/css">
    <link rel="stylesheet" href="src/css/style.css" type="text/css">

</head>

<body>
    <?php
         require('src/templates/nav.php');
    ?>

    <!--banner-->

    <div class="container text-center">
        <div class="row row-cols-2 row-cols-lg-4">
            <?php
                $pro= @file_get_contents('src/DB/productos.json');
                $pro=json_decode($pro, true);
                $date_now = date('d-m');
                $numeros=array();
                $bolian=true;
                #var_dump($pro);
                foreach ($pro as $value) {
                    for ($i=0; $i < 8; $i++) { 
                    do {
                    $bolian=true ;
                    $rando=rand(0,100);
                    # echo $rando ." \n";
                    if (!$i==0) {
                             if (in_array($rando,$numeros)) {
                                 $bolian=false;
                             }else {
                                 array_push($numeros,$rando);
                             }
                    }
               
                    } while (!$bolian);
                    $boliano=(in_array($date_now,$value[81]["dia"]));
                    echo $boliano;
                    if ($rando!=81 and $boliano ) {
                        $bolian=true;
                    }else {
                        if ($rando==81) {
                            $bolian=false;
                            $i--;
                        }else {
                            $bolian=true;
                        }


                    }
                    
                    if ($bolian) {
                    
                        switch ($value[$rando]["categoria"]) {
                            case 'Pasta':
                                $mensaje = "plato de ". $value[$rando]["nombre"];
                                break;
                            case 'Salsas':
                                $mensaje = "Salsa ". $value[$rando]["nombre"];
                                break;
                            case 'Pizzas':
                                $mensaje = "Pizza  ". $value[$rando]["nombre"];
                                break;
                            case 'Hamburguezas':
                                $mensaje = "Hamburguezas ". $value[$rando]["nombre"];
                                break; 
                            case 'Japones':
                                $mensaje =  $value[$rando]["nombre"];
                                break;
                            case 'Mexicano':
                              $mensaje =  $value[$rando]["nombre"];
                               break; 
                            case 'Empanadas':
                               $mensaje = "Empanada ". $value[$rando]["nombre"];
                                break;    
                            case 'Otros':
                                $mensaje =  $value[$rando]["nombre"];
                                break; 
                            case 'Postres':
                                $mensaje =  $value[$rando]["nombre"];
                                break; 
                            case 'locro':
                                $mensaje = "plato de ". $value[$rando]["nombre"];
                                break;       
                            case 'Fiesta':
                                $mensaje =  $value[$rando]["nombre"];
                                break;  
                            case 'Bebidas y tragos':
                                $mensaje =  $value[$rando]["nombre"];
                                break;                                  
                        }
                    
                     #   {$value[$rando]["categoria"]} {$value[$rando]["nombre"]};
                        echo   "<div class=col><div class=p-3 border bg-light><img src={$rando}.webp   alt={$value[$rando]["nombre"]} ><p>$mensaje</p></div></div >";
                    }
                    }
                    #var_dump($numeros);
                }

                
                

              # 
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