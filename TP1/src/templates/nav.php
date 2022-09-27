<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
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
                              foreach ($data as $value ) {
                              for ($i=0; $i < count($value); $i++) {       
                                #{$value[$i]["link"]}                         
                                       echo "<li><a class=dropdown-item  href=# >{$value[$i]["categoria"]}</a></li>";            
                              };
                            }
                            ?>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>