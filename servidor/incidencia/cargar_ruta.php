<?php session_start();
include("../../clases/Incidencias.php");
$incidencias = new Incidencias();

if (isset($_GET['consorcio_id'])) {
  $consorcioId= $_GET['consorcio_id'];
  echo $incidencias->selectRuta($consorcioId);
}

?>