<section class="downloadContainer">
    <header class="addIncidents__container-header">Descarga registro de incidencias</header>
    <form action="#">
        <div class="addIncidents__form-group">
            <div class="addIncidents__form-field">
                <label for="filterDate1" class="addIncidents__form-label">desde</label>
                <input name="filterDate1" id="filterDate1" type="date" class="addIncidents__form-input">
            </div>
            <div class="addIncidents__form-field">
                <label for="filterDate2" class="addIncidents__form-label">hasta</label>
                <input name="filterDate2" id="filterDate2" type="date" class="addIncidents__form-input">
            </div>
        </div>
        <div class="addIncidents__form-field">
            <label for="consorcio" class="addIncidents__form-label">Consorcio:</label>
            <select id="consorcio" name="consorcio" class="addIncidents__form-select">
                <option value="">Seleccione un consorcio</option>
            </select>
        </div>
        <div class="addIncidents__form-field">
            <label for="tipo-servicio" class="addIncidents__form-label">Tipo de servicio</label>
            <select name="tipo_servicio" id="tipo_servicio" class="addIncidents__form-select">
                <option class="addIncidents__form-select-option" value="">Seleccione tipo serv.</option>
                <option class="addIncidents__form-select-option" value="1">TRONCAL</option>
                <option class="addIncidents__form-select-option" value="2">ALIMENTADOR</option>
            </select>
        </div>
        <div class="addIncidents__form-field">
            <label for="conductor" class="addIncidents__form-label">Conductor</label>
            <input name="conductor" id="conductor" type="text" class="addIncidents__form-input" placeholder="nombre del conductor">
        </div>
        <input class="addIncidents__form-btn submit" type="submit" value="Descargar">
    </form>
    <div id="downloadContainer-tabla"></div>

</section>