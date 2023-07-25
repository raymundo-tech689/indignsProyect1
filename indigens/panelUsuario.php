<html>
<?php
  require 'scripts/funciones.php';
  if(! haIniciadoSesion() )
  {
  	header('Location: index.html');
  }
  conectar();
  $categorias = getCategoriasPorUser();
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <title>Bienvenido Usuario</title>
    <link rel="stylesheet" href ="css/bootstrap.min.css">
</head>

<body>

  <div class ="container-fluid bg-primary">
  <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
      <a href="index2.html">
                    <img style="width: 80px" src="./img/logofinal.png"  alt="Logotipo Grupo Aleman">
                </a>
    <a class="navbar-brand" href="#">Supremo Consejo Indígena Nacional</a>
    <br></br><a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tipos de participantes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Perfil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="editar-perfil.php">Editar perfil</a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
          </div>
</div>

<div class="container mt-5">
  <div class="row justify-content-center">
<center> <h1 style="color:Black;">Bienvenido, <?= $_SESSION['usuario'] ?>.</h1></center>
<center><p class="lead" style="color:#a7709b">Nivel de usuario: <?php $idnivel2 = nivel_id(); echo "$idnivel2"; ?> <br><br></p>
</div>
</div>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/uno.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/dos.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                
            </div>
        </div>
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>