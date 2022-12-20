<?php require("config.php") ?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procuctos</title>
    <link href="src/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" type="text/css">
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
        <div
            class="row row-cols-2 row-cols-md-3 row-cols-lg-4 justify-content-around justify-content-lg-center justify-content-xxl-center indexmen">
            <?php
    $category = $_GET['id'];
    $nand=$_GET['n'];
    $disponibles = array("Pastas","Salsas","Pizzas","Hamburguezas","Japones","Mexicano","Empanadas","Otros","Postres","Locro","Fiesta","Bebidasytragos" );    
    $nand=intval($nand);
    if (!in_array($category,$disponibles)) {
   

        header("Location: index.php");
    }else 
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

            
            $date_now = date('d-m');
            $bolian=false;
                foreach ($pro as $value) {
                   
                        
                       


               
                    $categorias32 = array("Pastas","Salsas","Pizzas","Hamburguezas","Japones","Mexicano","Empanadas","Otros","Postres","Locro","Fiesta","Bebidas y tragos" );
 
                            #var_dump($value);
                               
                                if ( intval($value['Categorias_idCategorias'])==intval($nand)) {
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
                                }

                    
                    #var_dump($numeros);
                }

?>
        </div>
    </div>



    <?php
    require('src/templates/foot.php');
?>





    <?php require('src/templates/script.php') ?>
</body>

</html>