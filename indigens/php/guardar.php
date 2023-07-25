<?php
 require 'conexion.php';
  
 
 $usuario  = $_POST['usuario'];
 $clave  = $_POST['clave'];
 $email = $_POST['email'];

$insertar = "INSERT INTO usuarios VALUES ( '$usuario','$email','$clave','','','','','','1','') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../php/confirmar-registro.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../php/signup.php';
    </script>";
}






?>