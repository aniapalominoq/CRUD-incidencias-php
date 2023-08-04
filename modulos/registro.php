<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/registro.css">
    <script src="https://kit.fontawesome.com/83cb85df21.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Registro</title>
</head>

<body class="body">

    <section class="img-body__section">

    </section>
    <section class="resgistro__section">
        <img src="./public/img/logo.jpg" alt="logo de la ATU" class="resgistro__img">
        <h1 class="resgistro__h1">REGISTRO</h1>
        <form action="./servidor/registro/registrar.php" method="POST" class="resgistro__form">
            <div class="resgistro__div">
                <label for="name" class="resgistro__label">Nombre usuario</label>
                <input type="text" class="resgistro__input" name="name" placeholder="Nombre usuario" required>
            </div>
            <div class="resgistro__div">
                <label for="rol" class="resgistro__label"> Seleccione su Rol</label>
                <select name="rol" id="rol" class="resgistro__select" required>
                    <option class="resgistro__select-option" value="controlador">Controlador</option>
                    <option class="resgistro__select-option" value="supervisor">Supervisor</option>
                </select>
            </div>
            <div class="resgistro__div">
                <label for="password1" class="resgistro__label">Contraseña</label>
                <input type="password" class="resgistro__input" name="password1" placeholder="***********" required>
            </div>

            <button type="submit" class="resgistro__button">Registrarse</button>
        </form>
        <div class="resgistro-footer">
            <a class="resgistro-footer__a" href="./recuperaContrasena.php">
                <i class="fa-solid fa-lock"></i>
                <span class="resgistro-footer__span">Olvido su contraseña ?</span>
            </a>
            <a class="resgistro-footer__a" href="./index.php">
                <i class="fa-solid fa-square-check"></i>
                <span class="resgistro-footer__span">Iniciar Sesion</span>
            </a>
        </div>
    </section>



</body>

</html>