<?php
  require '../scripts/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: ../index.php');
  }

  conectar();
  $categorias = getTodasCategorias();
  desconectar();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administración</title>

    <!-- Bootstrap core CSS -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes"> 
    
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/pages/signin.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/probar.min.css">
    </head>




  <body>
    <?php include 'menu-superior.php'; ?>
    <?php include 'menu-lateral.php'; ?>  

    <div class="container-fluid">
        
          <div class="table-responsive">

          <h1 class="page-header">Proyectos y Departamentos.</h1>
          <h4 class="sub-header">Seleccione "Editar datos" para modificar los proyectos y departamentos.</h4>
         
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre de categoría</th>
                  <th>Edición</th>
                </tr>
              </thead>
              <tbody>
        <?php foreach( $categorias as $categoria ): ?>
                <tr>
                  <td><?= $categoria[0] ?></td>
                  <td><?= $categoria[1] ?></td>
                  <td><a href="./editarCategoria.php?id=<?= $categoria[0] ?>">Editar datos</a></td>
                </tr>
        <?php endforeach ?>
              </tbody>
            </table>
             
             <!--<a href="#" class="btn btn-primary">Nueva categoría</button></a>-->
             
          </div>
        </div>
      </div>
    </div>


