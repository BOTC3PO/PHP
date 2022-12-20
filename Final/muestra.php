<?php require ("config.php") ?>
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
    <link rel="shortcut icon" href="src/favicon/favicon.jpg" type="image/x-icon">
    <?php require ("src/templates/link.php"); ?>
    <title>Productos</title>
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

 $categorias32 = array("Pastas","Salsas","Pizzas","Hamburguezas","Japones","Mexicano","Empanadas","Otros","Postres","Locro","Fiesta","Bebidas y tragos" );
$i= (int)$category;

foreach ($pro as $value) {

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
    echo "<h3>{$mensaje}</h3>";

    if ($i==$value["id_Productos"]) {
    ?>
    </div> <div class="h-50 ">
    <?php
    echo "<img src=src/img/{$i}.webp class=a  alt={$value["nombre"]}>";
    ?>
    </div> <div class="col">
    <?php
    echo  "<h4>$ {$value["precio"]}</h4>";
        ?>   
    </div> <div class="col">
     <?php
        if ($value["Promociones"]!="") { 
        echo  "<h4> {$value["Promociones"]}</h4>";
    }

    ?>
    </div>


<?php }}?>


            

</div>

<div class="divcoment">   
<div class="datos_objetos text-center">
<?php
foreach ($pro as $value) {
    if ($i==$value["id_Productos"]) {
    ?>
    <h3  ><?php echo $value[$category]["datos"] ?></h3>
<?php
}}
?>

<a  type="button"  href="carrito.php?ID=<?php echo $_GET['ID']?>" class="btn btn-success w-25">comprar</a>

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

<?php require('src/templates/script.php') ?>
</body>

</html>