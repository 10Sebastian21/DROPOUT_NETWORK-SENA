
    <nav class="navbar navbar-expand navbar-dark  static-top bg-info text-white">

      <a class="navbar-brand mr-1 text-white">SSAD</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>

      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">campana</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">otra accion</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Mensajes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">otra accion</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a href="#" class="dropdown-item">Actualizar datos</a>
            <div class="dropdown-divider"></div>
            <a href="index.php?c=inicio&m=closeSesion" class="dropdown-item">Cerrar</a>
          </div>
        </li>
      </ul>

    </nav>
<div class="row">
<div class="col-2"> 
 <div id="wrapper justify-content-center ">

      <ul class="sidebar navbar-nav bg-dark">

        <li class="nav-item active">
          <img src="assets/img/carrito.jpg" class="img-fluid r-2" style="border-radius: 20%;">
            <span><a class="nav-link text-center"><?php echo $_SESSION['usuario'][1];?></a></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">
            <i class="fas fa-fw fa-home"></i>
            <span>Inicio</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-wrench"></i>
            <span>Mis Fichas</span>
          </a>
          <div class="dropdown-menu dropdown-dark" aria-labelledby="pagesDropdown">
            <a href="#" class="dropdown-item">ficha 1</a><br> 
            <a href="#" class="dropdown-item">ficha 2</a><br> 
            <a href="#" class="dropdown-item">ficha 3</a><br>
            <a href="#" class="dropdown-item">ficha 4</a><br>
            <a href="#" class="dropdown-item">ficha 5</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?c=desercion&m=viewDesert ">
            <i class="fas fa-fw fa-exclamation-circle"></i>
            <span>Iniciar proceso</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fab fa-tripadvisor"></i>
            <span>Justificación</span>
          </a>
          <div class="dropdown-menu dropdown-dark" aria-labelledby="pagesDropdown">
            <a href="#" class="dropdown-item">Justificaciones</a><br>          </div>
        </li>
        

            </div>
             </div>