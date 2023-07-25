<?php
  require '../scripts/funciones.php';
  // Validación de la sesión como administrador:
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: index.php');
  }
  // Verificación del parámetro GET:
  if( isset($_GET['usuario']) )
    $usuario = $_GET['usuario'];
  else header('Location: index.php');
  // Captura de las categorías:
  conectar();
  $categorias = getTodasCategorias();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administración</title>

   

   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes"> 
    
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/pages/signin.css" rel="stylesheet" type="text/css">


  <link href="../css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/probar.min.css">





    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <?php include 'menu-superior.php'; ?>

    <div class="container-fluid">
      <div class="row">
        <?php include 'menu-lateral.php'; ?>

          <h1 class="sub-header">Modificando permisos de acceso</h1>
          <h4>Se están modificando los permisos para el líder:</h4> 
 <div class="col-sm-9 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">Edición de permisos</h3></div>
              <div class="panel-body">
                <form action="../scripts/actualizar-permisos.php" method="POST">
                  <div class="form-group">
                    <label for="txtUsuario">Usuario</label>
                    <input type="text" class="form-control" name="txtUsuario" id="txtUsuario" value="<?= $usuario ?>" readonly>
                  </div>
        <?php foreach( $categorias as $categoria ): ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="categoria<?= $categoria[0] ?>" <?php if(tienePermiso($usuario, $categoria[0])) echo "checked" ?>> <?= $categoria[1] ?>
                    </label> 

                  </div>

        <?php 
        	endforeach; 
        	desconectar();
        ?>
                  
          <button type="submit" class="btn btn-default">Guardar</button>
                </form>
              </div>
            </div>
          </div>
            
        </div>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/signin.js"></script>

  </body>
</html>
