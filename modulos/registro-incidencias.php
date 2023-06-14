
<section class="addIncidents__container">
    <header>Registrar Nueva incidencia</header>
    <!-- barra de progreso del formulario -->
    <div class="addIncidents__progress-bar">
        <div class="addIncidents__progress-step">
            <p class="addIncidents__progress-title">Datos </p>
            <div class="addIncidents__progress-bullet">
                <span class="addIncidents__progress-number">1</span>
            </div>
            <div class="addIncidents__progress-check">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon addIncidents__progress-svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96"/></svg>
            </div>
        </div>
        <div class="addIncidents__progress-step">
            <p class="addIncidents__progress-title">Caracteristicas y descripcion</p>
            <div class="addIncidents__progress-bullet">
                <span class="addIncidents__progress-number">2</span>
            </div>
            <div class="addIncidents__progress-check">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon addIncidents__progress-svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96"/></svg>
            </div>
        </div>
        <div class="addIncidents__progress-step">
            <p class="addIncidents__progress-title"> consorcio y servicio</p>
            <div class="addIncidents__progress-bullet">
                <span class="addIncidents__progress-number">3</span>
            </div>
            <div class="addIncidents__progress-check">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon addIncidents__progress-svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96"/></svg>
            </div>
        </div>
        <div class="addIncidents__progress-step">
            <p class="addIncidents__progress-title">Guardar</p>
            <div class="addIncidents__progress-bullet">
                <span class="addIncidents__progress-number">4</span>
            </div>
            <div class="addIncidents__progress-check">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon addIncidents__progress-svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96"/></svg>
            </div>
        </div>
        
    </div>

    <section class="addIncidents__form-outer">
        <form action="" class="addIncidents__form">
            <!-- page one -->
            <div class="addIncidents__form-page">
                <div class="addIncidents__form-title">page 1:</div>
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
                <div class="addIncidents__form-field">
                    <button class="addIncidents__form-btn1">Siguiente</button>
                </div>
            </div>
            <!-- page two -->
            <div class="addIncidents__form-page">
                <div class="addIncidents__form-title">page 2:</div>
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
                        <option value="value 1">value 1</option>
                        <option value="value 2">value 2</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="descripcion" class="addIncidents__form-label">Breve descripcion</label>
                    <input id="descripcion" name="descripcion" type="textarea" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field btns">
                    <button class="prev-1 addIncidents__form-btn2 prev">Atras</button>
                    <button class="nex-1 addIncidents__form-btn2 next">Siguiente</button>
                </div>
            </div>
            <!-- page 3 -->
            <div class="addIncidents__form-page">
                <div class="addIncidents__form-title">page 3:</div>
                <div class="addIncidents__form-field">
                    <label for="nombre-consorcio" class="addIncidents__form-label">Nombre consorcio</label>
                    <select name="nombre-consorcio" id="nombre-consorcio" class="addIncidents__form-select">
                        <option value="value 1">value 1</option>
                        <option value="value 2">value 2</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="tipo-servicio" class="addIncidents__form-label">Tipo de servicio</label>
                    <select name="tipo-servicio" id="tipo-servicio" class="addIncidents__form-select">
                        <option value="value 1">value 1</option>
                        <option value="value 2">value 2</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="numero-servicio" class="addIncidents__form-label">Número servicio</label>
                    <input  id="numero-servicio" name="numero-servicio" type="number" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="ruta" class="addIncidents__form-label">Ruta</label>
                    <select name="ruta" id="ruta" class="addIncidents__form-select">
                        <option value="value 1">value 1</option>
                        <option value="value 2">value 2</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="direccion-viaje" class="addIncidents__form-label">Dirreccion de Viaje</label>
                    <input  name="direccion-viaje" id="direccion-viaje"type="text" class="addIncidents__form-input">
                </div>
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
                <div class="addIncidents__form-field">
                    <label for="dni" class="addIncidents__form-label">DNI</label>
                    <input  name="dni" id="dni"type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="cod-cacc" class="addIncidents__form-label"> Codigo CACC</label>
                    <input  name="cod-cacc" id="cod-cacc"type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="conductor" class="addIncidents__form-label">Conductor</label>
                    <select name="conductor" id="conductor" class="addIncidents__form-select">
                        <option value="value 1">value 1</option>
                        <option value="value 2">value 2</option>
                    </select>
                </div>
                <div class="addIncidents__form-field btns">
                    <button class="prev-2 prev">Atras</button>
                    <button class="nex-2 next">Siguiente</button>
                </div>
            </div>
            <!-- page 4 -->
            <div class="addIncidents__form-page">
                <div class="addIncidents__form-title">page 4:</div>
                <div class="addIncidents__form-field">
                    <label for="tipo-kilometraje" class="addIncidents__form-label">Tipo de Kilometraje</label>
                    <select name="tipo-kilometraje" id="tipo-kilometraje" class="addIncidents__form-select">
                        <option value="value 1">value 1</option>
                        <option value="value 2">value 2</option>
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
                    <button class="prev-3 prev">Atras</button>
                    <button class="submit">Guardar</button>
                </div>
            </div>
        </form>
    </section>
</section>

    
