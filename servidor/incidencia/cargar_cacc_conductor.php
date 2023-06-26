<?php session_start();
include("../../clases/Incidencias.php");
$incidencias = new Incidencias();

if (isset($_GET['numero_dni'])) {
  $numero_dni= $_GET['numero_dni'];
  echo $incidencias->loadCaccConductor($numero_dni);
}

?>