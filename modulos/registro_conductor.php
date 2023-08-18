<section class="addDriver__section">
    <h1 class="addDriver__h1"> Registro de Nuevos Conductores</h1>
    <form id="addDriverForm" class="addDriver__form">
        <div class="addDriver__form-group">
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label">Consorcio</label>
                <select id="" name="" class="addDriver__form-select">
                    <option value="" class="addDriver__form-option">Seleccione Consorcio</option>
                    <option value="1" class="addDriver__form-option"> LIMA VIAS EXPRES</option>
                    <option value="2" class="addDriver__form-option"> LIMA BUS INTERNACIONAL</option>
                    <option value="3" class="addDriver__form-option"> TRANSVIAL SAC</option>
                    <option value="4" class="addDriver__form-option"> PERU MASIVO</option>
                </select>
            </div>
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label">Tipo de Bus</label>
                <select id="" name="" class="addDriver__form-select">
                    <option value="" class="addDriver__form-option">Seleccione Tipo de Bus</option>
                    <option value="1" class="addDriver__form-option">TRONCAL</option>
                    <option value="2" class="addDriver__form-option">ALIMETADOR</option>
                </select>
            </div>
        </div>
        <div class="addDriver__form-group">
            <h4 class="addDriver__h4">Datos del Conductor</h4>
        </div>
        <div class="addDriver__form-group">
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label">Documento de Identidad</label>
                <input id="" name="" type="text" class="addDriver__form-input" placeholder="DNI">
            </div>
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label">Nombre Completo</label>
                <input id="" name="" type="text" class="addDriver__form-input" placeholder="Nombre Conductor">
            </div>
        </div>
        <div class="addDriver__form-group">

            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label"> Edad</label>
                <input id="" name="" type="number" min="18" max="99" class="addDriver__form-input" placeholder="Edad en años">
            </div>
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label">Código CAC</label>
                <input id="" name="" type="text" class="addDriver__form-input" placeholder="CAC">
            </div>
        </div>
        <div class="addDriver__form-group">
            <h4 class="addDriver__h4">Otros datos </h4>
        </div>
        <div class="addDriver__form-group">
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label"> Número Licencia de conducción</label>
                <input id="" name="" type="text" class="addDriver__form-input" placeholder="N° Licencia">
            </div>
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label">Fecha de alta</label>
                <input id="" name="" type="date" class="addDriver__form-input" placeholder="Fecha de alta">
            </div>
        </div>
        <div class="addDriver__form-group">
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label">Estado</label>
                <select id="" name="" class="addDriver__form-select">
                    <option value="" class="addDriver__form-option">Seleccione estado</option>
                    <option value="1" class="addDriver__form-option">ACTIVO</option>
                    <option value="2" class="addDriver__form-option">SUSPENDIDO</option>
                    <option value="3" class="addDriver__form-option">CESADO</option>
                </select>
            </div>
            <div class="addDriver__form-field">
                <label for="" class="addDriver__form-label">Restricciones de licencia</label>
                <select id="" name="" class="addDriver__form-select">
                    <option value="" class="addDriver__form-option">Seleccione una restriccion</option>
                    <option value="1" class="addDriver__form-option">SIN LENTES</option>
                    <option value="2" class="addDriver__form-option">CON LENTES</option>
                    <option value="3" class="addDriver__form-option">OTROS</option>
                </select>
            </div>
        </div>
        <button type="submit" class="addDriver__button">Guardar</button>

    </form>
</section>