<?php
  require 'funciones.php';
  // Validación de la sesión como administrador:
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: login.php');
  }
  // Verificación del parámetro POST:
  if( isset($_POST['txtUsuario']) )
    $usuario = $_POST['txtUsuario'];
  else header('Location: login.php');

  // Actualizar permisos:
  conectar();

  // Eliminamos todos sus permisos:
  eliminarPermisos($usuario);
  $categorias = getTodasCategorias();
  // Reasignaremos sus permisos:
  foreach ($categorias as $categoria):
    if( isset( $_POST['categoria'.$categoria[0]] ) )
      asignarPermisos($usuario, $categoria[0]);
  endforeach;

  header('Location: ../admin/editarPermisos.php?usuario='.$usuario);

  desconectar();
?>