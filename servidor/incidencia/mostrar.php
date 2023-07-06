<?php  session_start();
include '../../clases/Incidencias.php';

$incidencias = new Incidencias();
$datosIncidencias = $incidencias->mostrarIncidencias();

echo $datosIncidencias;
?>