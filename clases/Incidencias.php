<?php
include "Conexion.php";
class Incidencias extends Conexion{
    /* public function agregarIncidencias($data) {
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO incidencia (idincidencia, 
                                            fecha, 
                                            hora_inicio,hora_fin,lugar,categoria,subcategoria,causa,consecuencia, descripción,consorcio,tipo_servicio,ruta,servicio,sentido,bus,conductor,tipo_kilometraje,kilometraje,carreras,auditorias) 
                            VALUES (?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('iss', $data['idincidencia'], 
                                    $data['fecha'], 
                                    $data['hora_inicio'],
                                    $data['hora_fin'],
                                    $data['lugar'],
                                    $data['categoria'],
                                    $data['subcategoria'],
                                    $data['causa'],
                                    $data['consecuencia'],
                                    $data['descripción'],
                                    $data['consorcio'],
                                    $data['tipo_servicio'],
                                    $data['ruta'],
                                    $data['servicio'],
                                    $data['sentido'],
                                    $data['bus'],
                                    $$data['tipo_kilometraje'],
                                    $data['kilometraje'],
                                    $data['carreras'],
                                    $data['auditorias'])
            return $query->execute();
        } */
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
        public function selectRuta($id_consorcio) {
            $conexion = Conexion::conectar();
            $id_consorcio = mysqli_real_escape_string($conexion, $id_consorcio);
            $sql = "SELECT * FROM ruta WHERE id_consorcio=$id_consorcio";
            $respuesta = mysqli_query($conexion, $sql);
            $ruta = array();
            while ($mostrar = mysqli_fetch_array($respuesta)) {
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
    

    }

?>