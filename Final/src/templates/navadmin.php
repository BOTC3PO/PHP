<nav class="navbar navbar-expand-lg navbar-dark bg-dark pegaoaltecho">
  <div class="container-fluid justify-content-evenly-lg">
    <a class="navbar-brand" href="Index.php">RE var</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="Index.php">Volver</a>
        <a class="nav-link" aria-current="page" href="admin.php">Ver productos</a>
        <a class="nav-link" href="addproductos.php">Agregar Productos</a>
        
      </div>  
    </div>
    <div class="d-flex d-none d-lg-block">
        <form class="d-flex" action="admin.php" method="post">
        <input class="form-control me-2" name="busqueda">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
       </div>
  </div>
</nav>