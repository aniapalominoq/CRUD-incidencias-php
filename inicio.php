<?php session_start();
if (!isset($_SESSION['nombre'])) {
    header("location:index.php");
}
$seccionActual = "registro_incidencias";
if (isset($_GET['seccion'])) {
    $seccionActual = $_GET['seccion'];
}

?>
<! DOCTYPE html>
    <html lang="es">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/inicio.css">
        <!--   <link rel="stylesheet" href="public/css/sweetalert2.min.css"> -->
        <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.min.css
" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
        <title>inicio</title>
    </head>

    <body id="inicio__body" class="inicio__body">
        <nav class="inicio__navegation">
            <ul class="inicio__navegation-ul">
                <li class="inicio__navegation-li-user ">
                    <a href="#" class="inicio__navegation-a">
                        <span class="inicio__navegation-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512">
                                <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="#fff" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="#fff" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            </svg>
                        </span>
                        <span class="inicio__navegation-title"><?php echo $_SESSION['nombre'] ?></span>
                    </a>
                </li>
                <li class="inicio__navegation-li inicio__navegation-li-active">
                    <a href="inicio.php?seccion=registro_incidencias" id="incidencia" class="inicio__navegation-a">
                        <span class=" inicio__navegation-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 112v288M400 256H112" />
                            </svg>
                        </span>
                        <span class=" inicio__navegation-title">Incidencias</span>
                    </a>
                </li>
                <li class="inicio__navegation-li">
                    <a id="listar" class="inicio__navegation-a">
                        <span class=" inicio__navegation-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M160 144h288M160 256h288M160 368h288" />
                                <circle cx="80" cy="144" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <circle cx="80" cy="256" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <circle cx="80" cy="368" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>
                        </span>
                        <span class=" inicio__navegation-title">Listar</span>
                    </a>
                </li>
                <li class="inicio__navegation-li">
                    <a id="descargar" class="inicio__navegation-a">
                        <span class="inicio__navegation-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512">
                                <path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288" />
                            </svg>
                        </span>
                        <span class=" inicio__navegation-title">Descargar</span>
                    </a>
                </li>

                <hr class="inicio__navegation-hr">

                <li class="inicio__navegation-li">
                    <a id="newDriver" class="inicio__navegation-a">
                        <span class=" inicio__navegation-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512">
                                <path d="M376 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <path d="M288 304c-87 0-175.3 48-191.64 138.6-2 10.92 4.21 21.4 15.65 21.4H464c11.44 0 17.62-10.48 15.65-21.4C463.3 352 375 304 288 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M88 176v112M144 232H32" />
                            </svg>
                        </span>
                        <span class="inicio__navegation-title">Añadir Usuario</span>
                    </a>
                </li>

                <li class="inicio__navegation-li">
                    <a id="newDriver" class="inicio__navegation-a">
                        <span class=" inicio__navegation-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512">
                                <path d="M326.1 231.9l-47.5 75.5a31 31 0 01-7 7 30.11 30.11 0 01-35-49l75.5-47.5a10.23 10.23 0 0111.7 0 10.06 10.06 0 012.3 14z" fill="#5ABDD5" />
                                <path d="M256 64C132.3 64 32 164.2 32 287.9a223.18 223.18 0 0056.3 148.5c1.1 1.2 2.1 2.4 3.2 3.5a25.19 25.19 0 0037.1-.1 173.13 173.13 0 01254.8 0 25.19 25.19 0 0037.1.1l3.2-3.5A223.18 223.18 0 00480 287.9C480 164.2 379.7 64 256 64z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M256 128v32M416 288h-32M128 288H96M165.49 197.49l-22.63-22.63M346.51 197.49l22.63-22.63" />
                            </svg>
                        </span>
                        <span class="inicio__navegation-title">Añadir Conductor</span>
                    </a>
                </li>
                <li class="inicio__navegation-li">
                    <a id="newBus" class="inicio__navegation-a">
                        <span class=" inicio__navegation-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512">
                                <rect x="80" y="112" width="352" height="192" rx="32" ry="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <rect x="80" y="304" width="352" height="128" rx="32" ry="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <path d="M400 112H112a32.09 32.09 0 01-32-32h0a32.09 32.09 0 0132-32h288a32.09 32.09 0 0132 32h0a32.09 32.09 0 01-32 32zM144 432v22a10 10 0 01-10 10h-28a10 10 0 01-10-10v-22zM416 432v22a10 10 0 01-10 10h-28a10 10 0 01-10-10v-22z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <circle cx="368" cy="368" r="16" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                <circle cx="144" cy="368" r="16" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 112v192M80 80v288M432 80v288" />
                            </svg>
                        </span>
                        <span class="inicio__navegation-title">Añadir bus</span>
                    </a>
                </li>
                <li class="inicio__navegation-li">
                    <a id="logout" class="inicio__navegation-a">
                        <span class=" inicio__navegation-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon inicio__navegation-svg" viewBox="0 0 512 512">
                                <path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>
                        </span>
                        <span class="inicio__navegation-title">Salir</span>
                    </a>
                </li>

            </ul>
            <div class="inicio__navegation-toggle"></div>
        </nav>
        <section id="contenido-dinamico" class="addIncidents__main">

            <?php include("./modulos/" . $seccionActual . ".php"); ?>
        </section>

        <script src="/public/JavaScript/inicio.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.all.min.js"></script>
        <script src="public/JavaScript/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
    </body>

    </html>