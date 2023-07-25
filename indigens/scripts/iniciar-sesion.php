<?php
	require 'funciones.php';
	$usuario = $_POST['txtUsuario'];
	$clave = $_POST['txtClave'];
	
	
	//$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	conectar();
	if( validarLogin($usuario, $clave) ) {
	echo "valida";
	// Accedemos al sistema
		if(esAdmin()){
		   
		    header('Location: ../admin/index.php');
		    echo "es admin";
		}
		    
		else{
		 header('Location: ../panelUsuario.php');
		}
	} 
	
	else {
	// Sino volvemos al formulario inicial
?>
	<script>
	alert('Los datos ingresados son incorrectos.')
	location.href = "../login.php";
	</script>
<?php
	desconectar();
}
?>