<?php session_start();
include("../../clases/Incidencias.php");
$incidencias = new Incidencias();

if (isset($_GET['numero_vid'])) {
  $numero_vid= $_GET['numero_vid'];
  echo $incidencias->loadBusPlaca($numero_vid);
}

?>