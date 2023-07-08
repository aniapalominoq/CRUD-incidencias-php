<form action="">
    <div class="addIncidents__form-field">
        <label for="tipo-servicio" class="addIncidents__form-label">Tipo de servicio</label>
        <select name="tipo_servicio" id="tipo_servicio" class="addIncidents__form-select" required>
            <option class="addIncidents__form-select-option" value="">Seleccione tipo serv.</option>
            <option class="addIncidents__form-select-option" value="1">TRONCAL</option>
            <option class="addIncidents__form-select-option" value="2">ALIMENTADOR</option>
        </select>
    </div>
    <div class="addIncidents__form-group">
        <label for="ruta" class="addIncidents__form-label">Ruta:</label>
        <select id="ruta" name="ruta" class="addIncidents__form-select" required>
            <option value="">Seleccione una ruta</option>
        </select>
    </div>
    <div class="addIncidents__form-field">
        <label for="numero_servicio" class="addIncidents__form-label">Número servicio</label>
        <input id="numero_servicio" name="numero_servicio" type="number" class="addIncidents__form-input" placeholder="Número Servicio" required>
    </div>
    <div class="addIncidents__form-field">
        <label for="numero_servicio" class="addIncidents__form-label">Número servicio</label>
        <input id="numero_servicio" name="numero_servicio" type="number" class="addIncidents__form-input" placeholder="Número Servicio" required>
    </div>
    <div class="addIncidents__form-field">
        <label for="id_bus" class="addIncidents__form-label">Id bus</label>
        <input name="id_bus" id="id_bus" type="text" class="addIncidents__form-input" placeholder="id bus" disabled>
    </div>
    <div class="addIncidents__form-field">
        <label for="consorcio" class="addIncidents__form-label">Consorcio:</label>
        <select id="consorcio" name="consorcio" class="addIncidents__form-select" required>
            <option value="">Seleccione un consorcio</option>
        </select>
    </div>
</form>