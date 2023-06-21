<?php session_start();
include("../../clases/Incidencias.php");
$incidencias = new Incidencias();

if (isset($_GET['subcategoria_id'])) {
  $subcategoriaId= $_GET['subcategoria_id'];
  echo $incidencias->selectCausa($subcategoriaId);
}

?>