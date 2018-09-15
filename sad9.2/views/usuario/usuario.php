
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
        <style type="text/css">

          #img-carro{
           border-radius: 50%; width: 150px; height: 150px; margin: auto;
          }

          @media (max-width: 800px){

            #img-carro{
              width: 80px;
              height: 80px;
            }
          }

        </style>

        <li class="nav-item active d-flex justify-content-center" style="flex-direction: column;">          
          <img id="img-carro" src="assets/img/carrito.jpg" class="img-fluid r-2" >          
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
            <span>Crear</span>
          </a>
          <div class="dropdown-menu dropdown-dark" aria-labelledby="pagesDropdown">
            <a href="index.php?c=usuario&m=viewUser" class="dropdown-item">Usuarios</a><br>
            <a href="index.php?c=ficha&m=viewFile" class="dropdown-item">Fichas</a><br> 
            <a href="index.php?c=programa&m=viewProgram" class="dropdown-item">Programas</a><br> 
            <a href="index.php?c=competencia&m=viewCompetition" class="dropdown-item">Competencias</a><br>
            <a href="index.php?c=trimestre&m=viewTrimester" class="dropdown-item">Trimestres</a><br>
            <a href="index.php?c=jornada&m=viewJourneys" class="dropdown-item">Jornadas</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?c=desercion&m=registerDesert ">
            <i class="fas fa-fw fa-exclamation-circle"></i>
            <span>Iniciar proceso</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?c=Emails&m=viewFormEmail">
            <i class="fas fa-fw fa-exclamation-circle"></i>
            <span>mails</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fab fa-tripadvisor"></i>
            <span>Justificación</span>
          </a>
          <div class="dropdown-menu dropdown-dark" aria-labelledby="pagesDropdown">
            <a href="#" class="dropdown-item">Justificaciones</a><br>
            <a href="#" class="dropdown-item">Justificar</a><br> 
          </div>
        </li>
        

            </div>
             </div>