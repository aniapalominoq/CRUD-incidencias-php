<?php
session_start();
require_once "../../clases/Incidencias.php";

// Obtener los datos del formulario
$fechaInicio = $_POST['filterDate1'];
$fechaFin = $_POST['filterDate2'];
$consorcio = $_POST['filterConsorcio'];
$tipo_servicio = $_POST['filterTipo-servicio'];
$conductor = $_POST['filterConductor'];

// Crear una instancia de la clase Incidencias
$incidencias = new Incidencias();

// Obtener los datos de las incidencias en formato tabular
$datosIncidencias = $incidencias->downloadIncidencias($fechaInicio, $fechaFin, $consorcio, $tipo_servicio, $conductor);

?>




