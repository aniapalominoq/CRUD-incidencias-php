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
            $select = '<label for="categoria" class="addIncidents__form-label">Selecciona categoria</label>
                        <select  name="categoria" id="categoria" class="addIncidents__form-select" required>';

            while ($mostrar = mysqli_fetch_array($respuesta)) {
                $select .= '<option 
                            value='.$mostrar['id_categoria'].'>'. 
                                $mostrar['categoria'] .
                            '</option>'; 
            }
            return $select .= '</select>';
        }

public function selectSubCategorias($id_categoria) {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM sub_categoria WHERE categoria=$id_categoria";
            $respuesta = mysqli_query($conexion, $sql);
            $subCategorias = '<label for="subcategoria" class="addIncidents__form-label"> seleccione subcategoria</label><select name="subcategoria" id="subcategoria" class="addIncidents__form-select" required>';
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                $subCategorias .= '<option 
                            value='.$mostrar['id_subcategoria'].'>'. 
                                $mostrar['sub_categoria'] .
                            '</option>'; 
            }
            return $subCategorias .= '</select>';
        }
    
        public function selectCausa($id_subcategoria) {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM causa WHERE sub_categoria=$id_subcategoria";
            $respuesta = mysqli_query($conexion, $sql);
            $causa = '<label for="causa" class="addIncidents__form-label"> seleccione causa</label><select name="causa" id="causa" class="addIncidents__form-select" required>';
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                 $causa .= '<option 
                            value='.$mostrar['idcausa'].'>'. 
                                $mostrar['causa'] .
                            '</option>'; 
            }
            return  $causa .= '</select>';
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }

?>