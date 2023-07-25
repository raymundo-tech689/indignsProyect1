<?php
include 'php/conexion.php';
	
	//$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	
     // Consulta SQL para obtener los datos de las entradas
     $sql = "SELECT  titulo, descripcion, categoria, imagen FROM noticias";

 
     $noticia_id = $_GET['id']; // Recupera el ID de la noticia desde la URL

    $sql = "SELECT * FROM noticias WHERE id = $noticia_id";
    $result = $conectar->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["titulo"];
        $descripcion = $row["descripcion"];
        $categoria = $row["categoria"];
        $imagen = $row["imagen"];
        $id = $row["id"];
    } else {
        echo "No se encontró la noticia";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img style="width: 220px" src="./img/logofinal.png" alt="Logotipo">
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/icon-menu.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                <a class="boton boton-amarillo-inicio" href="noticias.php">Blogs</a>
                    
                </nav>
            </div>
        </div> <!-- contenedor -->
    </header>
    <div class="centrar-texto">
        <h1 class="fw-300 centrar-texto"><?php echo $titulo  ?> </h1>
        <img src="<?php echo $imagen ?> " alt="Imagen Anuncio">
    </div>
    

    <main class="contenedor seccion contenido-centrado">
        <div class="resumen-propiedad">
            <p class="precio"><?php echo $categoria  ?> </p>
           
        </div><!--.resumen-propiedad-->

        <p><?php echo nl2br($descripcion);  ?> </p>

    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="#">Quiénes somos</a>
                <a href="#">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</body>
</html>