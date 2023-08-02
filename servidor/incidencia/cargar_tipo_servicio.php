<?php session_start();
include("../../clases/Incidencias.php");
$incidencias = new Incidencias();
echo $incidencias->selectTipoServicio();
