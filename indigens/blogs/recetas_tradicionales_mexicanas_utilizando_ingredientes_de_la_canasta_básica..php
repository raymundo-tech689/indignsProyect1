<?php
$titulo = "Recetas tradicionales mexicanas utilizando ingredientes de la canasta básica.";
$contenido = "Desde guisos reconfortantes hasta antojitos irresistibles, te mostraremos cómo aprovechar los productos básicos de tu despensa para crear platos que deleitarán a tu paladar. ¡Prepárate para saborear la tradición!

Pozole Rojo de Pollo:

El pozole es un platillo emblemático de la gastronomía mexicana. Para esta versión, necesitarás pollo, maíz pozolero, chiles guajillo, especias como el orégano y laurel, además de cebolla, ajo y sal. Prepara un caldo rico y sabroso con el pollo y las especias, agrega el maíz y deja que se cocine a fuego lento. Sirve con lechuga, rábano, cebolla, limón y tostadas. ¡Un verdadero manjar!



Enchiladas Verdes:

Las enchiladas son un clásico en la mesa mexicana. Para esta receta, necesitarás tortillas de maíz, pollo deshebrado, queso fresco, crema, caldo de pollo y salsa verde. Envuelve el pollo en las tortillas, baña con la salsa verde y gratina con queso fresco. Acompaña con crema y salsa extra. ¡Un festín de sabor!



Sopa de Tortilla:

La sopa de tortilla es reconfortante y llena de sabores. Para prepararla, necesitarás tortillas de maíz, tomate, cebolla, ajo, chile pasilla, caldo de pollo, aguacate, queso fresco y crema. Fríe las tortillas, licúa con los ingredientes para hacer la base de la sopa, agrega el caldo y deja hervir. Sirve con aguacate, queso y crema. ¡Una delicia que te transportará a México en cada cucharada!



Tacos al Pastor:

Los tacos al pastor son un ícono de la comida callejera mexicana. Para prepararlos, necesitarás carne de cerdo en adobo, tortillas de maíz, piña, cilantro y cebolla. Marinar la carne con especias tradicionales y asarla en un trompo o sartén. Sirve la carne en tortillas, añade piña, cilantro y cebolla picada. ¡Un verdadero manjar para los amantes de los tacos!



Chiles Rellenos:

Los chiles rellenos son un platillo emblemático de la cocina mexicana. Para prepararlos, necesitarás chiles poblanos, queso fresco, carne molida, tomate, cebolla, ajo, caldo de pollo, harina y huevo. Asa y pela los chiles, rellénalos con queso o carne molida y fríe. Prepara una salsa con tomate, cebolla y ajo, y baña los chiles. ¡Una explosión de sabores en cada bocado!



Conclusión:

La cocina mexicana es famosa por su riqueza de sabores y variedad de platillos. Estas recetas tradicionales demuestran cómo puedes utilizar ingredientes básicos de la despensa para crear auténticos manjares. Atrévete a cocinar estas delicias y deleita a tus seres queridos con la esencia de México en cada platillo. ¡Disfruta de la tradición y comparte el amor por la comida mexicana!



Hashtags

#CocinaMexicana #RecetasAuténticas #IngredientesDeLaDespensa #SaborMexicano

";

$descripcion = "¿Te gusta disfrutar de la auténtica comida mexicana? ¿Quieres explorar recetas tradicionales que utilizan ingredientes simples pero deliciosos? En este artículo, te invitamos a descubrir algunas recetas mexicanas clásicas que puedes preparar con ingredientes comunes de la canasta básica.";

$rutaDestino = "../img/recetas.avif";

$autor = "Titomar";

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
                  <a href="../index.html">
                      <img style="width: 100px" src="../img/logofinal.png" alt="Logotipo">
                  </a>
                  <div class="mobile-menu">
                      <a href="#navegacion">
                          <img src="../img/icon-menu.svg" alt="Icono Menu">
                      </a>
                  </div>
  
                  <nav id="navegacion" class="navegacion">
                      <a href="../noticias.php">Noticias</a>
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