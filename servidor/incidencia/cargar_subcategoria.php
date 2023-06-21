<?php session_start();
include("../../clases/Incidencias.php");
$incidencias = new Incidencias();

if (isset($_GET['categoria_id'])) {
  $categoriaId= $_GET['categoria_id'];
  echo $incidencias->selectSubCategorias($categoriaId);
}

?>