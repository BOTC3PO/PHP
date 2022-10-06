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
                             // $data= @file_get_contents('src/DB/categoria.json');
                              //$data=json_decode("$data", true);
                              $data=array (
                                'array' => 
                                array (
                                  0 => 
                                  array (
                                    'categoria' => 'Pastas',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Pastas&n=0',
                                  ),
                                  1 => 
                                  array (
                                    'categoria' => 'Salsas',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Salsas&n=1',
                                  ),
                                  2 => 
                                  array (
                                    'categoria' => 'Pizzas',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Pizzas&n=2',
                                  ),
                                  3 => 
                                  array (
                                    'categoria' => 'Hamburguezas',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Hamburguezas&n=3',
                                  ),
                                  4 => 
                                  array (
                                    'categoria' => 'Japones',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Japones&n=4',
                                  ),
                                  5 => 
                                  array (
                                    'categoria' => 'Mexicano',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Mexicano&n=5',
                                  ),
                                  6 => 
                                  array (
                                    'categoria' => 'Empanadas',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Empanadas&n=6',
                                  ),
                                  7 => 
                                  array (
                                    'categoria' => 'Otros',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Otros&n=7',
                                  ),
                                  8 => 
                                  array (
                                    'categoria' => 'Postres',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Postres&n=8',
                                  ),
                                  9 => 
                                  array (
                                    'categoria' => 'Locro',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Locro&n=9',
                                    'dia' => 
                                    array (
                                      0 => '25-05',
                                      1 => '9-07',
                                    ),
                                  ),
                                  10 => 
                                  array (
                                    'categoria' => 'Fiesta',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Fiesta&n=10',
                                  ),
                                  11 => 
                                  array (
                                    'categoria' => 'Bebidas y tragos',
                                    'subcategoria' => false,
                                    'link' => 'productos.php?id=Bebidasytragos&n=11',
                                  ),
                                ),
                            );
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
                                    echo "<li><a class=dropdown-item  href={$value[$i]["link"]} >{$value[$i]["categoria"]}</a></li>";
                                }
                                $bola=true;      
                              };
                            }
                            ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-block d-xl-block d-xxl-block">
            <a href="carrito.php" style="text-decoration:none;color:black"><img src="src/img/icono6.svg" width="32px" alt=""></a>
        </div>
    </div>
</nav>