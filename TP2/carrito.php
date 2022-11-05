<?php require ("config.php") ?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>indice</title>
    <link rel="shortcut icon" href="src/favicon/favicon.jpg" type="image/x-icon">
    <?php require ("src/templates/link.php"); ?>

</head>

<body>
    <?php
         require('src/templates/nav.php');
    ?>
<div class="divex">
<ol class="list-group ">
<?php
$dato=$_GET['ID'] ?? null ;

$archivo = file_get_contents('src/DB/carrito.json');
// var_dump($archivo);
 require_once('src/templates/funciones_input.php');
 require_once('src/templates/funciones_json.php');


 $lista = getJson('src/DB/carrito.json');

 
     array_unshift($lista, array(
         'ID' => $dato
     ));

     if (!$dato==null) {
         saveJson('src/DB/carrito.json', $lista);
     }
    


    $total=0;
    $pro= @file_get_contents('src/DB/productos.json');
    $pro=json_decode($pro, true);
    $pro2= @file_get_contents('src/DB/carrito.json');
    $pro2=json_decode($pro2, true);
    $caontai=count($pro2);
    foreach ($pro2 as $devaluated) {
        foreach ($pro as $value) {
       for ($i=0; $i < $caontai ; $i++) { 
        $aux=$pro2[$i]["ID"];
        switch ($value[$aux]["categoria"]) {
            case 'Pastas':
                $mensaje = "Plato de ". $value[$aux]["nombre"];
                break;
            case 'Salsas':
                $mensaje = "Salsa ". $value[$aux]["nombre"];
                break;
            case 'Pizzas':
                $mensaje = "Pizza  ". $value[$aux]["nombre"];
                break;
            case 'Hamburguezas':
                $mensaje = "Hamburgueza ". $value[$aux]["nombre"];
                break; 
            case 'Japones':
                $mensaje =  $value[$aux]["nombre"];
                break;
            case 'Mexicano':
              $mensaje =  $value[$aux]["nombre"];
               break; 
            case 'Empanadas':
               $mensaje = "Empanada ". $value[$aux]["nombre"];
                break;    
            case 'Otros':
                $mensaje =  $value[$aux]["nombre"];
                break; 
            case 'Postres':
                $mensaje =  $value[$aux]["nombre"];
                break; 
            case 'locro':
                $mensaje = "Plato de ". $value[$aux]["nombre"];
                break;       
            case 'Fiesta':
                $mensaje =  $value[$aux]["nombre"];
                break;  
            case 'Bebidas y tragos':
                $mensaje =  $value[$aux]["nombre"];
                break;                                  
      }
    
?>




  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <?php echo $mensaje ?>
    </div>
    <span class="badge text-info rounded-pill">$<?php 
    
    //var_dump($aux);
    echo $value[$aux]["precio"]; ?></span>
  </li>
  
  <?php
   // var_dump($mensaje);
    $total=$total+$value[$aux]["precio"];
}
$caontai=0;
}} ?>
</ol>
</div><div class="divex2">
<ol class="list-group ">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Total</div>
      sin descuentos
    </div>
    <span class="badge text-info  rounded-pill">$<?php
    echo $total
    ?></span>


  </li>
</ol>
</div>
<div class="text-center mb-5 mt-4">



<a type="button"  href="#" class="btn btn-success">comprar</a>
<a type="button" href="index.php" class="btn btn-light">volver a la tienda</a>
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