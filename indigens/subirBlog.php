
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sube tu Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.html">
                    <img style="width: 100px" src="./img/logofinal.png" alt="Logotipo">
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/icon-menu.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                    <a href="noticias.php">Noticias</a>
                    <a href="blogs/blogs.php">Blog</a>
                    <a href="#">Bolsa de trabajo</a>
                </nav>
            </div>
        </div> <!-- contenedor -->
    </header>

    <h1 class="fw-300 centrar-texto">Sube tu Blog</h1>
    

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">
   
      </div>
        </h2>

        <form class="contacto" action="scripts/crear_pagina.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Noticia</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" placeholder="Coloca un titulo">

                <label for="descripcion">Coloca la descripción de tu blog: </label>
                <textarea style ="height:10rem; resize: none; " name="descripcion" rows="2" cols="10" required></textarea><br>

                <label for="imagen">Sube tu imagen</label>
                <input class="boton boton-verde" type="file" name="imagen" placeholder="Sube tu imagen" required>

                <label for="contenido">Coloca el contenido de tu blog: </label>
                <textarea  name="contenido" rows="4" cols="50" required></textarea><br>
                
                <label for="autor">Nombre del autor: </label>
                <input type="text" name="autor" placeholder="Coloca el nombre del autor"><br>

        
                <label for="estado">Selecciona el estado: </label>
                <select name="estado" required>
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="CDMX">CDMX</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Tijuana">Tijuana</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                </select>

               
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