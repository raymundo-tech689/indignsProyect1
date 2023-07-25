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
  

  // Verificar si se ha enviado un archivo
if (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] === UPLOAD_ERR_OK) {

     // Procesar la imagen
     $nombreArchivo = $_FILES["foto_perfil"]["name"];
     $tipoArchivo = $_FILES["foto_perfil"]["type"];
     $tamanoArchivo = $_FILES["foto_perfil"]["size"];
     $rutaTemporal = $_FILES["foto_perfil"]["tmp_name"];

     // Guardar la imagen en una ubicación específica
     $rutaDestino = "img/users/" . $nombreArchivo;
     move_uploaded_file($rutaTemporal, $rutaDestino);


  // Insertar la foto de perfil en la base de datos
  $sql = "UPDATE usuarios SET foto = '$rutaDestino' WHERE usuario =   '{$_SESSION['usuario']}'";
  if ($conexion->query($sql) === TRUE) {
    echo "<script> alert('Foto de perfil guardada con exito');
    location.href = 'editar-perfil.php';
   </script>";
  } else {
    "<script> alert('Parece que hubo un error, intenta de nuevo');
    location.href = 'editar-perfil.php';
   </script>";
  }
}




?>