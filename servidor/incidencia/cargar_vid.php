<?php  session_start();
include '../../clases/Incidencias.php';
$incidencias = new Incidencias();
  if (isset($_GET['consorcio_id']) and $_GET['id_tipo']) {
  $consorcioId= $_GET['consorcio_id'];
  $tipoId=$_GET['id_tipo'];
  echo $incidencias->selectVid($consorcioId,$tipoId);
}
?>