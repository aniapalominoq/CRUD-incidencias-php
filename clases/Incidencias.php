<?php
include "Conexion.php";

class Incidencias extends Conexion
{
    // Método para enlazar los parámetros de manera dinámica a la consulta preparada
    private function refValues($arr)
    {
        $refs = array();
        foreach ($arr as $key => $value) {
            $refs[$key] = &$arr[$key];
        }
        return $refs;
    }
    public function downloadIncidencias($fechaInicio, $fechaFin, $consorcio, $tipo_servicio, $conductor)
    {
        // Conexión a la base de datos
        $conexion = Conexion::conectar();

        // Escapar los parámetros para evitar inyección de SQL si están presentes
        $fechaInicio = isset($fechaInicio) ? date_format(date_create($fechaInicio), 'Y-m-d') : '';
        $fechaFin = isset($fechaFin) ? date_format(date_create($fechaFin), 'Y-m-d') : '';
        $consorcio = isset($consorcio) ? $conexion->real_escape_string($consorcio) : '';
        $tipo_servicio = isset($tipo_servicio) ? $conexion->real_escape_string($tipo_servicio) : '';
        $conductor = isset($conductor) ? $conexion->real_escape_string($conductor) : '';

        // Construir la consulta SQL con los filtros utilizando sentencias preparadas
        $sql = "SELECT
           incidencia.fecha,
           incidencia.hora_inicio,
           incidencia.hora_fin,
           incidencia.lugar,
           tipo.tipo,
           ruta.ruta,
           consorcio.nombre_consorcio,
           sentido.sentido,
           categoria.categoria,
           sub_categoria.sub_categoria,
           causa.causa,
           consecuencia.consecuencia,
           incidencia.descripcion,
           incidencia.servicio,
           incidencia.bus,
           bus.vid,
           bus.tamano,
           bus.placa,
           conductor.dni,
           conductor.nombre,
           conductor.cacc,
           tipo_kilometraje.tipo_kilometraje,
           incidencia.kilometraje,
           incidencia.carreras
        FROM incidencia
        INNER JOIN tipo ON incidencia.tipo_servicio = tipo.id_tipo
        INNER JOIN ruta ON incidencia.ruta = ruta.id_ruta
        INNER JOIN consorcio ON incidencia.consorcio = consorcio.idconsorcio
        INNER JOIN sentido ON incidencia.sentido = sentido.idsentido
        INNER JOIN categoria ON incidencia.categoria = categoria.id_categoria
        INNER JOIN sub_categoria ON incidencia.subcategoria = sub_categoria.id_subcategoria
        INNER JOIN causa ON incidencia.causa = causa.idcausa
        INNER JOIN consecuencia ON incidencia.consecuencia = consecuencia.id_consecuencia
        INNER JOIN bus ON incidencia.bus = bus.num_externo
        INNER JOIN conductor ON incidencia.conductor = conductor.dni
        INNER JOIN tipo_kilometraje ON incidencia.tipo_kilometraje = tipo_kilometraje.idtipo_kilometraje
        WHERE incidencia.fecha BETWEEN ? AND ?";

        // Variables booleanas para controlar las condiciones de consulta
        $hasConsorcio = !empty($consorcio);
        $hasTipo_servicio = !empty($tipo_servicio);
        $hasConductor = !empty($conductor);

        // Agregar las condiciones adicionales si existen filtros
        if ($hasConsorcio) {
            $sql .= " AND incidencia.consorcio = ?";
        }
        if ($hasTipo_servicio) {
            $sql .= " AND incidencia.tipo_servicio = ?";
        }
        if ($hasConductor) {
            $sql .= " AND incidencia.conductor = ?";
        }
        // Preparar la consulta
        $stmt = $conexion->prepare($sql);
        // Enlazar los parámetros de manera dinámica
        $params = array();
        $paramsTypes = '';
        // Agregar los parámetros y sus tipos de datos a los arrays
        if (!empty($fechaInicio) && !empty($fechaFin)) {
            $params[] = $fechaInicio;
            $params[] = $fechaFin;
            $paramsTypes .= 'ss';
        }
        if ($hasConsorcio) {
            $params[] = $consorcio;
            $paramsTypes .= 's';
        }
        if ($hasTipo_servicio) {
            $params[] = $tipo_servicio;
            $paramsTypes .= 's';
        }
        if ($hasConductor) {
            $params[] = $conductor;
            $paramsTypes .= 's';
        }
        // Si hay al menos un parámetro, enlazarlos a la consulta preparada
        if (!empty($params)) {
            array_unshift($params, $paramsTypes);
            call_user_func_array(array($stmt, 'bind_param'), $this->refValues($params));
        }
        $stmt->execute();
        //---------------------


        // Obtener el resultado de la consulta
        $datosIncidencias = $stmt->get_result();
        // Verificar si hay datos de incidencias
        if (!empty($datosIncidencias)) {

            // Establecer las cabeceras para indicar que se descargará un archivo CSV
            header('Content-Type: application/csv;charset=utf-8');
            header('Content-Disposition: attachment; filename="incidencias.csv"');

            // Imprimir las cabeceras en una fila separada por tabulaciones
            echo "FECHA\tHORA INICIO\tHORA FIN\tLUGAR\tTIPO\tRUTA\tNOMBRE CONSORCIO\tSENTIDO\tCATEGORIA\tSUB CATEGORIA\tCAUSA\tCONSECUENCIA\tDESCRIPCION\tSERVICIO\tBUS\tVID\tDIMENSION\tPLACA\tDNI\tNOMBRE\tCACC\tTIPO KM\tNUM KM\tNUM\tCARRERA\n";

            // Crear el contenido del archivo CSV
            foreach ($datosIncidencias as $incidencia) {
                echo "{$incidencia['fecha']}\t{$incidencia['hora_inicio']}\t{$incidencia['hora_fin']}\t{$incidencia['lugar']}\t {$incidencia['tipo']}\t{$incidencia['ruta']}\t{$incidencia['nombre_consorcio']}\t{$incidencia['sentido']}\t{$incidencia['categoria']}\t{$incidencia['sub_categoria']}\t{$incidencia['causa']}\t{$incidencia['consecuencia']}\t{$incidencia['descripcion']}\t{$incidencia['servicio']}\t{$incidencia['bus']}\t{$incidencia['vid']}\t{$incidencia['tamano']}\t{$incidencia['placa']}\t{$incidencia['dni']}\t{$incidencia['nombre']}\t{$incidencia['cacc']}\t{$incidencia['tipo_kilometraje']}\t{$incidencia['kilometraje']}\t{$incidencia['carreras']}\n";
            }
        } else {
            // No se encontraron resultados, devolver una respuesta vacía    
            echo "No se encontraron resultados.";
        }
        // Cerrar la conexión a la base de datos
        $conexion->close();
    }



