<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/recuperaContrasena.css">
    <script src="https://kit.fontawesome.com/83cb85df21.js" crossorigin="anonymous"></script>
    <title>Restablecer Contraseña</title>
  </head>
  <body class="body">

    <section class="recuperacontrasena__section">
        <img src="./public/img/logo.jpg" alt="logo de la ATU" class="recuperacontrasena__img">
        <h1 class="recuperacontrasena__h1"> GESTION DE INCIDENCIAS</h1>
        <form action="" class="recuperacontrasena__form">
            <div class="recuperacontrasena__div">
                <label for="email" class="recuperacontrasena__label">Correo Electronico</label>
                <input type="email" class="recuperacontrasena__input" name="email" placeholder="ejemplo@correo.com">
            </div>
          
            <button class="recuperacontrasena__button">Restablecer Contraseña</button>
        </form>
        <div class="recuperacontrasena-footer">
            <a class="recuperacontrasena-footer__a" href="./registro.php">
            <i class="fa-solid fa-lock"></i>
            <span class="recuperacontrasena-footer__span" >Registrarse</span>
           </a>
           <a class="recuperacontrasena-footer__a"  href="./index.php" >
           <i class="fa-solid fa-square-check"></i>
            <span class="recuperacontrasena-footer__span">Iniciar Sesion</span>
              </a>
        </div>
    </section>
  
  
    
  </body>
</html>