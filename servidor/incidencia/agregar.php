<?php session_start();
include "../../clases/Incidencias.php";
$Incidencias = new Incidencias();
$data = array(
    "fecha" => $_POST['date'],
    "hora_inicio" => $_POST['time_on'],
    "hora_fin" => $_POST['time_off'],
    "lugar" => $_POST['place_incidence'],
    "categoria" => $_POST['categoria'],
    "subcategoria" => $_POST['subcategoria'],
    "causa" => $_POST['causa'],
    "consecuencia" => $_POST['consecuencia'],
    "descripcion" => $_POST['descripcion'],
    "consorcio" => $_POST['consorcio'],
    "tipo_servicio" => $_POST['tipo_servicio'],
    "ruta" => $_POST['ruta'],
    "servicio" => $_POST['numero_servicio'],
    "sentido" => $_POST['sentido'],
    "bus" => $_POST['vid'],
    "conductor" => $_POST['dni'],
    "tipo_kilometraje" => $_POST['tipokilometraje'],
    "kilometraje" => $_POST['kilometraje'],
    "carreras" => $_POST['numero_carreras'],
    /* "auditoria" =>'1'  $_POST['auditoria'] */
);

echo $Incidencias->agregarIncidencias($data);
