<section class="resgistro__section">
    <h1 class="resgistro__h1">Registro de Usuario</h1>
    <form id="resgistroUser" method="POST" class="resgistro__form">
        <div class="resgistro__form-field">
            <label for="nameUser" class="resgistro__label">Nombre usuario</label>
            <input id="nameUser" type="text" class="resgistro__input" name="nameUser" placeholder="Nombre usuario">
        </div>
        <div class="resgistro__form-field">
            <label for=" rolUser" class="resgistro__label"> Seleccione su Rol</label>
            <select name="rolUser" id="rolUser" class="resgistro__select">
                <option class="resgistro__select-option" value="">selecione una opción</option>
                <option class="resgistro__select-option" value="controlador">Controlador</option>
                <option class="resgistro__select-option" value="supervisor">Supervisor</option>
            </select>
        </div>
        <div class="resgistro__form-field">
            <label for=" passwordUser" class="resgistro__label">Contraseña</label>
            <input id="passwordUser" type="password" class="resgistro__input" name="passwordUser" placeholder="***********">
        </div>
        <button type="submit" class="resgistro__button">Registrarse</button>
    </form>
    <!--  <table class="resgistro__table">
        <tr class="resgistro__tr">
            <th class="resgistro__th">N°</th>
            <th class="resgistro__th">Usuario</th>
            <th class="resgistro__th">Contraseña</th>
            <th class="resgistro__th">Acciones</th>
        </tr>
        <tr>
            <td class="resgistro__td">1</td>
            <td class="resgistro__td">jose perez</td>
            <td class="resgistro__td">contraseña1</td>
            <td class="resgistro__td">
                <div class=" listContainer__btns">
                    <button class="listContainer__btn-ver">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svgVer" viewBox="0 0 512 512">
                            <path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                        </svg>
                    </button>
                    <button data-id="${id}" class="listContainer__btn-editar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svgEditar" viewBox="0 0 512 512">
                            <path d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            <path d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z" fill="#fff" />
                        </svg>
                    </button>
                    <button data-id="${id}" class="listContainer__btn-eliminar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svgEliminar" viewBox="0 0 512 512">
                            <path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352" />
                            <path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        </svg>
                    </button>
                </div>
            </td>
        </tr>
        <tr>
            <td class="resgistro__td">2</td>
            <td class="resgistro__td">Pelimpo Pompeyo</td>
            <td class="resgistro__td">contraseña2</td>
            <td class="resgistro__td">
                <div class="listContainer__btns">
                    <button class="listContainer__btn-ver">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svgVer" viewBox="0 0 512 512">
                            <path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                        </svg>
                    </button>
                    <button data-id="${id}" class="listContainer__btn-editar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svgEditar" viewBox="0 0 512 512">
                            <path d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            <path d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z" fill="#fff" />
                        </svg>
                    </button>
                    <button data-id="${id}" class="listContainer__btn-eliminar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svgEliminar" viewBox="0 0 512 512">
                            <path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352" />
                            <path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        </svg>
                    </button>
                </div>
            </td>
        </tr>
        <!-- Agrega más filas aquí si es necesario 
    </table>
    -->
</section>