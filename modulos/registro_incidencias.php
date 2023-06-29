
<main class="addIncidents__main">
<section class="addIncidents__container">
    <header   class="addIncidents__container-header">Registrar Nueva incidencia</header>
    <!-- barra de progreso del formulario -->
    <section class="addIncidents__progress-bar">
        <div class="addIncidents__progress-step">
            <p class="addIncidents__progress-title">Paso</p>
            <div class="addIncidents__progress-bullet">
                <span class="addIncidents__progress-number">1</span>
            </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon addIncidents__progress-check" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=60px d="M416 128L192 384l-96-96"/></svg>
        </div>
        <div class="addIncidents__progress-step">
            <p class="addIncidents__progress-title">Paso</p>
            <div class="addIncidents__progress-bullet">
                <span class="addIncidents__progress-number">2</span>
            </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon addIncidents__progress-check" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=60px d="M416 128L192 384l-96-96"/></svg>
            
        </div>
        <div class="addIncidents__progress-step">
            <p class="addIncidents__progress-title">Paso</p>
            <div class="addIncidents__progress-bullet">
                <span class="addIncidents__progress-number">3</span>
            </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon addIncidents__progress-check" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=60px d="M416 128L192 384l-96-96"/></svg>
            
        </div>
        <div class="addIncidents__progress-step">
            <p class="addIncidents__progress-title">Paso</p>
            <div class="addIncidents__progress-bullet">
                <span class="addIncidents__progress-number">4</span>
            </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon addIncidents__progress-check" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=60px d="M416 128L192 384l-96-96"/></svg>
        </div>
        
    </section>
    <!-- FORMULARIO -->
    <section class="addIncidents__form-outer">
        <form id="addIncidents__form" action="../servidor/incidencia/agregar.php" method="post" class="addIncidents__form">
            <!-- page one -->
            <div class="addIncidents__form-page slidepage">
                <h2 class="addIncidents__form-title">Datos de la Incidencia</h2>
                <div class="addIncidents__form-field">
                    <label for="date" class="addIncidents__form-label">Fecha</label>
                    <input  id="date" name="date" type="date" class="addIncidents__form-input" required>
                </div>
                <div class="addIncidents__form-field">
                    <label for="time_on" class="addIncidents__form-label">Hora Inicio</label>
                    <input id="time_on"  name="time_on" type="time" class="addIncidents__form-input" required >
                </div>
                <div class="addIncidents__form-field">
                    <label for="time_off" class="addIncidents__form-label">Hora Fin</label>
                    <input id="time_off" name="time_off" type="time" class="addIncidents__form-input" required>
                </div>
                <div class="addIncidents__form-field">
                    <label for="place_incidence" class="addIncidents__form-label">Lugar del incidente</label>
                    <input id="place_incidence" name="place_incidence" type="text" class="addIncidents__form-input" placeholder="lugar del incidente" required>
                </div>
                <div class="addIncidents__form-field nextBtn">
                    <div class="addIncidents__form-btn">Siguiente</div>
                </div>
            </div>
            <!-- page two -->
            <div class="addIncidents__form-page ">
                <h2 class="addIncidents__form-title">Caracteristica y Descripcion del hecho</h2>
                <div class="addIncidents__form-field">
                    <label for="categoria" class="addIncidents__form-label">Categoria:</label>
                    <select id="categoria" name="categoria" class="addIncidents__form-select" required >
                        <option value="">Seleccione una categoría</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="subcategoria" class="addIncidents__form-label">subcategoria :</label>
                    <select id="subcategoria" name="subcategoria" class="addIncidents__form-select" required >
                        <option value="">Seleccione una subcategoria</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="causa" class="addIncidents__form-label">Causa:</label>
                    <select id="causa" name="causa" class="addIncidents__form-select" required >
                        <option value="">Seleccione una causa</option>
                    </select>
                </div>
                 <div class="addIncidents__form-field">
                    <label for="consecuencia" class="addIncidents__form-label">Consecuencia:</label>
                    <select id="consecuencia" name="consecuencia" class="addIncidents__form-select" required >
                        <option value="">Seleccione una consecuencia</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="descripcion" class="addIncidents__form-label">Breve descripcion</label>
                    <textarea id="descripcion" name="descripcion" class="addIncidents__form-textarea" rows="10" cols="50" placeholder="descripcion"></textarea>
                </div>
                <div class="addIncidents__form-field btns">
                    <div class="addIncidents__form-btn prev-1 prev">Atras</div>
                    <div class="addIncidents__form-btn next-1 next">Siguiente</div>
                </div>
            </div>
            <!-- page 3 -->
            <div class="addIncidents__form-page ">
                <h2 class="addIncidents__form-title">Descripcion de consorcio y servicio</h2>
                <div class="addIncidents__form-group">
                    <div class="addIncidents__form-field">
                        <label for="consorcio" class="addIncidents__form-label">Consorcio:</label>
                        <select id="consorcio" name="consorcio" class="addIncidents__form-select" required >
                            <option value="">Seleccione un consorcio</option>
                        </select>
                    </div> 
                    <div class="addIncidents__form-field">
                            <label for="tipo-servicio" class="addIncidents__form-label">Tipo de servicio</label>
                            <select name="tipo_servicio" id="tipo_servicio" class="addIncidents__form-select" required>
                                <option class="addIncidents__form-select-option"  value="">Seleccione tipo serv.</option>
                                <option class="addIncidents__form-select-option"  value="1">TRO</option>
                                <option class="addIncidents__form-select-option"  value="2">ALI</option>
                            </select>
                    </div>
                </div>  
                <div class="addIncidents__form-group">
                        <div class="addIncidents__form-field">
                            <label for="ruta" class="addIncidents__form-label">Ruta:</label>
                            <select id="ruta" name="ruta" class="addIncidents__form-select" required >
                                <option value="">Seleccione una ruta</option>
                            </select>
                        </div>
                        <div class="addIncidents__form-field">
                            <label for="sentido" class="addIncidents__form-label">Sentido:</label>
                            <select id="sentido" name="sentido" class="addIncidents__form-select" required >
                                <option value="">Seleccione una sentido</option>
                            </select>
                        </div>
                        <div class="addIncidents__form-field">
                            <label for="numero_servicio" class="addIncidents__form-label">Número servicio</label>
                            <input  id="numero_servicio" name="numero_servicio" type="number" class="addIncidents__form-input" placeholder="Número Servicio" required>
                        </div>
                </div>    
                <div class="addIncidents__form-group">   
                    <div class="addIncidents__form-field">
                        <label for="vid" class="addIncidents__form-label">VID</label>
                        <input  list="opcionesVid"  name="vid" id="vid" type="text" placeholder="cod. vid" class="addIncidents__form-input" required>
                        <datalist id="opcionesVid" class="addIncidents__form-input-datalist">
                            <option value="">
                        </datalist>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="id_bus" class="addIncidents__form-label">Id bus</label>
                        <input  name="id_bus" id="id_bus"type="text" class="addIncidents__form-input"  placeholder="id bus" disabled >
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="placa" class="addIncidents__form-label">Número placa</label>
                        <input  name="placa" id="placa" type="text" class="addIncidents__form-input" placeholder="placa de bus" disabled>
                    </div>
                </div>
                <div class="addIncidents__form-group"> 
                    <div class="addIncidents__form-field">
                        <label for="dni" class="addIncidents__form-label">DNI</label>
                        <input list='opcionesDni' name="dni" id="dni" type="text" placeholder="número de dni" class="addIncidents__form-input" required>
                         <datalist id="opcionesDni" class="addIncidents__form-input-datalist">
                            <option value="">
                        </datalist>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="cod_cacc" class="addIncidents__form-label"> Codigo CACC</label>
                        <input  name="cod_cacc" id="cod_cacc"type="text" class="addIncidents__form-input" placeholder=" cod. cacc"  disabled>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="conductor" class="addIncidents__form-label">Conductor</label>
                         <input  name="conductor" id="conductor" type="text" class="addIncidents__form-input" placeholder="nombre del conductor"  disabled>
                    </div>
                </div>
                <div class="addIncidents__form-field btns">
                    <div class="addIncidents__form-btn prev-2 prev">Atras</div>
                    <div class="addIncidents__form-btn next-2 next">Siguiente</div>
                </div>
            </div>
            <!-- page 4 -->
            <div class="addIncidents__form-page ">
                <h2 class="addIncidents__form-title">Kilometraje</h2>
                <div class="addIncidents__form-field">
                    <label for="tipokilometraje" class="addIncidents__form-label">Tipo Kilometraje:</label>
                    <select id="tipokilometraje" name="tipokilometraje" class="addIncidents__form-select" required >
                        <option value="">Seleccione kilometraje</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="kilometraje" class="addIncidents__form-label">Kilometraje</label>
                    <input  name="kilometraje" id="kilometraje" type="number" class="addIncidents__form-input" placeholder="km" required>
                </div>
                <div class="addIncidents__form-field">
                    <label for="numero_carreras" class="addIncidents__form-label"> Número de Carreras</label>
                    <input name="numero_carreras" id="numero_carreras" type="number" class="addIncidents__form-input" placeholder="Número de Carreras" >
                </div>
                <div class="addIncidents__form-field btns">
                    <div class="addIncidents__form-btn prev-3 prev">Atras</div>
                    <input class="addIncidents__form-btn submit" type="submit" >
                </div>
            </div>
        </form>
    </section>
</section>
    
    
       <!--  <div class=".addIncidents__main-copyright">
            &copy; 2023 - <span>Melania Palomino</span> All Rights Reserved.
        </div> -->
    </main>
   
