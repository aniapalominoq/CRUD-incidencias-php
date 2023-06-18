<?php session_start();

    include "../../clases/Incidencias.php";
    $Incidencias = new Incidencias();
    $data = array(
        "fecha" => $_POST['date'],
        "categoria" => $_POST['time-on'],
        "hora_inicio" => $_POST['time-off'],
        "lugar" => $_POST['place-incidence'],
        "categoria" => $_POST['id_categoria'],
        "subcategoria" => $_POST['id_subcategoria'],
        "causa" => $_POST['id_causa'],
        "consecuencia" => $_POST['id_consecuencia'],
        "descripción" => $_POST['descripcion'],
        "consorcio" => $_POST['id_consorcio'],
        "tipo_servicio" => $_POST['tipo-servicio'],
        "ruta" => $_POST['id_categoria'],
        "servicio" => $_POST[''],
        "sentido" => $_POST[''],
        "numero-servicio" => $_POST['numero-servicio'],
        "bus" => $_POST['id_bus'],
        "conductor" => $_POST[''],
        "tipo_kilometraje" => $_POST[''],
        "kilometraje" => $_POST[''],
        "carreras" => $_POST['']
    );

    echo  $Incidencias->agregarIncidencias($data);


?>