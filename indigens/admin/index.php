<?php
  require '../scripts/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: index.php');
  }

  conectar();
  $usuarios = getUsuarios();
  desconectar();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href ="../css/style.css">

    <center> <title>Panel de Administración de Permisos</title>
    
  </head>
  
    <div class="barra">
      
    <div  class="mensaje">Gestión de sesiones </div>
   
  </div>
    
   

          
          <h1 style="color:Black;">Bienvenido, <?= $_SESSION['usuario'] ?>.</h1>
          <p>Por favor seleccione una de las opciones del menú.</p>
        </div>
        </div>
      </div>
      </center>

  



  <body>
      
      


    <?php include './menu-superior.php'; ?>
    <?php include './menu-lateral.php'; ?>
        





        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/signin.js"></script>
  </body>
</html>