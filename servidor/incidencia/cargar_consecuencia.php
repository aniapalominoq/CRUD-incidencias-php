<?php session_start();
include("../../clases/Incidencias.php");
$incidencias = new Incidencias();

if (isset($_GET['causa_id'])) {
  $causaId= $_GET['causa_id'];
  echo $incidencias->selectConsecuencia($causaId);
}

?>