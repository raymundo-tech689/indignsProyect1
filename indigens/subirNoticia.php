<?php
include 'php/conexion.php';
	
// Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Realizar la conexión a la base de datos
        $conectar;

        // Verificar si la conexión fue exitosa
        if (mysqli_connect_errno()) {
            echo "Error al conectar a la base de datos: " . mysqli_connect_error();
            exit();
        }

        // Obtener los valores del formulario
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $categoria = $_POST["categoria"];

       
        // Procesar la imagen
        $nombreArchivo = $_FILES["imagen"]["name"];
        $tipoArchivo = $_FILES["imagen"]["type"];
        $tamanoArchivo = $_FILES["imagen"]["size"];
        $rutaTemporal = $_FILES["imagen"]["tmp_name"];

        // Guardar la imagen en una ubicación específica
        $rutaDestino = "img/" . $nombreArchivo;
        move_uploaded_file($rutaTemporal, $rutaDestino);

        // Insertar los datos en la base de datos
        $query = "INSERT INTO noticias (titulo, descripcion, categoria, imagen) VALUES ('$titulo', '$descripcion', '$categoria', '$rutaDestino')";

        if (mysqli_query($conectar, $query)) {
     
        
      
            
            
           } else {
               echo "Error al guardar los datos: " . mysqli_error($conectar);
           
           }
        
        mysqli_close($conectar);
        
        
    }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.html">
                    <img style="width: 220px" src="img/logofinal.png" alt="Logotipo">
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

    <h1 class="fw-300 centrar-texto">Sube tu entrada</h1>
    

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">
   
      </div>
        </h2>

        <form class="contacto" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Noticia</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" placeholder="Coloca un titulo">

                <label for="descripcion">Coloca el contenido de tu blog: </label>
                <textarea name="descripcion" rows="4" cols="50" required></textarea><br>

                <label for="categoria">Selecciona tu estado: </label>
                <select name="categoria" required>
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="CDMX">Ciudad de México</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
 
                </select>

                <label for="imagen">Sube tu imagen</label>
                <input class="boton" type="file" name="imagen" placeholder="Sube tu imagen" required>

            </fieldset>
                

            <input type="submit" value="Subir" class="boton boton-verde">

        </form>
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