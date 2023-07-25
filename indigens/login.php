<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href ="../css/style.css">
    <title>Login</title>

</head>
<body>
  <div class="barra">
     
    <div class="mensaje">Bienvenido</div>
  </div>

  <div class="login-box">
    <h2>Inicio de sesión</h2>
    <form action="scripts/iniciar-sesion.php" method="post">
      <div class="user-box">
          
        <input type="text" name="txtUsuario" placeholder="Ingresa tu nombre de usuario" required="">
      </div>
      <div class="user-box">
        <input type="password" id="txtClave"  placeholder="Contraseña" name="txtClave" value="" requiered>
      </div>
      
      <div class="button-container">
          
      <input id="inicio" type="submit" value= "Iniciar sesión" >
          
        <a href="../php/signup.php">
          Registrar
        </a>

        <a href="mail_reset.php">
          Olvidaste tu contraseña?
        </a>

      </div>
    </form>
  </div>
</body>
</html>
