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