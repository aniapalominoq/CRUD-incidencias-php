<?php session_start();
if(!isset($_SESSION['nombre'])){
    header("location:index.php");
}
$seccionActual = "registro-incidencias"; 
if (isset($_GET['seccion'])) {
    $seccionActual = $_GET['seccion'];
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/inicio.css">
    <script src="https://kit.fontawesome.com/83cb85df21.js" crossorigin="anonymous"></script>
    <title>inicio</title>
  </head>
  <body class="inicio__body">
   <nav class="inicio__navegation">
    <ul class="inicio__navegation-ul">
        <li class="inicio__navegation-li-user">
            <a href="#" class="inicio__navegation-a">
                <span class="inicio__navegation-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="#fff" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="#fff" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                </span>
                <span class="inicio__navegation-title"><?php echo $_SESSION['nombre']?></span>
            </a>
        </li>
        <li class="inicio__navegation-li">
            <a href="inicio.php?seccion=registro-incidencias" class="inicio__navegation-a">
                <span class=" inicio__navegation-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 112v288M400 256H112"/></svg>
                </span>
                <span class=" inicio__navegation-title">Incidencias</span>
            </a></li>
        <li class="inicio__navegation-li">
            <a href="#" class="inicio__navegation-a">
                <span class=" inicio__navegation-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M160 144h288M160 256h288M160 368h288"/><circle cx="80" cy="144" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="80" cy="256" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="80" cy="368" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                </span>
                <span class=" inicio__navegation-title">Listar</span>
            </a>
        </li>
        <li class="inicio__navegation-li">
            <a href="#" class="inicio__navegation-a">
                <span class=" inicio__navegation-icon"">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512"><path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
                </span>
                <span class=" inicio__navegation-title">Descargar</span>
            </a>
        </li>
        <li class="inicio__navegation-li">
            <a href="./servidor/login/logout.php" class="inicio__navegation-a">
                <span class=" inicio__navegation-icon"">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512"><path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                </span>
                <span class=" inicio__navegation-title"">Salir</span>
            </a>
        </li>
        
    </ul>
    <div class="inicio__navegation-toggle"></div>
   </nav>
<!--  la secion que cambiara de acuerdo con las opciones elegidas -->
    <main class="inicio__main">
    <!-- Contenido de la sección actual -->
    <?php include("./modulos/".$seccionActual.".php"); ?>

    <!-- Agrega tus scripts JavaScript aquí -->
    <h1>My Dashboard</h1>
    <p class="text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur animi voluptatibus cum maxime distinctio
      iste quod deleniti eius, autem voluptates cumque suscipit iure quasi eligendi ullam. Sapiente eligendi porro
      reprehenderit corrupti error facilis quo, fugiat fugit? Maiores aliquam ad, molestiae iste nihil, commodi
      doloremque tempore excepturi aut id ducimus unde?
    </p>
    <p class="inicio__main-copyright">
      &copy; 2023 - <span>Melania Palomino</span> All Rights Reserved.
    </p>
  </main>
   <script>
 let navigation=document.querySelector('.inicio__navegation');
 let toggles=document.querySelector('.inicio__navegation-toggle');
 toggles.onclick=function(){
    navigation.classList.toggle('active');
 }

   </script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  </body>
</html>