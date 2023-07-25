<html>
<?php
  require './scripts/funciones.php';
  conectar();
 

  if(! haIniciadoSesion() )
  {
    header('Location: index.php');
  }

  $usuarios = getUsuarios();
  

  $sql = "SELECT  usuario, email, clave, nombre, a_paterno, a_materno, num_tel, id_nivel, foto, estado FROM usuarios WHERE usuario =   '{$_SESSION['usuario']}' ";
	
  $result=mysqli_query($conexion,$sql);

		 if ($result) {
			// Obtener los datos de la imagen
			$fila = mysqli_fetch_assoc($result);
			$imagen = $fila['foto'];

		
		} else {
			echo "Error en la consulta: " . mysqli_error($conexion);
		}
 
  desconectar();

 

  
?>   
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Editar Perfil</title>
<link rel="stylesheet" href ="css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styles.css">

<!-- contenedor de estilo, lo meti aqui para no hacer otro xd -->
<style type="text/css">
    	body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}

.file-select{
  width:6rem;
  height: 2.4rem;
}


.file-select::before {
  background-color: #007bff;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 3px;
  content: 'Subir'; /* testo por defecto */
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  
}

.file-select input[type="file"] {
  opacity: 0;
  width: 200px;
  height: 32px;
  display: inline-block;

  
}

#src-file1::before {
  content: 'Seleccionar Archivo 1';
}
    </style>
</head>

<!-- contenedor de barra de navegacion -->
<body>

<div class ="container-fluid bg-primary">
  <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
       <a href="panelUsuario.php">
                    <img style="width: 80px" src="./img/logofinal.png"  alt="Logotipo Grupo Aleman">
                </a>
    <a class="navbar-brand" href="#">Supremo consejo nacional indigena</a>
    <br></br><a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Perfil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item"  href="editar-perfil.php" >Editar perfil</a></li>
         
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cerrar-sesion.php">Cerrar sesion</a></li>
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
<br></br>

<!-- contenedor de imagen, nombre ect -->
<div class="container">
<div class="main-body">
<div class="row">
<div class="col-lg-4">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src=" <?php echo $imagen ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="140" height="140">
<div class="mt-3">
<h4><?= $_SESSION['usuario'] ?>.</h4>
<p class="text-secondary mb-1">Full Stack Developer</p>
<p class="text-muted font-size-sm">Ixtapaluca, Edo Mex.</p>
<form action="guardar-foto.php" method="post" enctype="multipart/form-data">
      <input class="btn btn-primary file-select" type="file" name="foto_perfil" accept="image/*" required>
      <input class="btn btn-primary" type="submit" value="Guardar foto de perfil">
</form>

</div>
</div>
<hr class="my-4">
<ul class="list-group list-group-flush">
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
<span class="text-secondary"> </span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
<span class="text-secondary"> </span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
<span class="text-secondary"> </span>
</li>
</ul>
</div>
</div>
</div>

<!-- contenedor para agregar datos personales -->

<div class="col-lg-8">
<form  method="POST" name="form-work" action="guardar-editarperfil.php">
<div class="card">
<div class="card-body">
<div class="row mb-3">
<div class="col-sm-3">

<h6 class="mb-0">Nombre</h6>
</div>
<div class="col-sm-9 text-secondary">
<input name="nombre" class="form-control" placeholder="" type="text" required>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Apellido Paterno</h6>
</div>
<div class="col-sm-9 text-secondary">
<input name="a_paterno" class="form-control" placeholder="" type="text" required>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Apellido Materno</h6>
</div>
<div class="col-sm-9 text-secondary">
<input name="a_materno" class="form-control" placeholder="" type="text" required>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Telefono</h6>
</div>
<div class="col-sm-9 text-secondary">
<input name="num_tel" class="form-control" placeholder="ejemplo: 5555555555" type="text" required>
</div>
</div>

<!-- contenedor de listas de estado -->
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Estado</h6>

</div>
<div class="col-sm-9 text-secondary">
<select name="estado">
      <option value="no">Seleccione el estado de donde es..</option>
      <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="CDMX">Ciudad de México</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
  </select>

</div>
</div>
<div class="row">
<div class="col-sm-3"></div>

<!-- contenedor de boton para guardar datos -->
<div class="col-sm-9 text-secondary">
<button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
<a href="../php/editar-perfil.php">
</div>
</div>
</div>
</div>
</form>


<!-- contenedor de estatus este aun esta pendiente por si se queda -->
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<h5 class="d-flex align-items-center mb-3">Project Status</h5>
<p>Web Design</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Website Markup</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>One Page</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Mobile Template</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Backend API</p>
<div class="progress" style="height: 5px">
<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>

</body>
</html>