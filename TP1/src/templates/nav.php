<nav class="navbar navbar-expand-lg mask-custom bg-light pegaoaltecho">
    <div class="container-fluid">
    <div class=" d-sm-block d-lg-none">
            <a href="#" style="text-decoration:none;color:black">carrito</a>
        </div>
        <a class="navbar-brand" href="#">RE var</a>  
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">indice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categoria
                    </a>
                    <ul class="dropdown-menu">
                        <?php 
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
            <a href="#" style="text-decoration:none;color:black">carrito</a>
        </div>
    </div>
</nav>