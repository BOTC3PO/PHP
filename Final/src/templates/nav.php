<nav class="navbar navbar-expand-lg mask-custom bg-light pegaoaltecho">
    <div class="container-fluid">
    <div class=" d-sm-block d-lg-none">
            <a href="carrito.php" style="text-decoration:none;color:black"><img src="src/img/icono6.svg" width="32px" alt=""></a>
        </div>
        <a class="navbar-brand" href="index.php">RE var</a>  
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">indice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categoria
                    </a>
                    <ul class="dropdown-menu">
                    <?php 

        try{
    $conexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $consulta  ="SELECT * FROM categorias";
    $res=$conexion->prepare($consulta);
    $res->execute();
    $pro=$res->fetchAll(PDO::FETCH_ASSOC);

    foreach ($pro as $value ) {

              echo "<li><a class=dropdown-item  href={$value["link"]} >{$value["Nombre"]}</a></li>";
  
      }

    }catch (PDOException $e)
    {
        header('Location:errornav.php');
    }
  
                            ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-block d-xl-block d-xxl-block">
            <a href="admin.php" style="text-decoration:none;color:black"><img src="src/img/admin.svg" width="32px" alt=""></a>
            <a href="carrito.php" style="text-decoration:none;color:black"><img src="src/img/icono6.svg" width="32px" alt=""></a>
        </div>
    </div>
</nav>