    public function detalleIncidencias($id_incidencia)
    {
        $conexion = Conexion::conectar();
        // Crea una conexión usando el método estático "conectar" de la clase "Conexion"
        // Consulta SQL para seleccionar los detalles de la incidencia
        $sql = "SELECT incidencia.idincidencia,
        incidencia.fecha,
        incidencia.hora_inicio,
        incidencia.hora_fin,
        incidencia.lugar,
        tipo.tipo,
        ruta.ruta,
        consorcio.nombre_consorcio,
        sentido.sentido,
        categoria.categoria,
        sub_categoria.sub_categoria,
        causa.causa,
        consecuencia.consecuencia,
        incidencia.descripcion,
        incidencia.servicio,
        incidencia.bus,
        bus.vid,
        bus.tamano,
        bus.placa,
        conductor.dni,
        conductor.nombre,
        conductor.cacc,
        tipo_kilometraje.tipo_kilometraje,
        incidencia.kilometraje,
        incidencia.carreras
                FROM incidencia
                INNER JOIN tipo ON incidencia.tipo_servicio = tipo.id_tipo
                INNER JOIN ruta ON incidencia.ruta = ruta.id_ruta
                INNER JOIN consorcio ON incidencia.consorcio = consorcio.idconsorcio
                INNER JOIN sentido ON incidencia.sentido = sentido.idsentido
                INNER JOIN categoria ON incidencia.categoria = categoria.id_categoria
                INNER JOIN sub_categoria ON incidencia.subcategoria = sub_categoria.id_subcategoria
                INNER JOIN causa ON incidencia.causa = causa.idcausa
                INNER JOIN consecuencia ON incidencia.consecuencia = consecuencia.id_consecuencia
                INNER JOIN bus ON incidencia.bus = bus.num_externo
                INNER JOIN conductor ON incidencia.conductor = conductor.dni
                INNER JOIN tipo_kilometraje ON incidencia.tipo_kilometraje = tipo_kilometraje.idtipo_kilometraje
                WHERE incidencia.idincidencia =?";
        // La consulta incluye un parámetro de sustitución para el ID de incidencia

        $query = $conexion->prepare($sql);
        // Prepara la consulta SQL
        $query->bind_param("i", $id_incidencia);
        // Vincula el parámetro de sustitución con el valor de $id_incidencia
        $query->execute();
        // Ejecuta la consulta SQL
        $resultado = $query->get_result()->fetch_assoc();
        // Obtiene el resultado de la consulta como un array asociativo

        // Devuelve los detalles de la incidencia en formato JSON
        return json_encode($resultado);
    }
    public function editarIncidencias($id_incidencia)
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM incidencia WHERE idincidencia = ?";

