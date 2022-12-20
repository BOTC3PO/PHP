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
<body onload="setTimeout(cargarprod(),3000)">
<?php
require('src/templates/nav.php');
?>

<div class="container text-center mb-5">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 justify-content-around justify-content-lg-center justify-content-xxl-center indexmen">
        <?php

try{
    $conexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $consulta  ="SELECT * FROM productos";
    $res=$conexion->prepare($consulta);
    $res->execute();
    $pro=$res->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e)
    {
        header('Location:error.php');
    }
   
   
$disponibles = array("Pastas","Salsas","Pizzas","Hamburguezas","Japones","Mexicano","Empanadas","Otros","Postres","Locro","Fiesta","Bebidasytragos" );    
//$nand=intval($nand);
 $numeros = array(); 
  $bolian = true;
  $date_now = date('d-m');
for ($i = 0; $i < 8; $i++) {
    do {
        $bolian = true;
        $rando = rand(0, count($pro)-1);
        # echo $rando ." \n";
        if ($i == 0) {
            array_push($numeros, $rando);
        }

        if (!$i == 0) {
            if (in_array($rando, $numeros)) {
               $bolian = false;
            } else {
                array_push($numeros, $rando);
            }
        }


    } while (!$bolian);
    }
        

        #var_dump($pro);
        foreach ($pro as $value) {
            
                //$boliano = (in_array($date_now, $value[81]["dia"]));
                #echo $boliano;
               /* if ($rando != 81 and $boliano) {
                    $bolian = true;
                } else {
                    if ($rando == 81) {
                        $bolian = false;
                        $i--;
                    } else {
                        $bolian = true;
                    }
                }*/
            

            $z=true;

            for ($i=0; $i < 8; $i++) {  
            #echo $numeros[$i] . "    ";
            $t = $numeros[$i]==$value["id_Productos"];
            if($t&&$z) {
                $z=false;
            $categorias32 = array("Pastas","Salsas","Pizzas","Hamburguezas","Japones","Mexicano","Empanadas","Otros","Postres","Locro","Fiesta","Bebidas y tragos" );
                        switch ($categorias32[$value['Categorias_idCategorias']]) {
                            case 'Pastas':
                                $mensaje = "Plato de ". $value["nombre"];
                                break;
                            case 'Salsas':
                                $mensaje = "Salsa ". $value["nombre"];
                                break;
                            case 'Pizzas':
                                $mensaje = "Pizza  ". $value["nombre"];
                                break;
                            case 'Hamburguezas':
                                $mensaje = "Hamburgueza ". $value["nombre"];
                                break; 
                            case 'Japones':
                                $mensaje =  $value["nombre"];
                                break;
                            case 'Mexicano':
                              $mensaje =  $value["nombre"];
                               break; 
                            case 'Empanadas':
                               $mensaje = "Empanada ". $value["nombre"];
                                break;    
                            case 'Otros':
                                $mensaje =  $value["nombre"];
                                break; 
                            case 'Postres':
                                $mensaje =  $value["nombre"];
                                break; 
                            case 'locro':
                                $mensaje = "Plato de ". $value["nombre"];
                                break;       
                            case 'Fiesta':
                                $mensaje =  $value["nombre"];
                                break;  
                            case 'Bebidas y tragos':
                                $mensaje =  $value["nombre"];
                                break;                                  
                      }
                   

                      echo "<div class=col><div class=card style=width:18rem><img src=src/img/{$value['id_Productos']}.webp class=a id=a{$value['id_Productos']} alt={$value["nombre"]}><div class=texto><h5 class=card-title>{$mensaje}</h5><p class=card-text>{$value["datos"]}</p></div><ul class=list-group list-group-flush><li class=list-group-item>&#36 {$value["precio"]}</li></ul><div class=card-body><a href=muestra.php?ID={$value['id_Productos']} class=card-link>ver</a><a href=carrito.php?ID={$value['id_Productos']} class=card-link>carrito</a></div></div></div >";
                    
            
            #var_dump($numeros);
        }
    }
}


        # 
        ?>

    </div>
</div>
<div class="d-flex  justify-content-center">
    <a href="paginas.php" class="btn btn-primary">
            ver mas

         </a>
</div>


<?php
require('src/templates/foot.php');
?>
<?php require('src/templates/script.php') ?>

</body>

</html>