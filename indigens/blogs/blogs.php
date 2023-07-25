<?php
	include '../php/conexion.php';
	
	//$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	
     // Consulta SQL para obtener los datos de las entradas
     $sql = "SELECT  id,titulo, descripcion, autor, imagen FROM blogs ORDER BY id DESC ";

     // Ejecutar la consulta
     $result=mysqli_query($conectar,$sql);
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img style="width: 100px" src="../img/logofinal.png" alt="Logotipo">
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/icon-menu.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                    <a href="../noticias.php">Noticias</a>
                    <a href="../blogs/blogs.php">Blog</a>
                    <a href="#">Bolsa de trabajo</a>
                </nav>
            </div>
        </div> <!-- contenedor -->
    </header>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Blog</h2>
        <div class="contenedor-anuncios">
        <?php 

        while($mostrar=mysqli_fetch_array($result)){
            //Esta parte es para limitar los caracteres en la prevía
            $palabras = explode(" ", $mostrar ['descripcion'] ); // Dividir el texto en palabras
            $numPalabras = 30; // Número de palabras que se mostrarán
            
            $contenidoLimitado = implode(" ", array_slice($palabras, 0, $numPalabras)); // Unir las primeras palabras nuevamente
            
         ?>
       
            <div class="anuncio">
            <a  href="../blogs/<?php echo strtolower( str_replace(' ', '_', $mostrar['titulo'])) . '.php'; ?>">
                <img src="<?php echo $mostrar ['imagen'];  ?> " alt="Imagen noticia">
                <div class="contenido-anuncio">
                    <h3> <?php echo $mostrar ['titulo']; ?> </h3>
                    <p><?php echo $contenidoLimitado  ?> </p>
                    <p class="precio"><?php echo $mostrar ['autor']; ?> </p>
                    
                      
                    </a>
                </div>
            </div>    
            <?php 
		    }
		    ?>
        </div>
        
		
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