        $stmt = mysqli_prepare($conexion, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id_incidencia);
        mysqli_stmt_execute($stmt);

        $respuesta = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($respuesta) > 0) {
            $resultado = mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
            return json_encode($resultado);
        } else {
            return null;
            // O cualquier valor que indique que no se encontraron resultados
        }
    }
    public function actualizarIncidencias($data)
    {
        $conexion = Conexion::conectar();
        $sql = "UPDATE t_invitados SET id_evento = ?,
                                            nombre_invitado = ?,
                                            email = ? 
                    WHERE id_invitado = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param(
            'issi',
            $data['id_evento'],
            $data['nombre_invitado'],
            $data['email'],
            $data['id_invitado']
        );
        return $query->execute();
    }
    public function eliminarIncidencias($id_incidencia)
    {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM incidencia WHERE idincidencia = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $id_incidencia);

        if ($query->execute()) {
            $query->close();
            Conexion::desconectar();
            return true;
        } else {
            $query->close();
            Conexion::desconectar();
            return false;
        }
    }
    public function mostrarIncidencias()
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT incidencia.idincidencia,
                incidencia.fecha,
                consorcio.abreviatura_consorcio,
                tipo.abreviatura_tipo,
                ruta.abreviatura,
                categoria.categoria,
                sub_categoria.sub_categoria ,
                incidencia.servicio,
                incidencia.bus,
                tipo_kilometraje.tipo_kilometraje,
                incidencia.kilometraje
                FROM incidencia
                INNER JOIN tipo ON incidencia.tipo_servicio = tipo.id_tipo
                INNER JOIN ruta ON incidencia.ruta = ruta.id_ruta
                INNER JOIN consorcio ON incidencia.consorcio = consorcio.idconsorcio
                INNER JOIN categoria ON incidencia.categoria= categoria.id_categoria
                INNER JOIN sub_categoria ON incidencia.subcategoria=sub_categoria.id_subcategoria
                INNER JOIN tipo_kilometraje ON incidencia.tipo_kilometraje=tipo_kilometraje.idtipo_kilometraje";
        $respuesta = mysqli_query($conexion, $sql);
        $resultado = mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        return json_encode($resultado);
    }
    public function agregarIncidencias($data)
    {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO incidencia (fecha, hora_inicio, hora_fin, lugar, categoria, subcategoria, causa, consecuencia, descripcion, consorcio, tipo_servicio, ruta, servicio, sentido, bus, conductor, tipo_kilometraje, kilometraje, carreras/* , auditoria */) 
                VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?/* , ? */)";
        $query = $conexion->prepare($sql);
        $query->bind_param('ssssiiiisiiiiiisiii', $data['fecha'], $data['hora_inicio'], $data['hora_fin'], $data['lugar'], $data['categoria'], $data['subcategoria'], $data['causa'], $data['consecuencia'], $data['descripcion'], $data['consorcio'], $data['tipo_servicio'], $data['ruta'], $data['servicio'], $data['sentido'], $data['bus'], $data['conductor'], $data['tipo_kilometraje'], $data['kilometraje'], $data['carreras']/*, $data['auditoria'] */);
        $success = $query->execute(); // Ejecutar la consulta y asignar el resultado a la variable $success

        if ($success) {
            // Redireccionar al usuario después de tener éxito
            return true;
            // Retornar "success" en caso de éxito
        } else {
            return false; // Retornar "error" en caso de error
        }
    }
    public function selectTipoServicio()
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM tipo ";
        $respuesta = mysqli_query($conexion, $sql);
        $tipo_servicio = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $tipo_servicio[] = $mostrar;
        }
        return json_encode($tipo_servicio);
    }

    public function selectCategorias()
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM categoria";
        $respuesta = mysqli_query($conexion, $sql);
        $categorias = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $categorias[] = $mostrar;
        }
        return json_encode($categorias);
    }
    public function selectSubCategorias($id_categoria)
    {
        $conexion = Conexion::conectar();
        // Escapa el ID de la categoría para evitar inyección de SQL
        $id_categoria = mysqli_real_escape_string($conexion, $id_categoria);
        $sql = "SELECT * FROM sub_categoria WHERE categoria=$id_categoria";
        $respuesta = mysqli_query($conexion, $sql);
        $subcategoria = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $subcategoria[] = $mostrar;
        }
        return json_encode($subcategoria);
    }

    public function selectCausa($id_subcategoria)
    {
        $conexion = Conexion::conectar();
        $id_subcategoria = mysqli_real_escape_string($conexion, $id_subcategoria);
        $sql = "SELECT * FROM causa WHERE sub_categoria=$id_subcategoria";
        $respuesta = mysqli_query($conexion, $sql);
        $causa = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $causa[] = $mostrar;
        }
        return json_encode($causa);
    }

    public function selectConsecuencia($id_causa)
    {
        $conexion = Conexion::conectar();
        $id_causa = mysqli_real_escape_string($conexion, $id_causa);
        $sql = "SELECT * FROM consecuencia WHERE causa=$id_causa";
        $respuesta = mysqli_query($conexion, $sql);
        $consecuencia = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $consecuencia[] = $mostrar;
        }
        return json_encode($consecuencia);
    }

    public function selectConsorcio()
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM consorcio ";
        $respuesta = mysqli_query($conexion, $sql);
        $consorcio = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $consorcio[] = $mostrar;
        }
        return json_encode($consorcio);
    }

    public function selectRuta($id_consorcio, $tipo_servicio)
    {
        $conexion = Conexion::conectar();

        $sql = "SELECT * FROM ruta WHERE id_consorcio = ? AND id_tipo = ?";
        $stmt = mysqli_prepare($conexion, $sql);

        // Enlazar los valores de forma segura a los marcadores de posición
        mysqli_stmt_bind_param($stmt, "ii", $id_consorcio, $tipo_servicio);
        mysqli_stmt_execute($stmt);
        $respuesta = mysqli_stmt_get_result($stmt);

        $ruta = array();
        while ($mostrar = mysqli_fetch_assoc($respuesta)) {
            $ruta[] = $mostrar;
        }

        return json_encode($ruta);
    }

    public function selectSentido()
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM sentido";
        $respuesta = mysqli_query($conexion, $sql);
        $sentido = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $sentido[] = $mostrar;
        }
        return json_encode($sentido);
    }

    public function selectTipoKilometraje()
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM tipo_kilometraje";
        $respuesta = mysqli_query($conexion, $sql);
        $kilometraje = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $kilometraje[] = $mostrar;
        }
        return json_encode($kilometraje);
    }

    public function selectVid($id_consorcio, $tipo_servicio)
    {
        $conexion = Conexion::conectar();

        // Escapar los valores de id_consorcio y tipo_servicio para prevenir la inyección de SQL
        $id_consorcio = mysqli_real_escape_string($conexion, $id_consorcio);
        $tipo_servicio = mysqli_real_escape_string($conexion, $tipo_servicio);

        // Utilizar consultas preparadas para mayor seguridad y claridad del código
        $sql = "SELECT vid FROM bus WHERE id_consorcio = ? AND id_tipo = ?";
        $stmt = mysqli_prepare($conexion, $sql);

        // Utilizar el modificador adecuado según el tipo de dato real de los parámetros
        mysqli_stmt_bind_param($stmt, "ii", $id_consorcio, $tipo_servicio);
        mysqli_stmt_execute($stmt);
        $respuesta = mysqli_stmt_get_result($stmt);

        $numVid = array();
        while ($mostrar = mysqli_fetch_assoc($respuesta)) {
            $numVid[] = $mostrar['vid'];
        }

        return json_encode($numVid);
    }

    public function loadBusPlaca($numero_vid)
    {
        $conexion = Conexion::conectar();
        $numero_vid = mysqli_real_escape_string($conexion, $numero_vid);
        $sql = "SELECT * FROM bus WHERE vid = ?";
        $stmt = mysqli_prepare($conexion, $sql);
        mysqli_stmt_bind_param($stmt, "s", $numero_vid);
        mysqli_stmt_execute($stmt);
        $respuesta = mysqli_stmt_get_result($stmt);

        $busPlaca = array();
        while ($mostrar = mysqli_fetch_assoc($respuesta)) {
            $busPlaca[] = $mostrar;
        }

        return json_encode($busPlaca);
    }

    public function selectDni($id_consorcio, $tipo_servicio)
    {
        $conexion = Conexion::conectar();

        // Escapar los valores de id_consorcio y tipo_servicio para prevenir la inyección de SQL
        $id_consorcio = mysqli_real_escape_string($conexion, $id_consorcio);
        $tipo_servicio = mysqli_real_escape_string($conexion, $tipo_servicio);

        // Utilizar consultas preparadas para mayor seguridad y claridad del código
        $sql = "SELECT dni FROM conductor WHERE consorcio = ? AND tipo = ?";
        $stmt = mysqli_prepare($conexion, $sql);

        // Utilizar el modificador adecuado según el tipo de dato real de los parámetros
        mysqli_stmt_bind_param($stmt, "ii", $id_consorcio, $tipo_servicio);
        mysqli_stmt_execute($stmt);
        $respuesta = mysqli_stmt_get_result($stmt);

        $numDni = array();
        while ($mostrar = mysqli_fetch_assoc($respuesta)) {
            $numDni[] = $mostrar['dni'];
        }

        return json_encode($numDni);
    }

    public function loadCaccConductor($numero_dni)
    {
        $conexion = Conexion::conectar();
        $numero_dni = mysqli_real_escape_string($conexion, $numero_dni);
        $sql = "SELECT * FROM conductor WHERE dni =?";
        $stmt = mysqli_prepare($conexion, $sql);
        mysqli_stmt_bind_param($stmt, "s", $numero_dni);
        mysqli_stmt_execute($stmt);
        $respuesta = mysqli_stmt_get_result($stmt);

        $caccConductor = array();
        while ($mostrar = mysqli_fetch_assoc($respuesta)) {
            $caccConductor[] = $mostrar;
        }
        return json_encode($caccConductor);
    }
}
