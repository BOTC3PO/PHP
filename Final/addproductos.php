<?php 

require_once("config.php");
require_once('src/templates/funciones_input.php');
require_once('src/templates/funciones_consultas.php');
$max=nexid($conexion);


$nombre = test_input( $_POST['nombre'] ?? null );
$precio = test_input( $_POST['precio'] ?? null );
$categoria_id = test_input( $_POST['categoria_id'] ?? null );
$dat = test_input( $_POST['descripcion'] ?? null );
$promo = test_input( $_POST['promo'] ?? null );
$imagen = $_FILES['imagen'] ?? null;
$finaldestination='src/img/';
$errores = array();


  
//Verificamos si el usuario envió información.
if( isset($_POST['submit']) )
{

    if( empty($nombre) ){
        array_push($errores, 'Usted debe ingresar un nombre.');
    }

    if( !filter_var($precio, FILTER_VALIDATE_FLOAT) ){
        array_push($errores, 'Usted debe un precio con un formato correcto.');
    }

    if( is_null($categoria_id) ){
        array_push($errores, 'Usted debe ingresar una categoría.');
    }

    if( empty($dat) ){
        array_push($errores, 'Usted debe ingresar una descripción.');
    }

    if( $imagen['error'] == '0' ){

        $info = pathinfo($imagen['name']);
        
        //Extensiones permitidas.
        $extensiones_permitidas = array( 'png' ,'webp');


        if( !in_array( $info['extension'], $extensiones_permitidas ) )
        {
            array_push($errores, 'Usted debe cargar un archivo con formato webp o png.');
        }

    }else{
        array_push($errores, 'Usted debe cargar una imagen.');
    }

    //Está validado.
    if( count($errores) == 0 )
    {
        $nn;
        foreach ($max as  $value) {
            $nn=$value["MAX(id_Productos)"];
        }
        $nn++;
       $daf= pathinfo($imagen['name']);
       // $imagen_path = 'src/temp/'. $imagen['name'];
        //move_uploaded_file( $imagen['tmp_name'], $imagen_path );   
        //list($base,$extension) = explode('.',$imagen['name']);
        $imagen_path = 'src/img/' . $nn.".".'webp';
        move_uploaded_file( $imagen['tmp_name'], $imagen_path );   
    
          
       
        addProducto($conexion, array(
            'nombre' => $nombre,
            'descripcion' => $dat,
            'categoria_id' => $categoria_id,
            'datos' => $dat,
            'precio' => $precio,
            'Promociones' => $promo
        ));

        header('Location: admin.php');
 
    }

}

$categorias = getCategorias($conexion);

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <?php require ("src/templates/link.php"); ?>
    <link rel="shortcut icon" href="src/favicon/favicon.jpg" type="image/x-icon">
</head>

<body>
    <?php
         require('src/templates/navadmin.php');
?>



    <main>
        <div class="container-fluid px-4">

            <h1 class="mt-4"> Producto nuevo </h1>

            <div class="card mb-4 w-100 h-100">

                <div class="card-header">
                    <i class="fas fa-plus me-1"></i>
                </div>

                <div class="card-body">

                    <ul>
                        <?php foreach($errores as $error): ?>
                        <li class="text text-danger"> <?php echo $error ?> </li>
                        <?php endforeach ?>
                    </ul>

                    <form class="m-3" method="post" action="addproductos.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nombre" class="form-label"> Nombre </label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Ingrese el nombre del producto" value="<?php echo $nombre ?>">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label"> Precio </label>
                            <input type="number" class="form-control" id="precio" name="precio"
                                placeholder="Ingrese el precio del producto" value="<?php echo $precio ?>">
                        </div>
                        <div class="mb-3">
                            <label for="categoria_id" class="form-label"> Categoría </label>
                            <select class="form-control" name="categoria_id" id="categoria_id">
                                <option value=""> Seleccione la categoría </option>
                                <?php foreach($categorias as $cat): ?>
                                <option <?php if($cat['idCategorias'] == $categoria_id): ?> selected <?php endif ?>
                                    value="<?php echo $cat['idCategorias'] ?>"> <?php echo $cat['Nombre'] ?> </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label"> Promociones </label>
                            <input type="text" class="form-control" id="promo" name="promo"
                                placeholder="Ingrese la promocion" value="<?php echo $promo ?>">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label"> Descripción </label>
                            <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"
                                placeholder="Ingrese la descripción del producto"><?php echo $dat ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label"> Imagen </label>
                            <input type="file" class="form-control" id="imagen" name="imagen">
                        </div>
                        <button type="submit" class="btn btn-success" name="submit"> Agregar </button>
                        <a class="btn btn-danger" href="<?php echo BASE_URL ?>addproductos.php"> Cancelar </a>
                    </form>
                </div>

            </div>

        </div>
    </main>
    <?php require('src/templates/foot.php') ?>
    </div>
    </div>
    <?php require('src/templates/script.php'); ?>
</body>

</html>