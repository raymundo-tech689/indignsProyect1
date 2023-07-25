<?php
$titulo = "prueba";
$contenido = "fgfghgfghh
gfdg";

$descripcion = "fgfdhfghfhfh";

$rutaDestino = "../img/peje.jpeg";

$autor = "Propio";

$estado = "CDMX";
?> 
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Noticias</title>
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
                          <img src="../img/icon-menu.svg" alt="Icono Menu">
                      </a>
                  </div>
  
                  <nav id="navegacion" class="navegacion">
                      <a href="noticias.php">Noticias</a>
                      <a href="bolsa.php">Bolsa de trabajo</a>
                  </nav>
              </div>
          </div> <!-- contenedor -->
      </header>
      <div class="centrar-texto">
          <h1 class="fw-700 centrar-texto"><?php echo $titulo  ?> </h1>
          <div class="contenedor seccion contenido-centrado">
            <p><?php echo nl2br($descripcion);  ?> </p> <br>
        </div>
          <img src="<?php echo $rutaDestino ?> " alt="Imagen Anuncio">
      </div>
      
  
      <main class="contenedor seccion contenido-centrado">
          <div class="resumen-propiedad">
              <p class="precio"><?php echo $autor  ?> </p>
             
          </div><!--.resumen-propiedad-->
  
          <p><?php echo nl2br($contenido);  ?> </p>
  
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