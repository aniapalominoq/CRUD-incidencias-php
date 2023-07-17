<?php
session_start();
require_once "../../clases/Incidencias.php";


// Verificar si se proporcionaron las fechas de inicio y fin
if (isset($_POST['filterDate1']) && isset($_POST['filterDate2'])) {
    $fechaInicio = $_POST['filterDate1'];
    $fechaFin = $_POST['filterDate2'];
}

// Verificar si se proporcionaron las fechas de inicio y fin
if (empty($fechaInicio) || empty($fechaFin)) {
    // Manejar el error de fechas faltantes
    echo json_encode(array('error' => 'Falta proporcionar la fecha de inicio y/o la fecha de fin'));
    exit; // Salir del script
}

// Obtener los valores opcionales (consorcio y conductor)
$consorcio = isset($_POST['filterConsorcio']) ? $_POST['filterConsorcio'] : '';
$conductor = isset($_POST['filteConductor']) ? $_POST['filteConductor'] : '';

// Crear una instancia de la clase Incidencias
$incidencias = new Incidencias();

// Obtener los datos de las incidencias
$datosIncidencias = $incidencias->downloadIncidencias($fechaInicio, $fechaFin, $consorcio, $conductor);

// Verificar si hay datos de incidencias
if (!empty($datosIncidencias)) {
    // Nombre del archivo CSV
    $filename = "incidencias.csv";

    // Abrir el archivo en modo escritura
    $file = fopen($filename, "w");

    // Escribir los encabezados en el archivo
    fputcsv($file, array('Fecha', 'Hora Inicio', 'Hora Fin', 'Consorcio', 'Conductor'));

    // Escribir los datos de cada fila en el archivo
    foreach ($datosIncidencias as $incidencia) {
        fputcsv($file, $incidencia);
    }

    // Cerrar el archivo
    fclose($file);

    // Establecer las cabeceras para indicar que se descargará un archivo CSV
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Enviar el contenido del archivo CSV al usuario
    readfile($filename);

    // Eliminar el archivo CSV
    unlink($filename);
} else {
    // No se encontraron resultados, devolver una respuesta vacía
    echo "No se encontraron resultados.";
}
