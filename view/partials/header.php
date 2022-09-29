
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
  <!-- dark light -->
  <div class="container-fluid">
    <!-- <img style="padding:10px;width:200px; height:100%" class="header_company_logo" src="../../../ing_soft/view/images/heritech/ht_logo.png" alt="heritech_main_logo"> -->
    <!-- <a class="navbar-brand" href="index.php?p=inicio"> HeriTech </a> -->
    <a href="index.php" class="col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img style="width:150px" class="img-fluid" src="view/public/images/heritech/ht_logo.png" alt=""> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tareas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php?p=Tarea1">Tarea1</a></li>
            <li><a class="dropdown-item" href="index.php?p=Tarea2">Tarea2</a></li>
            <li><a class="dropdown-item" href="index.php?p=Tarea3">Tarea3</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php?p=js_testing">js</a></li>
            <li><a class="dropdown-item" href="index.php?p=/modules/databases/index">databases</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proyectos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item" href="evaluaciones/test1/test_1/index.html">CINEMARK</a></li>
            <li><a class="dropdown-item" href="view/partials/modules/simplepage/index.php">INTERACCIONES</a></li>
            <li><a class="dropdown-item" href="view/partials/modules/bootstrap/index.html">Bootstrap</a></li>
            <li><a class="dropdown-item" href="evaluaciones/test2/index.html">Twitter</a></li>

          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?p=contactos">Contactos</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button onclick="helloWorld()" class="btn btn-outline-dark" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

    