<?php
include '../php/conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Realizar la conexión a la base de datos
    $conectar;

    // Verificar si la conexión fue exitosa
    if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit();
    }
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $contenido = $_POST['contenido'];
        $autor = $_POST['autor'];
        $estado = $_POST['estado'];

          // Procesar la imagen
          $nombreArchivo = $_FILES["imagen"]["name"];
          $tipoArchivo = $_FILES["imagen"]["type"];
          $tamanoArchivo = $_FILES["imagen"]["size"];
          $rutaTemporal = $_FILES["imagen"]["tmp_name"];

          // Guardar la imagen en una ubicación específica
          $rutaDestino = "../img/" . $nombreArchivo;
          move_uploaded_file($rutaTemporal, $rutaDestino);

           // Insertar los datos en la base de datos
        $query = "INSERT INTO blogs (titulo, descripcion, contenido, imagen, autor, estado) VALUES ('$titulo', '$descripcion', '$contenido', '$rutaDestino','$autor', '$estado')";

        if (mysqli_query($conectar, $query)) {
     
        
      
            
            
           } else {
               echo "Error al guardar los datos: " . mysqli_error($conectar);
           
           }
        
        mysqli_close($conectar);
        
        
    

 
  
  
  function contenido_php($html) {
    // Crear un nuevo objeto DOMDocument
    $dom = new DOMDocument();
    
    // Cargar el HTML
    $dom->loadHTML($html);
    
    // Obtener todos los elementos <p> del HTML
    $parrafos = $dom->getElementsByTagName('p');
    
    // Iterar sobre los elementos <p> y aplicar alguna acción
    foreach ($parrafos as $parrafo) {
      // Obtener el texto dentro del elemento <p>
      $texto = $parrafo->nodeValue;
      
      // Aplicar alguna acción al texto, por ejemplo, imprimirlo
      echo $texto . '<br>';
    }
  }
  
  $nombre_archivo = strtolower(str_replace(' ', '_', $titulo)) . '.php'; // Genera un nombre de archivo basado en el título
  $ruta_carpeta = '../blogs/'; // Especifica la ruta de la carpeta
  
  $ruta_archivo = $ruta_carpeta . $nombre_archivo; // Combina la ruta de la carpeta con el nombre de archivo

  $html = '<?php' . "\n" . '$titulo = "' . $titulo . '";' . "\n" . '$contenido = "' . $contenido . '";' . "\n" . '' . "\n" . '$descripcion = "' . $descripcion . '";' . "\n" . '' . "\n" . '$rutaDestino = "' . $rutaDestino . '";' . "\n" . '' . "\n" . '$autor = "' . $autor . '";' . "\n" . '' . "\n" . '$estado = "' . $estado . '";' . "\n" . '?> 
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
                  <a href="../index.php">
                      <img style="width: 100px" src="../img/logofinal.png" alt="Logotipo">
                  </a>
                  <div class="mobile-menu">
                      <a href="#navegacion">
                          <img src="../img/icon-menu.svg" alt="Icono Menu">
                      </a>
                  </div>
  
                  <nav id="navegacion" class="navegacion">
                      <a href="../noticias.php">Noticias</a>
                      <a href="../bolsa.php">Bolsa de trabajo</a>
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
  </html>';
  
  // Crea el archivo de página PHP
  file_put_contents($ruta_archivo, $html);
  
  header ("Location: ../subirBlog.php");
}
?>
