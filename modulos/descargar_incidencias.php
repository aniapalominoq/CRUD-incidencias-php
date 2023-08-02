<section class="downloadContainer">
    <header class="addIncidents__container-header">Descarga registro de incidencias</header>
    <form id="downloadForm" method="post">
        <div class="addIncidents__form-group">
            <div class="addIncidents__form-field">
                <label for="filterDate1" class="addIncidents__form-label">desde</label>
                <input name="filterDate1" id="filterDate1" type="date" class="addIncidents__form-input" >
            </div>
            <div class="addIncidents__form-field">
                <label for="filterDate2" class="addIncidents__form-label">hasta</label>
                <input name="filterDate2" id="filterDate2" type="date" class="addIncidents__form-input" >
            </div>
        </div>
        <div class="addIncidents__form-field">
            <label for="filterConsorcio" class="addIncidents__form-label">Consorcio:</label>
            <select id="filterConsorcio" name="filterConsorcio" class="addIncidents__form-select">
                <option class="addIncidents__form-select-option" value="">Seleccione consorcio</option>
                <option class="addIncidents__form-select-option" value="1">LIMA VIAS EXPRES</option>
                <option value="2">LIMA BUS INTERNACIONAL</option>
                <option class="addIncidents__form-select-option" value="3">TRANVIAL SAC</option>
                <option class="addIncidents__form-select-option" value="4">PERU MASIVO</option>
            </select>
        </div>
        <div class="addIncidents__form-field">
            <label for="filterTipo-servicio" class="addIncidents__form-label">Tipo de servicio</label>
            <select name="filterTipo-servicio" id="filterTipo-servicio" class="addIncidents__form-select">
                <option class="addIncidents__form-select-option" value="">Seleccione tipo serv.</option>
                <option class="addIncidents__form-select-option" value="1">TRONCAL</option>
                <option class="addIncidents__form-select-option" value="2">ALIMENTADOR</option>
            </select>
        </div>
        <div class="addIncidents__form-field">
            <label for="filterConductor" class="addIncidents__form-label">Conductor</label>
            <input name="filterConductor" id="filterConductor" type="text" class="addIncidents__form-input" placeholder="nombre del conductor">
        </div>
        <button type="submit" id="btnDescargar" class="addIncidents__form-btn">Descargar en Excel</button>


    </form>


</section>
