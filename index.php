<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/login.css">
    <script src="https://kit.fontawesome.com/83cb85df21.js" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body class="body">

   <section class="img-body__section">
    <img src="./public/img/antonio.png" alt="personaje antonio de la atu">
   </section>
    <section class="login__section">
        <img src="./public/img/logo.jpg" alt="logo de la ATU" class="login__img">
        <h1 class="login__h1"> GESTION DE INCIDENCIAS</h1>
        <form action="./servidor/login/logear.php" method="post" class="login__form">
            <div class="login__div">
                <label for="name" class="login__label">Nombre usuario</label>
                <input type="text" class="login__input" name="name" placeholder="Nombre usuario">
            </div>
            <div class="login__div">
                <label for="password" class="login__label">Contraseña</label>
                <input type="password" class="login__input" name="password" placeholder="***********">
            </div>
            <button class="login__button">Iniciar Sesion</button>
        </form>
        <div class="login-footer">
            <a class="login-footer__a" href="./recuperaContrasena.php">
            <i class="fa-solid fa-lock"></i>
            <span class="login-footer__span" >Olvido su contraseña ?</span>
           </a>
           <a class="login-footer__a"  href="./registro.php">
           <i class="fa-solid fa-square-check"></i>
            <span  class="login-footer__span">Registrarse</span>
              </a>
        </div>
    </section>
  
  
    
  </body>
</html>