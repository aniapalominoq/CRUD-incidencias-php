<section class="downloadContainer">
    <header class="download__container-header">Descarga registro de incidencias</header>
    <form id="downloadForm" class="download__form" method="post">
        <div class="download__form-group">
            <div class="download__form-field">
                <label for="filterDate1" class="download__form-label">Desde</label>
                <input name="filterDate1" id="filterDate1" type="date" class="download__form-input">
            </div>
            <div class="download__form-field">
                <label for="filterDate2" class="download__form-label">Hasta</label>
                <input name="filterDate2" id="filterDate2" type="date" class="download__form-input">
            </div>
        </div>
        <div class="download__form-field">
            <label for="filterConsorcio" class="download__form-label">Consorcio:</label>
            <select id="filterConsorcio" name="filterConsorcio" class="download__form-select">
                <option class="download__form-select-option" value="">Seleccione consorcio</option>
                <option class="download__form-select-option" value="1">LIMA VIAS EXPRES</option>
                <option value="2">LIMA BUS INTERNACIONAL</option>
                <option class="download__form-select-option" value="3">TRANVIAL SAC</option>
                <option class="download__form-select-option" value="4">PERU MASIVO</option>
            </select>
        </div>
        <div class="download__form-field">
            <label for="filterTipo-servicio" class="download__form-label">Tipo de servicio</label>
            <select name="filterTipo-servicio" id="filterTipo-servicio" class="download__form-select">
                <option class="download__form-select-option" value="">Seleccione tipo serv.</option>
                <option class="download__form-select-option" value="1">TRONCAL</option>
                <option class="download__form-select-option" value="2">ALIMENTADOR</option>
            </select>
        </div>
        <div class="download__form-field">
            <label for="filterConductor" class="download__form-label">Conductor</label>
            <input name="filterConductor" id="filterConductor" type="text" class="download__form-input" placeholder="nombre del conductor">
        </div>
        <button type="submit" id="btnDescargar" class="download__form-btn">Descargar en Excel</button>


    </form>


</section>