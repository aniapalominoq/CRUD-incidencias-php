<?php
include "Conexion.php";
class Incidencias extends Conexion{
    public function eliminarIncidencias($id_incidencia) {
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
    public function mostrarIncidencias() {
        $conexion = Conexion::conectar();
        $sql = "SELECT incidencia.idincidencia, tipo.tipo, ruta.abreviatura,incidencia.servicio,incidencia.bus, consorcio.nombre_consorcio FROM incidencia INNER JOIN tipo ON incidencia.tipo_servicio = tipo.id_tipo INNER JOIN ruta ON incidencia.ruta = ruta.id_ruta INNER JOIN consorcio ON incidencia.consorcio = consorcio.idconsorcio";
        $respuesta = mysqli_query($conexion, $sql);
        $resultado = mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        return json_encode($resultado);
    }

    public function agregarIncidencias($data) {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO incidencia (fecha, hora_inicio, hora_fin, lugar, categoria, subcategoria, causa, consecuencia, descripcion, consorcio, tipo_servicio, ruta, servicio, sentido, bus, conductor, tipo_kilometraje, kilometraje, carreras/* , auditoria */) 
                VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?/* , ? */)";
        $query = $conexion->prepare($sql);
        $query->bind_param('ssssiiiisiiiiiisiii', $data['fecha'], $data['hora_inicio'], $data['hora_fin'], $data['lugar'], $data['categoria'], $data['subcategoria'], $data['causa'], $data['consecuencia'], $data['descripcion'], $data['consorcio'], $data['tipo_servicio'], $data['ruta'], $data['servicio'], $data['sentido'], $data['bus'], $data['conductor'], $data['tipo_kilometraje'], $data['kilometraje'], $data['carreras']/* , $data['auditoria'] */);
        return $query->execute();
    }



        public function selectCategorias() {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM categoria";
        $respuesta = mysqli_query($conexion, $sql);
        
        $categorias = array();
        while ($mostrar = mysqli_fetch_array($respuesta)) {
            $categorias[] = $mostrar;
        }
        return json_encode($categorias);
        }
        

        public function selectSubCategorias($id_categoria) {
            $conexion = Conexion::conectar();
            // Escapa el ID de la categoría para evitar inyección de SQL
            $id_categoria = mysqli_real_escape_string($conexion, $id_categoria); 
            $sql = "SELECT * FROM sub_categoria WHERE categoria=$id_categoria";
            $respuesta = mysqli_query($conexion, $sql);
            $subcategoria=array();
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                $subcategoria[]=$mostrar;
            }
            return json_encode($subcategoria);
        }
        public function selectCausa($id_subcategoria) {
            $conexion = Conexion::conectar();
            $id_subcategoria = mysqli_real_escape_string($conexion, $id_subcategoria); 
            $sql = "SELECT * FROM causa WHERE sub_categoria=$id_subcategoria";
            $respuesta = mysqli_query($conexion, $sql);
            $causa=array();
            while ($mostrar = mysqli_fetch_array($respuesta)) {
               $causa[]=$mostrar;
            }
            return json_encode($causa);
       
        }
        public function selectConsecuencia($id_causa) {
            $conexion = Conexion::conectar();
            $id_causa = mysqli_real_escape_string($conexion, $id_causa); 
            $sql = "SELECT * FROM consecuencia WHERE causa=$id_causa";
            $respuesta = mysqli_query($conexion, $sql);
            $consecuencia = array();
            while ($mostrar = mysqli_fetch_array($respuesta)) {
               $consecuencia[]=$mostrar;
            }
            return json_encode($consecuencia);
        }
        public function selectConsorcio() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM consorcio ";
            $respuesta = mysqli_query($conexion, $sql);
            $consorcio = array();
            while ($mostrar = mysqli_fetch_array($respuesta)) {
            $consorcio [] = $mostrar;}
            return json_encode($consorcio );
        }
        public function selectRuta($id_consorcio, $tipo_servicio) {
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
        public function selectSentido() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM sentido";
            $respuesta = mysqli_query($conexion, $sql);
            $sentido = array();
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                $sentido[] = $mostrar;
            }
            return json_encode($sentido);
        }
        public function selectTipoKilometraje() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM tipo_kilometraje";
            $respuesta = mysqli_query($conexion, $sql);
            $kilometraje = array();
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                $kilometraje[] = $mostrar;
            }
            return json_encode($kilometraje);
        }

        public function selectVid($id_consorcio, $tipo_servicio) {
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

        public function loadBusPlaca($numero_vid){
                $conexion = Conexion::conectar();
                $numero_vid= mysqli_real_escape_string($conexion,$numero_vid);
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
        
        public function selectDni($id_consorcio, $tipo_servicio) {
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
        
        public function loadCaccConductor($numero_dni){
                $conexion = Conexion::conectar();
                $numero_dni= mysqli_real_escape_string($conexion,$numero_dni);
                $sql = "SELECT * FROM conductor WHERE dni =?";
                $stmt = mysqli_prepare($conexion, $sql);
                mysqli_stmt_bind_param($stmt, "s", $numero_dni);
                mysqli_stmt_execute($stmt);
                $respuesta = mysqli_stmt_get_result($stmt);

                $caccConductor= array();
                while ($mostrar = mysqli_fetch_assoc($respuesta)) {
                    $caccConductor[] = $mostrar;
                }

                return json_encode($caccConductor);

        }
        
    }

?>