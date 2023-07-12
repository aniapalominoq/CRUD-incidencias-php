<?php
session_start();
include '../../clases/Incidencias.php';
$incidencias = new Incidencias();
$id_incidencia = $_POST['id_incidencia']; 
$detalleIncidencias = $incidencias->detalleIncidencias($id_incidencia);
echo $detalleIncidencias;
?>
