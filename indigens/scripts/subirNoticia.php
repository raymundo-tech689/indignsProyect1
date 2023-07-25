<?php
	
// Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Realizar la conexión a la base de datos
        $host = "127.0.0.1";
        $user = "u889522149_indigenas";
        $clave = "123Indigenas.";
        $bd  = "u889522149_indigenas";
        
       
        
        $conectar = mysqli_connect($host,$user,$clave,$bd);

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
     
        
      
         echo "Los datos se guardaron correctamente.";
         
        } else {
            echo "Error al guardar los datos: " . mysqli_error($conectar);
        
        }
        mysqli_close($conectar);
        
        
    }
     
?>