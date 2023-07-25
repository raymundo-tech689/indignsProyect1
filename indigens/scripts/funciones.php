<?php 
	$conexion = null;

	function conectar()
	{
		global $conexion;
	$conexion=mysqli_connect('localhost','root','','base-indigenas') or die ('No se pudo conectar la base de datos'. mysqli_error($conexion));
	
		mysqli_set_charset($conexion, 'utf8');
	}

	function getTodasCategorias()
	{
		global $conexion;
		$respuesta = mysqli_query($conexion, "SELECT * FROM categorias");
		// return $respuesta->fetch_all();
		$respuestas_array = array();
		while ($fila = $respuesta->fetch_row())
		  $respuestas_array[] = $fila;
		return $respuestas_array;		
	}

	function getCategoriasPorUser()
	{
		global $conexion;
		$respuesta = mysqli_query($conexion, "SELECT C.categoria, C.descripcion, C.ruta FROM permisos P INNER JOIN categorias C ON P.ID_Categoria = C.ID_Categoria WHERE usuario =  '".$_SESSION['usuario']."'");		
		// return $respuesta->fetch_all();
		$respuestas_array = array();
		while ($fila = $respuesta->fetch_row())
		  $respuestas_array[] = $fila;
		return $respuestas_array;
	}

	function getCategoriaPorId($id)
	{
		global $conexion;
		$respuesta = mysqli_query($conexion, "SELECT * FROM categorias WHERE ID_Categoria =  ".$id);		
		return mysqli_fetch_row($respuesta);
	}

	function getUsuarios()
	{
		global $conexion;
		$respuesta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE admin<>1");		
		// return $respuesta->fetch_all();
		$respuestas_array = array();
		while ($fila = $respuesta->fetch_row())
		  $respuestas_array[] = $fila;
		return $respuestas_array;		
	}
	
	function validarLogin($usuario, $clave)
	{
		global $conexion;
		$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND clave='".$clave."'";
		$respuesta = mysqli_query($conexion, $consulta);
		
		if( $fila = mysqli_fetch_row($respuesta) )
		{
			session_start();
			$_SESSION['usuario'] = $usuario;
			$_SESSION['admin'] = $fila[10];
			return true;
		}
		return false;
	}

	function eliminarPermisos($usuario)
	{
		global $conexion;
		mysqli_query($conexion, "DELETE FROM permisos WHERE usuario='".$usuario."'");		
	}

	function asignarPermisos($usuario, $idCat)
	{
		global $conexion;
		mysqli_query($conexion, "INSERT INTO permisos VALUES('".$usuario."', ".$idCat.")");		
	}

	function tienePermiso($usuario, $idCat)
	{
		global $conexion;
		$result = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM permisos WHERE usuario='".$usuario."' AND ID_Categoria=".$idCat);
		$row = mysqli_fetch_assoc($result);
		$numero = $row['total'];
		return $numero > 0;
	}

	function editarCategoria($id, $nombre, $descripcion, $ruta)
	{
		global $conexion;
		mysqli_query($conexion, "UPDATE categorias SET categoria='".$nombre."', descripcion='".$descripcion."', ruta='".$ruta."' WHERE ID_Categoria = ".$id);
	}

	function haIniciadoSesion()
	{
		session_start();
		return isset( $_SESSION['usuario'] );
	}
	
	// Esta la comento para que no interfiera
    
	function esAdmin()
	{
		return $_SESSION['admin'];
	}
	
	// Voy a agregar la función de es admin porque al parecer no la esta usando
	/*
	function esAdmin() {
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
        return true;
    } else {
        return false;
        }
    }

    */

	function nivel_id()
	{
		
		global $conexion;
        $query =  "SELECT * FROM usuarios where usuario = '".$_SESSION['usuario']."'";
        $idnivel = mysqli_query($conexion, $query);
        $row = mysqli_fetch_assoc($idnivel);
		$idnivel = $row['id_nivel'];
		return $idnivel;
	}

	function desconectar()
	{
		global $conexion;
		mysqli_close($conexion);
	}

	function mostrarnoticia()
	{
		$conexion=mysqli_connect('localhost','root','','base-indigenas');
		//$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
		
		 // Consulta SQL para obtener los datos de las entradas
		 $sql = "SELECT  id,titulo, descripcion, categoria, imagen FROM noticias ORDER BY id DESC ";
	
		 // Ejecutar la consulta
		 $result=mysqli_query($conexion,$sql);
	}

	function datosUsuario()
	{
	$conexion=mysqli_connect('localhost','root','','base-indigenas');

		$sql = "SELECT  usuario, email, clave, nombre, a_paterno, a_materno, num_tel, id_nivel, foto, estado FROM usuarios WHERE usuario =   '{$_SESSION['usuario']}' ";
	
		 // Ejecutar la consulta
		 $result=mysqli_query($conexion,$sql);

		 if ($result) {
			// Obtener los datos de la imagen
			$fila = mysqli_fetch_assoc($result);
			$imagen = $fila['foto'];

			return $imagen;
		
		} else {
			echo "Error en la consulta: " . mysqli_error($conexion);
		}
	}



?>




