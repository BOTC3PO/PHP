<?php 
require("config.php");
require_once('src/templates/funciones_consultas.php');

$productos = getProductos($conexion);
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
         $i=$_POST['busqueda'] ?? null;
?>
    <div class="pantallamin">
        <h1 class="mt-4">Lista de productos </h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="w-25"> Nombre </th>
                    <th scope="col" class="w-25"> Precio </th>
                    <th scope="col" class="w-25"> Categoría </th>
                    <th scope="col" class="w-25"> </th>
                </tr>
            </thead>
            <tbody>

                
                <?php
                $noresol=true;
                    if (isset($_POST['busqueda'])&&$i!=null) {
                        foreach ($productos as $prod): 
                        if (strtolower($i)==strtolower($prod['nombre'])||strtolower($i)==strtolower($prod['id_Productos'])||strtolower($i)==strtolower($prod['Nombre'])||((int)$i)==((int)$prod['precio'])||strpos(strtolower($prod['Nombre']),strtolower($i))||strpos(strtolower($prod['nombre']),strtolower($i))) {
                            $noresol=false; 
                       
                    ?>
                    <tr class="lista_ord">
                    <td> <?php echo $prod['nombre'] ?> </td>
                    <td> $<?php echo number_format($prod['precio'], 2, ',', '.') ?> </td>
                    <td> <?php echo $prod['Nombre'] ?> </td>
                    <td class="d-flex ">
                        <a target="_blank" href="<?php echo BASE_URL ."src/img/".$prod['id_Productos'].".webp" ?>"
                            class="text text-primary btn-image m-1  svg_rtu"
                            style="width: 20px !important;height: 20px !important;" title="Ver imagen">
                            <i class="fas fa-image fa-lg"><svg class="svg-inline--fa fa-image fa-lg ssg"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M447.1 32h-384C28.64 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM111.1 96c26.51 0 48 21.49 48 48S138.5 192 111.1 192s-48-21.49-48-48S85.48 96 111.1 96zM446.1 407.6C443.3 412.8 437.9 416 432 416H82.01c-6.021 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.334-16.68l70-96C142.1 290.4 146.9 288 152 288s9.916 2.441 12.93 6.574l32.46 44.51l93.3-139.1C293.7 194.7 298.7 192 304 192s10.35 2.672 13.31 7.125l128 192C448.6 396 448.9 402.3 446.1 407.6z">
                                    </path>
                                </svg></i>
                        </a>
                        <a href="<?php echo BASE_URL ?>update-producto.php?id=<?php echo $prod['id_Productos'] ?>"
                            class="text text-success svg_rtu m-1"
                            style="width: 20px !important;height: 20px !important;" title="Editar producto">
                            <i class="fas fa-edit fa-lg"><svg class="svg-inline--fa fa-pen-to-square fa-lg ssg"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                    </path>
                                </svg></i>
                        </a>
                        <a href="<?php echo BASE_URL ?>delete-producto.php?id=<?php echo $prod['id_Productos'] ?>"
                            class="text text-danger btn-delete svg_rtu m-1"
                            style="width: 20px !important;height: 20px !important;" title="Eliminar producto">
                            <i class="fas fa-trash fa-lg"><svg class="svg-inline--fa fa-trash fa-lg ssg"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                    </path>
                                </svg></i>
                        </a>
                    </td>
                </tr>
                     

                   <?php } endforeach; 
                   
                   
                   ?>
                   <?php
                     }else{
                  $noresol=false;
                 foreach($productos as $prod):
                  ?>
                    
                <tr class="lista_ord">
                    <td> <?php echo $prod['nombre'] ?> </td>
                    <td> $<?php echo number_format($prod['precio'], 2, ',', '.') ?> </td>
                    <td> <?php echo $prod['Nombre'] ?> </td>
                    <td class="d-flex ">
                        <a target="_blank" href="<?php echo BASE_URL ."src/img/".$prod['id_Productos'].".webp" ?>"
                            class="text text-primary btn-image m-1  svg_rtu"
                            style="width: 20px !important;height: 20px !important;" title="Ver imagen">
                            <i class="fas fa-image fa-lg"><svg class="svg-inline--fa fa-image fa-lg ssg"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M447.1 32h-384C28.64 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM111.1 96c26.51 0 48 21.49 48 48S138.5 192 111.1 192s-48-21.49-48-48S85.48 96 111.1 96zM446.1 407.6C443.3 412.8 437.9 416 432 416H82.01c-6.021 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.334-16.68l70-96C142.1 290.4 146.9 288 152 288s9.916 2.441 12.93 6.574l32.46 44.51l93.3-139.1C293.7 194.7 298.7 192 304 192s10.35 2.672 13.31 7.125l128 192C448.6 396 448.9 402.3 446.1 407.6z">
                                    </path>
                                </svg></i>
                        </a>
                        <a href="<?php echo BASE_URL ?>actualizarprod.php?id=<?php echo $prod['id_Productos'] ?>"
                            class="text text-success svg_rtu m-1"
                            style="width: 20px !important;height: 20px !important;" title="Editar producto">
                            <i class="fas fa-edit fa-lg"><svg class="svg-inline--fa fa-pen-to-square fa-lg ssg"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                    </path>
                                </svg></i>
                        </a>
                        <a href="<?php echo BASE_URL ?>death.php?id=<?php echo $prod['id_Productos'] ?>"
                            class="text text-danger btn-delete svg_rtu m-1"
                            style="width: 20px !important;height: 20px !important;" title="Eliminar producto">
                            <i class="fas fa-trash fa-lg"><svg class="svg-inline--fa fa-trash fa-lg ssg"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                    </path>
                                </svg></i>
                        </a>
                    </td>
                </tr>
    
                <?php endforeach?>
                <?php }

        if ($noresol) {
                 echo " <tr><td colspan=4><h2>no se encontraron resultados</h2></td></tr>";
        }
               
                ?>
            </tbody>
        </table>
    </div>

      


    <?php  
    
         require('src/templates/foot.php');
    ?>

    <?php require('src/templates/script.php'); ?>

</body>

</html>