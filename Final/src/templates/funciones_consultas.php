<?php

try{
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: error.php');
}

function getCategorias(PDO $conexion)
{
    $consulta = $conexion->prepare('
    SELECT * FROM categorias
    ');
    $consulta->execute();
    $categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $categorias;
}

function addProducto(PDO $conexion, $data)
{
    $ID=nexid($conexion);
    $IDs=null;
    foreach ($ID as  $value) {
        $IDs=$value["MAX(id_Productos)"];
    }
    $IDs++;
    $consulta = $conexion->prepare('
        INSERT INTO productos( Categorias_idCategorias, nombre,id_Productos, datos, precio,Promociones  )
        VALUES(:Categorias_idCategorias, :nombre,:id_Productos, :datos, :precio,:Promociones)
    ');
    var_dump($data);

    $consulta->bindValue(':nombre', $data['nombre']);
    $consulta->bindValue(':datos', $data['datos']);
    $consulta->bindValue(':precio', $data['precio']);
    $consulta->bindValue(':Promociones', $data['Promociones']);
    $consulta->bindValue(':Categorias_idCategorias', $data['categoria_id']);
    $consulta->bindValue(':id_Productos', $IDs);
    $consulta->execute();
}

function getProductos(PDO $conexion)
{
    $consulta = $conexion->prepare('
    SELECT * FROM categorias,productos WHERE productos.Categorias_idCategorias=categorias.idCategorias;
    ');
    $consulta->execute();
    $productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $productos;
}

function nexid(PDO $conexion){
    $consulta = $conexion->prepare('
    SELECT MAX(id_Productos) FROM `productos`;
    ');
    $consulta->execute();
    $productos = $consulta->fetchAll(PDO::FETCH_ASSOC);

  

    return $productos;
}



function getProductoById(PDO $conexion, $id)
{
    $consulta = $conexion->prepare('
    SELECT * FROM `productos` WHERE id_Productos = :id ;
    ');
    $consulta->bindValue(':id', $id);
    $consulta->execute();
    $producto = $consulta->fetch(PDO::FETCH_ASSOC);
    return $producto;
}

function updateProducto(PDO $conexion, $id, $data)
{
    var_dump($id);
    $consulta = $conexion->prepare('
        UPDATE productos
        SET
            nombre = :nombre,
            datos = :datos,
            precio = :precio,
            Categorias_idCategorias = :categoria_id,
            Promociones = :Promociones
        WHERE id_Productos = :id
    ');
    $consulta->bindValue(':nombre', $data['nombre']);
    $consulta->bindValue(':datos', $data['datos']);
    $consulta->bindValue(':precio', $data['precio']);
    $consulta->bindValue(':categoria_id', $data['categoria_id']);
    $consulta->bindValue(':Promociones', $data['Promociones']);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}

function deleteProducto(PDO $conexion, $id)
{
    $consulta = $conexion->prepare('
        DELETE FROM productos WHERE id_Productos = :id
    ');
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}

?>