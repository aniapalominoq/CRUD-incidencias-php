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
        <form action="#" method="post" class="addIncidents__form">
            <!-- page one -->
            <div class="addIncidents__form-page slidepage">
                <h2 class="addIncidents__form-title">Datos de la Incidencia</h2>
                <div class="addIncidents__form-field">
                    <label for="date" class="addIncidents__form-label">Fecha</label>
                    <input name="date" type="date" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="time-on" class="addIncidents__form-label">Hora Inicio</label>
                    <input  name="time-on" type="time" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="time-off" class="addIncidents__form-label">Hora Fin</label>
                    <input  name="time-off" type="time" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="place-incidence" class="addIncidents__form-label">Lugar del incidente</label>
                    <input  name="place-incidence" type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field nextBtn">
                    <div class="addIncidents__form-btn">Siguiente</div>
                </div>
            </div>
            <!-- page two -->
            <div class="addIncidents__form-page ">
                <h2 class="addIncidents__form-title">Caracteristica y Descripcion del hecho</h2>
                <div class="addIncidents__form-field">
                    <label for="tipo" class="addIncidents__form-label">Tipo</label>
                    <select name="tipo" id="tipo" class="addIncidents__form-select">
                        <option value="value 1">value 1</option>
                        <option value="value 2">value 2</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="categoria" class="addIncidents__form-label">Categoria</label>
                    <select name="categoria" id="categoria" class="addIncidents__form-select">
                        <option  class="addIncidents__form-select-option" value="value 1">value 1</option>
                        <option class="addIncidents__form-select-option"  value="value 2">value 2</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="descripcion" class="addIncidents__form-label">Breve descripcion</label>
                    <textarea name="descripcion" class="addIncidents__form-textarea" rows="10" cols="50"></textarea>
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
                        <label for="nombre-consorcio" class="addIncidents__form-label">Nombre consorcio</label>
                        <select name="nombre-consorcio" id="nombre-consorcio" class="addIncidents__form-select">
                            <option class="addIncidents__form-select-option"  value="value 1">Lima vias</option>
                            <option class="addIncidents__form-select-option"  value="value 2">Peru Masivo</option>
                        </select>
                    </div>
                    <div class="addIncidents__form-subgroup">
                        <div class="addIncidents__form-field">
                            <label for="tipo-servicio" class="addIncidents__form-label">Tipo de servicio</label>
                            <select name="tipo-servicio" id="tipo-servicio" class="addIncidents__form-select">
                                <option class="addIncidents__form-select-option"  value="troncal">TRO</option>
                                <option class="addIncidents__form-select-option"  value="alimentador">ALI</option>
                            </select>
                        </div>
                        <div class="addIncidents__form-field">
                            <label for="ruta" class="addIncidents__form-label">Ruta</label>
                            <select name="ruta" id="ruta" class="addIncidents__form-select">
                                <option class="addIncidents__form-select-option"  value="TRO-ExtraX2">TRO-ExtraX2</option>
                                <option class="addIncidents__form-select-option"  value="TRO-ExtraSXN">TRO-ExtraSXN</option>
                            </select>
                        </div>
                    </div>
                </div>    
                <div class="addIncidents__form-group">
                    <div class="addIncidents__form-field">
                        <label for="numero-servicio" class="addIncidents__form-label">Número servicio</label>
                        <input  id="numero-servicio" name="numero-servicio" type="number" class="addIncidents__form-input">
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="direccion-viaje" class="addIncidents__form-label">Dirreccion de Viaje</label>
                        <select name="direccion-viaje" id="direccion-viaje" class="addIncidents__form-select">
                            <option class="addIncidents__form-select-option"  value="ESTE-OESTE">ESTE-OESTE</option>
                            <option class="addIncidents__form-select-option"  value="NORTE-SUR">NORTE-SUR</option>
                        </select>
                    </div>
                </div> 
                <div class="addIncidents__form-group">   
                    <div class="addIncidents__form-field">
                        <label for="" class="addIncidents__form-label">VID</label>
                        <input  name="" id=""type="text" class="addIncidents__form-input">
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="id-bus" class="addIncidents__form-label">Id bus</label>
                        <input  name="id-bus" id="id-bus"type="text" class="addIncidents__form-input">
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="placa" class="addIncidents__form-label">Número placa</label>
                        <input  name="placa" id="placa"type="text" class="addIncidents__form-input">
                    </div>
                </div>
                <div class="addIncidents__form-group"> 
                    <div class="addIncidents__form-subgroup">
                        <div class="addIncidents__form-field">
                            <label for="dni" class="addIncidents__form-label">DNI</label>
                            <input  name="dni" id="dni"type="text" class="addIncidents__form-input">
                        </div>
                        <div class="addIncidents__form-field">
                            <label for="cod-cacc" class="addIncidents__form-label"> Codigo CACC</label>
                            <input  name="cod-cacc" id="cod-cacc"type="text" class="addIncidents__form-input">
                        </div>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="conductor" class="addIncidents__form-label">Conductor</label>
                        <select name="conductor" id="conductor" class="addIncidents__form-select">
                            <option class="addIncidents__form-select-option"  value="value 1">PEREZ LOPEZ ALVARO</option>
                            <option class="addIncidents__form-select-option"  value="value 2">LOPEZ BUSTAMANTE JORGE ENRIQUE</option>
                        </select>
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
                    <label for="tipo-kilometraje" class="addIncidents__form-label">Tipo de Kilometraje</label>
                    <select name="tipo-kilometraje" id="tipo-kilometraje" class="addIncidents__form-select">
                        <option class="addIncidents__form-select-option"  value="value 1">value 1</option>
                        <option class="addIncidents__form-select-option"   value="value 2">value 2</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="kilometraje" class="addIncidents__form-label">Kilometraje</label>
                    <input  name="kilometraje" id="kilometraje" type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="numero-carreras" class="addIncidents__form-label"> Número de Carreras</label>
                    <input name="numero-carreras" id="numero-carreras" type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field btns">
                    <div class="addIncidents__form-btn prev-3 prev">Atras</div>
                    <div class="addIncidents__form-btn submit">Guardar</div>
                </div>
            </div>
        </form>
    </section>
</section>
    
    
       <!--  <div class=".addIncidents__main-copyright">
            &copy; 2023 - <span>Melania Palomino</span> All Rights Reserved.
        </div> -->
    </main>
   
    
