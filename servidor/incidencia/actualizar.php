<?php session_start();
include "../../clases/Incidencias.php";
$Incidencias = new Incidencias();
$data = array(
    "idincidencia" => $_POST['id_incidencia'],
    "fecha" => $_POST['fecha'],
    "hora_inicio" => $_POST['hora_inicio'],
    "hora_fin" => $_POST['hora_fin'],
    "lugar" => $_POST['lugar'],
    "categoria" => $_POST['categoria'],
    "subcategoria" => $_POST['subcategoria'],
    "causa" => $_POST['causa'],
    "consecuencia" => $_POST['consecuencia'],
    "descripcion" => $_POST['descripcion'],
    "consorcio" => $_POST['consorcio'],
    "tipo_servicio" => $_POST['tipo_servicio'],
    "ruta" => $_POST['ruta'],
    "servicio" => $_POST['servicio'],
    "sentido" => $_POST['sentido'],
    "bus" => $_POST['bus'],
    "conductor" => $_POST['conductor'],
    "tipo_kilometraje" => $_POST['tipo_kilometraje'],
    "kilometraje" => $_POST['kilometraje'],
    "carreras" => $_POST['carreras'],

);
var_dump('esto es lo que se envia', $data);
$response = $Incidencias->actualizarIncidencias($data);

if ($response) {
    echo json_encode(["status" => "success"]); // Enviar la respuesta "success" como texto plano
} else {
    echo json_encode(["status" => "error", "message" => "Hubo un problema al guardar los datos."]); // Enviar la respuesta "error" como texto plano
}
