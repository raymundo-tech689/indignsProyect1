<html>
<?php
  require './php/conexion.php';
  require './scripts/funciones.php';
  if(! haIniciadoSesion() )
  {
  	header('Location: index.html');
  }
  conectar();
  $categorias = getCategoriasPorUser();
?> 
<?php

 $nombre  = $_POST['nombre'];
 $a_paterno  = $_POST['a_paterno'];
 $a_materno = $_POST['a_materno'];
 $num_tel = $_POST['num_tel'];
 $estado = $_POST['estado'];
/*
$insertar = "INSERT INTO usuarios VALUES ( '','','','$nombre','$a_paterno','$a_materno','$num_tel','$estado','1','')"; */

$actualizardatos ="UPDATE usuarios SET nombre = '$nombre', a_paterno = '$a_paterno', 
a_materno = '$a_materno', num_tel = '$num_tel', estado = '$estado' where usuario = '".$_SESSION['usuario']."'";

$query = mysqli_query($conectar, $actualizardatos);

if($query){

   echo "<script> alert('correcto');
    location.href = 'editar-perfil.php';
   </script>";


}






?>