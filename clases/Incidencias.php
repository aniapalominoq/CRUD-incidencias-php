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

        public function selectConsecuencia($id_causa) {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM consecuencia WHERE causa=$id_causa";
            $respuesta = mysqli_query($conexion, $sql);
            $consecuencia = '<label for="consecuencia" class="addIncidents__form-label"> Seleccione Consecuencia</label><select name="consecuencia" id="consecuencia" class="addIncidents__form-select" required>';
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                 $consecuencia .= '<option 
                            value='.$mostrar['id_consecuencia'].'>'. 
                                $mostrar['consecuencia'] .
                            '</option>'; 
            }
            return  $consecuencia.= '</select>';
        }

          public function selectConsorcio() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM consorcio ";
            $respuesta = mysqli_query($conexion, $sql);
            $consorcio = '<label for="nombre-consorcio" class="addIncidents__form-label">Nombre consorcio</label><select  name="nombre-consorcio" id="nombre-consorcio"  class="addIncidents__form-select" required>';
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                 $consorcio  .= '<option 
                            value='.$mostrar['idconsorcio'].'>'. 
                                $mostrar['nombre_consorcio'] .
                            '</option>'; 
            }
            return $consorcio .= '</select>';
        }
    
            public function selectRuta($id_consorcio) {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM ruta WHERE id_consorcio=$id_consorcio";
            $respuesta = mysqli_query($conexion, $sql);
            $ruta = '<label for="ruta" class="addIncidents__form-label">Ruta</label><select name="ruta" id="ruta"   class="addIncidents__form-select" required>';
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                  $ruta  .= '<option 
                            value='.$mostrar['id_ruta'].'>'. 
                                $mostrar['abreviatura'] .
                            '</option>'; 
            }
            return  $ruta .= '</select>';
        }


                  public function selectSentido() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM sentido";
            $respuesta = mysqli_query($conexion, $sql);
            $sentido = '<label for="direccion-viaje" class="addIncidents__form-label">Sentido del viaje</label><select name="direccion-viaje" id="direccion-viaje"  class="addIncidents__form-select" required>';
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                  $sentido   .= '<option 
                            value='.$mostrar['idsentido'].'>'. 
                                $mostrar['sentido'] .
                            '</option>'; 
            }
            return  $sentido  .= '</select>';
        }
    
    
    public function selectTipoKilometraje() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM tipo_kilometraje";
            $respuesta = mysqli_query($conexion, $sql);
            $tipoKilometraje = '<label for="tipo-kilometraje" class="addIncidents__form-label">Tipo de Kilometraje</label><select name="tipo-kilometraje" id="tipo-kilometraje"   class="addIncidents__form-select" required>';
            while ($mostrar = mysqli_fetch_array($respuesta)) {
                  $tipoKilometraje   .= '<option 
                            value='.$mostrar['idtipo_kilometraje'].'>'. 
                                $mostrar['tipo_kilometraje'] .
                            '</option>'; 
            }
            return  $tipoKilometraje  .= '</select>';
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }

?>