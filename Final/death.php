<?php

require_once("config.php");
require_once('src/templates/funciones_input.php');
require_once('src/templates/funciones_consultas.php');

$id = test_input( $_REQUEST['id'] ?? null );


deleteProducto($conexion, $id);

header('Location: admin.php');

?>