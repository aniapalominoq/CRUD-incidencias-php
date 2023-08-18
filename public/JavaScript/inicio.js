
/*  para el menu boton de hamburguesa */
const navigation = document.querySelector('.inicio__navegation');
const toggles=document.querySelector('.inicio__navegation-toggle');
    toggles.onclick=function(){
        navigation.classList.toggle('active');
}
        // Función para verificar y añadir la clase "mobile" cuando el tamaño del dispositivo cambia
        function updateClass() {
            const contentDiv = document.querySelector('.inicio__navegation');
            if (window.innerWidth <= 991) {
                contentDiv.classList.remove('active');
            } else {
                contentDiv.classList.add('active');
            }
        }

        // Verificar el tamaño del dispositivo al cargar la página
        updateClass();

        // Agregar un evento "resize" para verificar el tamaño del dispositivo en tiempo real
        window.addEventListener('resize', updateClass);
/* ------------------------FIN ----------------------- */

/* agregamos estilos a li:active para que cuando el usuario este mantega el color de fondo */
// Función para resaltar el enlace activo
function highlightActiveLink() {
  const navLinks = document.querySelectorAll('.inicio__navegation-li a');

  // Recorrer todos los enlaces y aplicar la clase activa al enlace correspondiente
  navLinks.forEach(link => {
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Evitar el comportamiento predeterminado del enlace

      // Eliminar la clase activa de todos los enlaces
      navLinks.forEach(link => link.parentElement.classList.remove('inicio__navegation-li-active'));

      // Agregar la clase activa solo al enlace que se hizo clic
      this.parentElement.classList.add('inicio__navegation-li-active');
    });
  });
}

// Ejecutar la función al cargar la página
highlightActiveLink();

/* fin------------------- */


/* para la barra de progreso del formulario paso1->paso2->paso3->paso->4 */
/* leemos los elementos  */
const contenidoDinamico = document.getElementById('contenido-dinamico');
const slidePage = document.querySelector(".slidepage");
const nextBtn1 = document.querySelector(".nextBtn");
const prevBtn2 = document.querySelector(".prev-1");
const nextBtn2 = document.querySelector(".next-1");
const prevBtn3 = document.querySelector(".prev-2");
const nextBtn3 = document.querySelector(".next-2");
const prevBtn4 = document.querySelector(".prev-3");
const submitBtn = document.getElementById("addIncidents__btn");
const progressText = document.querySelectorAll(".addIncidents__progress-title");
const progressCheck = document.querySelectorAll(".addIncidents__progress-check");
const bullet = document.querySelectorAll(".addIncidents__progress-bullet");

let max = 4;
let current = 1;

function validateForm1() {
  const valorForm1 = document.getElementById('addIncidents__date').value;
  const valorForm2 = document.getElementById('time_on').value;
  const valorForm3 = document.getElementById('time_off').value;
  const valorForm4 = document.getElementById('place_incidence').value;

  if (valorForm1 !== '' && valorForm2 !== '' && valorForm3 !== '' && valorForm4 !== '') {
    return true;
  } else {
    showErrorMessage("Por favor, complete todos los campos requeridos");
    return false;
  }
}

function validateForm2() {
  const valorForm5 = document.getElementById('categoria').value;
  const valorForm6 = document.getElementById('subcategoria').value;
  const valorForm7 = document.getElementById('causa').value;
  const valorForm8 = document.getElementById('consecuencia').value;
  const valorForm9 = document.getElementById('descripcion').value;

  if (valorForm5 !== '' && valorForm6 !== '' && valorForm7 !== '' && valorForm8 !== '' && valorForm9 !== '') {
    return true;
  } else {
    showErrorMessage("Por favor, complete todos los campos requeridos");
    return false;
  }
}

function validateForm3() {
  const valorForm10 = document.getElementById('consorcio').value;
  const valorForm11 = document.getElementById('tipo_servicio').value;
  const valorForm12 = document.getElementById('ruta').value;
  const valorForm13 = document.getElementById('numero_servicio').value;
  const valorForm14 = document.getElementById('sentido').value;
  const valorForm15 = document.getElementById('vid').value;
  const valorForm16 = document.getElementById('dni').value;

  if (valorForm10 !== '' && valorForm11 !== '' && valorForm12 !== '' && valorForm13 !== '' && valorForm14 !== '' && valorForm15 !== '' && valorForm16 !== '') {
    return true;
  } else {
    showErrorMessage("Por favor, complete todos los campos requeridos");
    return false;
  }
}

function validateForm4() {
  const valorForm17 = document.getElementById('tipokilometraje').value;
  const valorForm18 = document.getElementById('kilometraje').value;
  const valorForm19 = document.getElementById('numero_carreras').value;

  if (valorForm17 !== '' && valorForm18 !== '' && valorForm19 !== '') {
    return true;
  } else {
    showErrorMessage("Por favor, complete todos los campos requeridos");
    return false;
  }
}

function showErrorMessage(message) {
    Swal.fire({
              icon: 'warning',
        title: 'Campos requeridos vacíos',
        text:message, 
    confirmButtonText: 'Aceptar',
    toast: true,
    position: 'top-right',
    didOpen: () => {
      const button = Swal.getPopup().querySelector('.swal2-confirm');;
      button.style.backgroundColor = '#F14668';
      button.style.border = 'none';
      button.style.boxShadow = 'none';
    }
  });
}

nextBtn1.addEventListener("click", () => {
  if (validateForm1()) {
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add('spot-light');
    progressText[current - 1].classList.add('spot-light');
    progressCheck[current - 1].classList.add('spot-light');
    current += 1;
  }
});

nextBtn2.addEventListener("click", () => {
  if (validateForm2()) {
    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add('spot-light');
    progressText[current - 1].classList.add('spot-light');
    progressCheck[current - 1].classList.add('spot-light');
    current += 1;
  }
});

nextBtn3.addEventListener("click", () => {
  if (validateForm3()) {
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add('spot-light');
    progressText[current - 1].classList.add('spot-light');
    progressCheck[current - 1].classList.add('spot-light');
    current += 1;
  }
});


 submitBtn.addEventListener("click", async () => {
  if (validateForm4()) { // Validar el formulario antes de proceder al siguiente paso
    bullet[current - 1].classList.add('spot-light');
    progressText[current - 1].classList.add('spot-light');
    progressCheck[current - 1].classList.add('spot-light');
      current += 1;
    // Guardar los datos del formulario
      await guardarDatosFormulario();
     
  }
});


/* ------------------------------------------- */
prevBtn2.addEventListener("click",  ()=> {
      
    slidePage.style.marginLeft = "0%";
      bullet[current - 2].classList.remove('spot-light');
     progressText[current - 2].classList.remove('spot-light');
    progressCheck[current - 2].classList.remove('spot-light');
    current -= 1;
})

prevBtn3.addEventListener("click", () =>{
    
    slidePage.style.marginLeft = "-25%";
       bullet[current - 2].classList.remove('spot-light');
     progressText[current - 2].classList.remove('spot-light');
    progressCheck[current - 2].classList.remove('spot-light');
    current -= 1;
    
})
prevBtn4.addEventListener("click",  () =>{/*  */
    slidePage.style.marginLeft = "-50%";
       bullet[current - 2].classList.remove('spot-light');
     progressText[current - 2].classList.remove('spot-light');
    progressCheck[current - 2].classList.remove('spot-light');
    current -= 1;
})

/* ---------------------FIN --------------------------- */
/* para los select anidados del fomulario */

const bodyIncio = document.getElementById('inicio__body');

// Obtenemos las  referencias a los select
const categoriaSelect = document.getElementById('categoria');
const subcategoriaSelect = document.getElementById('subcategoria');
const causaSelect = document.getElementById('causa');
const consecuenciaSelect = document.getElementById('consecuencia');
const consorcioSelect = document.getElementById('consorcio');
const rutaSelect = document.getElementById('ruta');
const sentidoSelect = document.getElementById('sentido');
const tipokilometrajeSelect = document.getElementById('tipokilometraje');
const tipoServicioSelect = document.getElementById('tipo_servicio');
const opcionesVidSelect = document.getElementById('opcionesVid');
const inputVid=document.getElementById('vid'); 
const inputBus= document.getElementById('id_bus');
const inputPlaca = document.getElementById('placa');
const opcionesDniSelect = document.getElementById('opcionesDni');
const inputDni=document.getElementById('dni'); 
const inputCacc= document.getElementById('cod_cacc');
const inputConductor = document.getElementById('conductor');


// funcion generica para cargar los select del formulario  con fetch
async function cargarOpciones(selectElement, url, valueKey, textKey, extraCallback) {
    try {
        const response = await fetch(url);
        const data = await response.json();

        selectElement.innerHTML = `<option value="" class="addIncidents__form-option">Seleccione una opción</option>`;

        data.forEach(optionData => {
            const option = document.createElement('option');
            option.value = optionData[valueKey];
            option.textContent = optionData[textKey];
            selectElement.appendChild(option);
        });

        if (typeof extraCallback === 'function') {
            extraCallback(data);
        }
    } catch (error) {
        console.error('Error al cargar las opciones:', error);
    }
}

// Event listener para cargar CACC y nombre del conductor al llenar el campo DNI
inputDni.addEventListener('input', () => {
    const valueDni = inputDni.value;
    if (valueDni) {
        cargarOpciones(
            inputCacc,
            `../../servidor/incidencia/cargar_cacc_conductor.php?numero_dni=${valueDni}`,
            '',
            '',
            async (data) => {
                inputCacc.value = '';
                inputConductor.value = '';
                inputCacc.value = data[0].cacc;
                inputConductor.value = data[0].nombre;
            }
        );
    }
});

// Event listener para cargar opciones de DNI cuando se selecciona un consorcio o tipo de servicio
const consorcioTipoListener = () => {
    const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
    opcionesDniSelect.innerHTML = '';
    inputDni.value = '';
    inputCacc.value = '';
    inputConductor.value = '';

    if (consorcioId && tipoId) {
        cargarOpciones(
            opcionesDniSelect,
            `../../servidor/incidencia/cargar_dni.php?consorcio_id=${consorcioId}&id_tipo=${tipoId}`,
            '',
            '',
            async (data) => {
                opcionesDniSelect.innerHTML = '';
                data.forEach(numeroDni => {
                    const option = document.createElement('option');
                    option.value = numeroDni;
                    opcionesDniSelect.appendChild(option);
                });
            }
        );
    }
};

consorcioSelect.addEventListener('change', consorcioTipoListener);
tipoServicioSelect.addEventListener('change', consorcioTipoListener);

// Event listener para cargar opciones de VID cuando se selecciona un consorcio o tipo de servicio
const consorcioTipoVidListener = () => {
    const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
    opcionesVidSelect.innerHTML = '';
    inputVid.value = '';
    inputBus.value = '';
    inputPlaca.value = '';

    if (consorcioId && tipoId) {
        cargarOpciones(
            opcionesVidSelect,
            `../../servidor/incidencia/cargar_vid.php?consorcio_id=${consorcioId}&id_tipo=${tipoId}`,
            '',
            '',
            async (data) => {
                opcionesVidSelect.innerHTML = '';
                data.forEach(numeroVid => {
                    const option = document.createElement('option');
                    option.value = numeroVid;
                    opcionesVidSelect.appendChild(option);
                });
            }
        );
    }
};

consorcioSelect.addEventListener('change', consorcioTipoVidListener);
tipoServicioSelect.addEventListener('change', consorcioTipoVidListener);

// Event listener para cargar opciones de ruta cuando se selecciona un consorcio o tipo de servicio
const consorcioTipoRutaListener = () => {
    const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
    rutaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una ruta</option>';

    if (consorcioId && tipoId) {
        cargarOpciones(
            rutaSelect,
            `../../servidor/incidencia/cargar_ruta.php?consorcio_id=${consorcioId}&id_tipo=${tipoId}`,
            'id_ruta',
            'abreviatura'
        );
    }
};

consorcioSelect.addEventListener('change', consorcioTipoRutaListener);
tipoServicioSelect.addEventListener('change', consorcioTipoRutaListener);

// Event listener para cargar subcategorías cuando se selecciona una categoría
categoriaSelect.addEventListener('change', () => {
    const categoriaId = categoriaSelect.value;
    subcategoriaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una subcategoría</option>';
    causaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una causa</option>';
    consecuenciaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una consecuencia</option>';

    if (categoriaId) {
        cargarOpciones(
            subcategoriaSelect,
            `../../servidor/incidencia/cargar_subcategoria.php?categoria_id=${categoriaId}`,
            'id_subcategoria',
            'sub_categoria'
        );
    }
});
// Event listener para cargar causas cuando se selecciona una subcategoría
subcategoriaSelect.addEventListener('change', () => {
    const subcategoriaId = subcategoriaSelect.value;
    causaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una causa</option>';
    consecuenciaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una consecuencia</option>';
    if (subcategoriaId) {
        cargarOpciones(
            causaSelect,
            `../../servidor/incidencia/cargar_causa.php?subcategoria_id=${subcategoriaId}`,
            'idcausa',
            'causa'
        );
    }
});
// Event listener para cargar consecuencias cuando se selecciona una causa
causaSelect.addEventListener('change', () => {
    const causaId = causaSelect.value;
    consecuenciaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una consecuencia</option>';
    if (causaId) {
        cargarOpciones(
            consecuenciaSelect,
            `../../servidor/incidencia/cargar_consecuencia.php?causa_id=${causaId}`,
            'id_consecuencia',
            'consecuencia'
        );
    }
});
// Event listener para cargar bus y placa al llenar el campo VID
inputVid.addEventListener('input', () => {
    const valueVid = inputVid.value;
    if (valueVid) {
        cargarBusPlaca(valueVid);
    }
});
async function cargarBusPlaca(numeroVid) {
    try {
        const response = await fetch(`../../servidor/incidencia/cargar_bus_placa.php?numero_vid=${numeroVid}`);
        const data = await response.json();
        inputBus.value = '';
        inputPlaca.value = '';
        inputBus.value = data[0].num_externo;
        inputPlaca.value = data[0].placa;
    } catch (error) {
        console.error('Error al cargar idbus y placa', error);
    }
}
document.addEventListener('DOMContentLoaded', () => {
    cargarOpciones(categoriaSelect, '../../servidor/incidencia/cargar_categoria.php', 'id_categoria', 'categoria');
    cargarOpciones(consorcioSelect, '../../servidor/incidencia/cargar_consorcio.php', 'idconsorcio', 'nombre_consorcio');
    cargarOpciones(sentidoSelect, '../../servidor/incidencia/cargar_sentido.php', 'idsentido', 'sentido');
    cargarOpciones(
        tipokilometrajeSelect,
        '../../servidor/incidencia/cargar_tipo_kilometraje.php',
        'idtipo_kilometraje',
        'tipo_kilometraje'
    );
});
/* -------------------------fin--------------------- */
/*  capturar los valores del formulario */
// Función para obtener los datos del formulario y guardarlos en un objeto
async function guardarDatosFormulario() {
        const formData = new FormData();
        const requiredFields = ['addIncidents__date', 'time_on', 'time_off', 'place_incidence', 'categoria', 'subcategoria', 'causa', 'consecuencia', 'descripcion', 'consorcio', 'tipo_servicio', 'ruta', 'numero_servicio', 'sentido', 'vid', 'dni', 'tipokilometraje', 'kilometraje', 'numero_carreras'];
  
        // Agregar los datos del formulario al objeto formData.
        for (const field of requiredFields) {
            const valorCampo = document.getElementById(field).value;
            console.log(valorCampo);
        formData.append(field, valorCampo);
        }
        //  enviar los datos al servidor.
        try {
        const response = await fetch('../../servidor/incidencia/agregar.php', {
        method: 'POST',
        body: formData,
        });
            const responseData = await response.json(); // Obtener la respuesta del servidor como texto
            if (responseData.status === 'success') {
                // Mostrar un mensaje de éxito si los datos se guardaron correctamente
                Swal.fire({
                    icon: 'success',
                    title: '¡Guardado exitoso!',
                    text: 'Los datos se han guardado correctamente.',
                    confirmButtonText: 'Aceptar',
                    didOpen: () => {
                    // Personalizar el botón Aceptar con el color y sin bordes
                    const button = Swal.getPopup().querySelector('.swal2-confirm');
                    button.style.backgroundColor = '#48C78E';
                    button.style.border = 'none';
                    button.style.boxShadow = 'none';
                }
                }).then(() => {
                        // Redireccionar a inicio.php después de cerrar el mensaje de éxito
                        window.location.href = '/inicio.php';
                    });
            } else {
                // Mostrar un mensaje de error si hubo un problema al guardar los datos
                Swal.fire({
                    icon: 'error',
                    title: 'Error al guardar',
                    text: responseData.message,
                    confirmButtonText: 'Aceptar',
                    didOpen: () => {
                    // Personalizar el botón Aceptar con el color y sin bordes
                    const button = Swal.getPopup().querySelector('.swal2-confirm');
                    button.style.backgroundColor = '#F14668';
                    button.style.border = 'none';
                    button.style.boxShadow = 'none';
                }
                });
            }
        } catch (error) {
        // Mostrar un mensaje de error si hubo un error al enviar los datos al servidor.
        Swal.fire({
        icon: 'error',
        title: 'Error al guardar',
        text: 'Hubo un error al intentar guardar los datos.',
        });
        }
}
/* ---------- para renderizar las secciones del navegador lateral-------------*/
// Función para cambiar la vista actual utilizando async/await y PHP
async function changeView(view) {
    try {
        // Realizar una petición utilizando fetch y esperar la respuesta
        const response = await fetch(view);
        // Verificar si la respuesta es exitosa
        if (!response.ok) {
        throw new Error('Error al cargar la vista');
        }
        // Obtener el contenido de la respuesta como texto
        const texto = await response.text();
        // Actualizar el contenido de la sección 'contenido-dinamico'
        // Envolver la actualización del contenido en una Promesa
        await new Promise(resolve => {
        contenidoDinamico.innerHTML = texto;
        resolve();
        });
    
        // Llamar a la función para renderizar la tabla Grid.js después de cargar el contenido
        renderizarTablaGrid();
    } catch (error) {
        console.error('Error al cargar la vista:', error);
    }
}
/* ---------------- vista-->listar- tabla-------------------------------- */
document.getElementById('listar').addEventListener('click', function () {
    changeView('./modulos/listado_incidencias.php');
});
/* funcion generica para cargar los select del formulario de edicion */
    async function cargarSelect(url, selectId, selectedValue) {
            const select = document.getElementById(selectId);
            const response = await fetch(url);
            const data = await response.json();

            // Generar las opciones HTML
                const optionsHTML = data.map((item) => {
                    // Ajusta aquí las propiedades según la estructura real de los datos
                    //console.log('cagar datos en editar', data, item)
                const value = item[0];
                    const label = item[1];
                    //console.log('valor para el option',value,label)
                return `<option value="${value}">${label}</option>`;
            });

            // Asignar las opciones al elemento select
                select.innerHTML = optionsHTML;
               // console.log('guarda los option',select)

            // Establecer el valor seleccionado
            select.value = selectedValue;
    }
// Función para renderizar la tabla Grid.js en el elemento 'wrapper'
    async function renderizarTablaGrid() {
                    const wrapper = document.getElementById('wrapper');
                    //console.log('soy melania',wrapper);
                    if (wrapper) {
                        // Vaciar el contenido existente del contenedor
                        wrapper.innerHTML =null;
                        try {
                        // Realizar la solicitud fetch al archivo PHP
                            const response = await fetch('../../servidor/incidencia/mostrar.php');
                            if (!response.ok) {
                            throw new Error('Error al obtener los datos de incidencias');
                            }
                        // Obtener los datos de incidencias
                            const datosIncidencias = await response.json();
                        // Procesar los datos y generar la tabla Grid.js
                            const grid = new gridjs.Grid({
                            columns: [
                                        {name:"ID", hidden: true},
                                        {name:"FECHA",width:"auto"},
                                        {name:"CONSORCIO",width:"auto"},
                                        {name:"TIPO SERV.",width:"auto"},
                                        {name:"RUTA", width: "auto" },
                                        {name:"CATEGORIA", width: "auto" },
                                        {name:"SUBCATEG.", width: "auto" },
                                        {name:"N°SERV.", width: "auto" },
                                        {name:"VID", width: "auto" },
                                        {name:"TIPO KM", width: "auto" },
                                        {name:"N° KM",width:"auto"},
                                        {name:"ACCIONES",
                                            width:"auto",
                                            formatter: (cell, row) => {
                                            const id = row.cells[0].data;
                                                return gridjs.html(`
                                                <div class="listContainer__btns">
                                                <button  data-id="${id}" class="listContainer__btn-ver" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-id="${id}" class="ionicon listContainer__tabla-svgVer" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                </button>    
                                                <button data-id="${id}" class="listContainer__btn-editar" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-id="${id}" class="ionicon listContainer__tabla-svgEditar" viewBox="0 0 512 512"><path d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z" fill="#fff" /></svg>
                                                </button>
                                                <button data-id="${id}" class="listContainer__btn-eliminar">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-id="${id}" class="ionicon listContainer__tabla-svgEliminar" viewBox="0 0 512 512"><path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352"/><path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                </button>
                                                </div>
                                                `);
                                            }
                                        }
                                    ],
                            sort: true,
                            fixedHeader: true,
                            height: 'auto',
                            data: datosIncidencias.map((elem) => {
                                const id = elem.idincidencia;
                                return [
                                id,
                                elem.fecha,
                                elem.abreviatura_consorcio,
                                elem.abreviatura_tipo,
                                elem.abreviatura,
                                elem.categoria,
                                elem.sub_categoria,
                                elem.servicio,
                                elem.bus,
                                elem.tipo_kilometraje,
                                elem.kilometraje,
                                id // Agregamos el ID al final de la fila
                                ];
                                
                            }),
                            search:true,
                            pagination: {
                                            limit: 15,
                                            summary: false
                                        },
                            style: {
                                    table: {
                                            fontSize: '10px',
                                            },
                                th: {
                                            fontSize: '12px',
                                            backgroundColor:'#19459D',
                                            fontWeight: '300',
                                            color:'#FFFF'
                                            },
                                        td: {
                                                textAlign: 'center', // Alinea el contenido en el centro horizontalmente
                                                verticalAlign: 'middle' ,// Alinea el contenido en el centro verticalmente
                                                padding: '0px',
                                                fontSize: '14px',
                                                //fontWeight: '100', // Establece el tamaño de fuente deseado para la columna 'Name'
                                            }
                                    }
                            }).render(document.getElementById("wrapper"));
                        } catch (error) {
                        // Manejar errores en la solicitud fetch
                        console.error(error);
                        }
        }  
          
        // Agregar evento al contenedor principal de la tabla
        if (document.getElementById("wrapper") != null) {
                    wrapper.insertAdjacentHTML("beforebegin", `<h1 class="listContainer__table-title">Tabla de Incidencias CGC</h1>`);
                    document.getElementById("wrapper").addEventListener("click", function(event) {
                            const target = event.target;

                            // Verificar si el evento ocurrió en un botón de editar
                            if (target.classList.contains("listContainer__btn-editar")||target.classList.contains("listContainer__tabla-svgEditar") ){
                                
                                const id = target.dataset.id;
                                editarElemento(id);
                            }

                            // Verificar si el evento ocurrió en un botón de eliminar
                            if (target.classList.contains("listContainer__btn-eliminar")||target.classList.contains("listContainer__tabla-svgEliminar")) {
                                const id = target.dataset.id;
                                eliminarElemento(id);
                                }
                                
                            // Verificar si el evento ocurrió en un botón de ver
                            if (target.classList.contains("listContainer__btn-ver")||target.classList.contains("listContainer__tabla-svgVer")) {
                                const id = target.dataset.id;
                                visualizarIncidencia(id);
                                }
                                
                    });}

}
/* funciones  para los 3 botones en la tabla(ver,editar y eliminar)                  
    /* funcion ver */
async function visualizarIncidencia(id) {
                    try {
                                // Realizar la solicitud fetch al archivo PHP para obtener los detalles de la incidencia
                                const response = await fetch('../../servidor/incidencia/detalle.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: `id_incidencia=${id}` // Asegúrate de que el nombre del parámetro coincida con el esperado en el archivo PHP
                            });
                                if (!response.ok) {
                                throw new Error('Error al obtener los detalles de la incidencia');
                                }

                                // Obtener los detalles de la incidencia
                                const detallesIncidencia = await response.json();
                               // console.log( 'respuesta de los detalles',detallesIncidencia);
                                // Mostrar los detalles de la incidencia en SweetAlert2S
                                Swal.fire({
                                title: 'Detalles de la incidencia',
                                html: `<div class="listContainer__detalle">
                            <table class="listContainer__detalle-table">
                                <tr>
                                <th class="listContainer__detalle-th">ID</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.idincidencia}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">FECHA</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.fecha}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">HORA INICIO</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.hora_inicio}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">HORA FIN</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.hora_fin}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">LUGAR</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.lugar}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">TIPO DE SERVICIO</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.tipo}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">RUTA</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.ruta}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">CONSORCIO</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.nombre_consorcio}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">SENTIDO</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.sentido}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">CATEGORÍA</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.categoria}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">SUB CATEGORÍA</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.sub_categoria}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">CAUSA</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.causa}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">CONSECUENCIA</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.consecuencia}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">DESCRIPCIÓN</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.descripcion}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">NÚMERO DE SERVICIO</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.servicio}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">BUS</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.bus}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">VID</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.vid}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">DIMENSIÓN BUS</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.tamaño}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">PLACA BUS</th>
                                <td class="listContainer__detalle-td"> ${detallesIncidencia.placa}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">DNI</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.dni}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">NOMBRE COMPLETO</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.nombre}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">CÓDIGO CACC</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.cacc}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">TIPO DE KILOMETRAJE ADICIONAL</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.kilometraje}</td>
                                </tr>
                                <tr>
                                <th class="listContainer__detalle-th">NÚMERO DE CARRERAS</th>
                                <td class="listContainer__detalle-td">${detallesIncidencia.carreras}</td>
                                </tr>
                                </table>
                            </div>`,
                                width: '50%',
                                confirmButtonText: 'Aceptar',
                                    padding:'1rem',
                                    buttonsStyling:true,//para modificar estilos de los botones tiene que estar en false
                                    showCloseButton:true,//para activar el(x) en el alert
                                    closeButtonAriaLabel:'cerrar'
                                });
                               // console.log("visualizar elemento con ID:", id);
                            } catch (error) {
                                //console.error(error);
                                Swal.fire({
                                title: 'Error',
                                text: 'Ha ocurrido un error al obtener los detalles de la incidencia',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                                });
                            }
                    }
    /* funcion eliminar */
async function eliminarElemento(id_incidencia) {
                        try {
                                const result = await Swal.fire({
                                    title: '¿Estás seguro?',
                                    text: 'Esta acción eliminará la incidencia',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Eliminar',
                                    cancelButtonText: 'Cancelar',
                                    confirmButtonColor: '#19459D',
                                    cancelButtonColor: '#F14668',

                                });

                                if (result.isConfirmed) {
                                    const response = await fetch('/servidor/incidencia/eliminar.php', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/x-www-form-urlencoded'
                                        },
                                        body: 'id_incidencia=' + encodeURIComponent(id_incidencia)
                                    });
                                    const responseText = await response.text();
                                    //console.log(responseText); // Aquí puedes hacer lo que necesites con el resultado
                                    Swal.fire({
                                        title: 'Incidencia eliminada',
                                        text: 'La incidencia ha sido eliminada exitosamente',
                                        icon: 'success',
                                        toast: true,
                                        position: 'top-right',
                                        showConfirmButton: false,
                                        timer: 2000, // Tiempo de duración del Toast
                                        timerProgressBar: true, 
                                    }).then(() => {
                                        changeView('./modulos/listado_incidencias.php');
                                    });
                            }
                            } catch (error) {
                            // console.error('Error:', error);
                                Swal.fire({
                                    title: '¡Error!',
                                    text: 'Se produjo un error al eliminar la incidencia',
                                    icon: 'error',
                                    showConfirmButton: false,
                                    timer: 2000, // Tiempo de duración del Toast
                                    timerProgressBar: true, // Barra de progreso del Toast
                                });
                            }
                        // Lógica para eliminar el elemento con el ID proporcionado
                        //console.log("Eliminar elemento con ID:", id);
    }
    /* funcion editar */
    //obtenerIncidenciaParaEditar, esta funcion retorna el id de la fila
async function obtenerIncidenciaParaEditar(id_incidencia) {
            try {
                const response = await fetch('/servidor/incidencia/editar.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'id_incidencia=' + encodeURIComponent(id_incidencia)
                });

                const incidencia = await response.json();
                return incidencia[0];
            } catch (error) {
               // console.error('Error:', error);
                throw new Error('No se pudo obtener la incidencia para editar');
            }
    }
async function mostrarFormularioEdicion(incidencia) {
    const { value: formValues } = await Swal.fire({
        title: 'Editar incidencia',
        html: `<div class="listContainer__form-edit">
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listDate" class="listContainer__form-label">Fecha</label>
                                                            <input id="listDate" name="listDate" type="date" class="listContainer__form-input" value="${incidencia.fecha}">
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listTime_on" class="listContainer__form-label">Hora Inicio</label>
                                                            <input id="listTime_on" name="listTime_on" type="time" class="listContainer__form-input" value="${incidencia.hora_inicio}">
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listTime_off" class="listContainer__form-label">Hora Fin</label>
                                                            <input id="listTime_off" name="listTime_off" type="time" class="listContainer__form-input" value="${incidencia.hora_fin}">
                                                        </div>
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listPlace_incidence" class="listContainer__form-label">Lugar del incidente</label>
                                                            <input id="listPlace_incidence" name="listPlace_incidence" type="text" class="listContainer__form-input" placeholder="lugar del incidente" value="${incidencia.lugar}">
                                                        </div>        
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listCategoria" class="listContainer__form-label">Categoria:</label>
                                                            <select id="listCategoria" name="listCategoria" class="listContainer__form-select" required>
                                                            </select>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listSubCategoria" class="listContainer__form-label">subcategoria :</label>
                                                            <select id="listSubCategoria" name="listSubCategoria" class="listContainer__form-select" required>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listCausa" class="listContainer__form-label">Causa:</label>
                                                            <select id="listCausa" name="listCausa" class="listContainer__form-select" required>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listConsecuencia" class="listContainer__form-label">Consecuencia:</label>
                                                            <select id="listConsecuencia" name="listConsecuencia" class="listContainer__form-select" required>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listDescripcion" class="listContainer__form-label">Breve descripcion</label>
                                                            <textarea id="listDescripcion" name="listDescripcion" class="listContainer__form-textarea" rows="10" cols="50" placeholder="descripcion">${incidencia.descripcion}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listConsorcio" class="listContainer__form-label">Consorcio:</label>
                                                            <select id="listConsorcio" name="listConsorcio" class="listContainer__form-select" required>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listTipo-servicio" class="listContainer__form-label">Tipo de servicio</label>
                                                            <select name="listTipo-servicio" id="listTipo-servicio" class="listContainer__form-select" required>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listRuta" class="listContainer__form-label">Ruta:</label>
                                                            <select id="listRuta" name="listRuta" class="listContainer__form-select" required>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listSentido" class="listContainer__form-label">Sentido:</label>
                                                            <select id="listSentido" name="listSentido" class="listContainer__form-select" >

                                                            </select>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listNumero_servicio" class="listContainer__form-label">Número servicio</label>
                                                            <input id="listNumero_servicio" name="listNumero_servicio" type="number" class="listContainer__form-input" placeholder="Número Servicio" value="${incidencia.servicio}">
                                                        </div>
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="ListVid" class="listContainer__form-label">VID</label>
                                                            <input list="opcionesVid" name="ListVid" id="ListVid" type="text" placeholder="cod. vid" class="listContainer__form-input"  value="${incidencia.bus}" >
                                                            <datalist id="opcionesVid" class="listContainer__form-input-datalist">
                                                                <option value="">
                                                            </datalist>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listId_bus" class="listContainer__form-label">Id bus</label>
                                                            <input name="listId_bus" id="listId_bus" type="text" class="listContainer__form-input"  value="" placeholder="id bus" disabled>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listPlaca" class="listContainer__form-label">Número placa</label>
                                                            <input name="listPlaca" id="listPlaca" type="text" class="listContainer__form-input" value="" placeholder="placa" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listDni" class="listContainer__form-label">DNI</label>
                                                            <input list='opcionesDni' name="listDni" id="listDni" type="text" placeholder="número de dni" class="listContainer__form-input" value="${incidencia.conductor}" >
                                                            <datalist id="opcionesDni" class="listContainer__form-input-datalist">
                                                    
                                                            </datalist>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listCod_cacc" class="listContainer__form-label"> Codigo CACC</label>
                                                            <input name="listCod_cacc" id="listCod_cacc" type="text" class="listContainer__form-input" placeholder=" cod. cacc"  value="" disabled>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listConductor" class="listContainer__form-label">Conductor</label>
                                                            <input name="listConductor" id="listConductor" type="text" class="listContainer__form-input" placeholder="nombre del conductor" value="" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="listContainer__form-group">
                                                        <div class="listContainer__form-field">
                                                            <label for="listTipoKilometraje" class="listContainer__form-label">Tipo Kilometraje:</label>
                                                            <select id="listTipoKilometraje" name="listTipoKilometraje" class="listContainer__form-select" required>
                                                            
                                                            </select>
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listKilometraje" class="listContainer__form-label">Kilometraje</label>
                                                            <input name="listKilometraje" id="listKilometraje" type="number" class="listContainer__form-input"  value="${incidencia.kilometraje}" placeholder="km" >
                                                        </div>
                                                        <div class="listContainer__form-field">
                                                            <label for="listNumero_carreras" class="listContainer__form-label"> Número Carreras</label>
                                                            <input name="listNumero_carreras" id="listNumero_carreras" type="number" class="listContainer__form-input"  value="${incidencia.carreras}" placeholder="Número de Carreras">
                                                        </div>
                                                    </div>
                                            </div>
                                            `,
        focusConfirm: false,
        width: '60%',
        showCloseButton: true,//para activar el(x) en el alert
        confirmButtonText: 'Guardar',
        preConfirm: () => {
            // Obtener los valores del formulario
            return [
                document.getElementById('listDate').value,
                document.getElementById('listTime_on').value,
                document.getElementById('listTime_off').value,
                document.getElementById('listPlace_incidence').value,
                document.getElementById('listCategoria').value,
                document.getElementById('listSubCategoria').value,
                document.getElementById('listCausa').value,
                document.getElementById('listConsecuencia').value,
                document.getElementById('listDescripcion').value,
                document.getElementById('listConsorcio').value,
                document.getElementById('listTipo-servicio').value,
                document.getElementById('listRuta').value,
                document.getElementById('listNumero_servicio').value,
                document.getElementById('listSentido').value,
                document.getElementById('ListVid').value,
                document.getElementById('listId_bus').value,
                document.getElementById('listPlaca').value,
                document.getElementById('listDni').value,
                document.getElementById('listCod_cacc').value,
                document.getElementById('listConductor').value,
                document.getElementById('listTipoKilometraje').value,
                document.getElementById('listKilometraje').value,
                document.getElementById('listKilometraje').value,
                document.getElementById('listNumero_carreras').value,
            ];
        },
        didOpen: async () => {
            console.log('data incidencia',incidencia)
            // Cuando se abre el formulario, llenar el selector
            await cargarSelect('/servidor/incidencia/cargar_categoria.php', 'listCategoria', incidencia.categoria);
            await cargarSelect('/servidor/incidencia/cargar_sentido.php', 'listSentido', incidencia.sentido);
            await cargarSelect('/servidor/incidencia/cargar_tipo_kilometraje.php', 'listTipoKilometraje', incidencia.tipo_kilometraje);
            await cargarSelect('/servidor/incidencia/cargar_consorcio.php', 'listConsorcio', incidencia.consorcio);
            await cargarSelect('/servidor/incidencia/cargar_tipo_servicio.php', 'listTipo-servicio', incidencia.tipo_servicio);
            //elementos del formulario editar
            const selectEditarCategoria = document.getElementById('listCategoria');
            const selectEditarSubCategoria= document.getElementById('listSubCategoria');
            const selectEditarlistCausa = document.getElementById('listCausa');
            const selectEditarConsecuencia = document.getElementById('listConsecuencia');
            const inputEditarCacc = document.getElementById('listCod_cacc');
            const inputEditarConductor = document.getElementById('listConductor');
            const inputEditarDni = document.getElementById('listDni');
            const inputEditarIdBus=document.getElementById('listId_bus');
             const inputEditarPlaca=document.getElementById('listPlaca')
            //cargar subcategoria
            const categoriaId = selectEditarCategoria.value;
            await cargarSelect(
                `../../servidor/incidencia/cargar_subcategoria.php?categoria_id=${categoriaId}`,
                'listSubCategoria',
                incidencia.subcategoria
            );
            //cargar causa
            const subcategoriaId = selectEditarSubCategoria.value;
            await cargarSelect(
                `../../servidor/incidencia/cargar_causa.php?subcategoria_id=${subcategoriaId}`,
                'listCausa',
                incidencia.causa
            );
            //cargar consecuencias 
            const causaId = selectEditarlistCausa.value;
            await cargarSelect(
                `../../servidor/incidencia/cargar_consecuencia.php?causa_id=${causaId}`,
                'listConsecuencia',
                incidencia.consecuencia
            );
            //cargar nombre y cacc con el dni
            const dniFila = incidencia.conductor;
            const responseCaccNombre = await fetch(`../../servidor/incidencia/cargar_cacc_conductor.php?numero_dni=${dniFila}`);
            const dataCaccNombre = await responseCaccNombre.json();
            inputEditarCacc.value = dataCaccNombre[0].cacc;
            inputEditarConductor.value = dataCaccNombre[0].nombre;
            //cargar idBUS y placa con el vid
            const vidFila = incidencia.bus;
            const responseVidPlaca = await fetch(`../../servidor/incidencia/cargar_bus_placa.php?numero_vid=${vidFila}`);
            const dataVidPlaca = await responseVidPlaca.json();
            inputEditarIdBus.value = dataVidPlaca[0].num_externo;
            inputEditarPlaca.value = dataVidPlaca[0].placa;

            //----------------cargar ruta--------------
            const valorSelecionado = incidencia.ruta;
            const consorcioId = document.getElementById('listConsorcio').value;
            const tipoId = document.getElementById('listTipo-servicio').value;
            const rutaElement = document.getElementById('listRuta');
            const response = await fetch(`../../servidor/incidencia/cargar_ruta.php?consorcio_id=${consorcioId}&id_tipo=${tipoId}`);
            const data = await response.json();
            // Limpiamos las opciones existentes (si las hay)
            rutaElement.innerHTML = '';
                data.forEach(ruta => {
                    const option = document.createElement('option');
                    option.value = ruta.id_ruta;
                    option.textContent = ruta.abreviatura;
                    // Comprobamos si el valor de la opción coincide con el valor seleccionado
                    if (ruta.id_ruta === valorSelecionado) {
                        option.selected = true;
                    }
                    rutaElement.appendChild(option);
                });

            // Event listener para cargar subcategorías cuando se selecciona una categoría
            selectEditarCategoria.addEventListener('change', async() => {
                const categoriaId = selectEditarCategoria.value;
                selectEditarSubCategoria.innerHTML = '<option value="" class="listIncidents__form-option">Seleccione una subcategoría</option>';
                selectEditarlistCausa.innerHTML = '<option value="" class="listIncidents__form-option">Seleccione una causa</option>';
                selectEditarConsecuencia.innerHTML = '<option value="" class="listIncidents__form-option">Seleccione una consecuencia</option>';

                if (categoriaId) {
                    await cargarSelect(
                                    `../../servidor/incidencia/cargar_subcategoria.php?categoria_id=${categoriaId}`,
                                    'listSubCategoria',
                                    incidencia.subcategoria
                                );
                                    }
            });
            // Event listener para cargar causas cuando se selecciona una subcategoría
            selectEditarSubCategoria.addEventListener('change', async() => {
                const subcategoriaId = selectEditarSubCategoria.value;
                selectEditarlistCausa.innerHTML = '<option value="" class="listIncidents__form-option">Seleccione una causa</option>';
                selectEditarConsecuencia.innerHTML = '<option value="" class="listIncidents__form-option">Seleccione una consecuencia</option>';
                if (subcategoriaId) {
                        await cargarSelect(
                            `../../servidor/incidencia/cargar_causa.php?subcategoria_id=${subcategoriaId}`,
                            'listCausa',
                            incidencia.causa
                        );
                }
            });
            // Event listener para cargar consecuencias cuando se selecciona una causa
            selectEditarlistCausa .addEventListener('change', async() => {
                const causaId = selectEditarlistCausa.value;
                selectEditarConsecuencia.innerHTML = '<option value="" class="listIncidents__form-option">Seleccione una consecuencia</option>';
                if (causaId) {
                    await cargarSelect(
                        `../../servidor/incidencia/cargar_consecuencia.php?causa_id=${causaId}`,
                        'listConsecuencia',
                        incidencia.consecuencia
                );
                }
            });
            // Event listener para cargar CACC y nombre del conductor al llenar el campo DNI
            inputEditarDni.addEventListener('input', async() => {
                const valueDni = inputEditarDni.value;
                if (valueDni) {
                    const response = await fetch(`../../servidor/incidencia/cargar_cacc_conductor.php?numero_dni=${valueDni}`);
                    const data = await response.json();
                    // Limpiamos las opciones existentes (si las hay)
                   // rutaElement.innerHTML = '';
                    inputEditarCacc.value = '';
                    inputEditarConductor.value = '';
                    inputEditarCacc.value = data[0].cacc;
                    inputEditarConductor.value = data[0].nombre;
                }
            });
            //----------------------------------------
        }
    })
        return formValues;
}
async function actualizarIncidencia(id_incidencia, formValues) {
            const [fecha, hora_inicio, hora_fin, lugar, categoria, subcategoria, causa, consecuencia, descripcion, consorcio, tipo_servicio, ruta, servicio, sentido, bus, conductor, tipo_kilometraje, kilometraje, carreras/* otros campos */] = formValues;

            const params = new URLSearchParams();
            params.append('id_incidencia', id_incidencia);
            params.append('fecha', fecha);
            params.append('hora_inicio', hora_inicio);
            params.append('hora_fin', hora_fin);
            params.append('lugar', lugar);
            params.append('categoria', categoria);
            params.append('subcategoria', subcategoria);
            params.append('causa', causa);
            params.append('consecuencia', consecuencia);
            params.append('descripcion', descripcion);
            params.append('consorcio', consorcio);
            params.append('tipo_servicio', tipo_servicio);
            params.append('ruta', ruta);
            params.append('servicio', servicio);
            params.append('sentido', sentido);
            params.append('bus', bus);
            params.append('conductor', conductor);
            params.append('tipo_kilometraje', tipo_kilometraje);
            params.append('kilometraje', kilometraje);
            params.append('carreras', carreras);

            const actualizarResponse = await fetch('actualizar_incidencia.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: params.toString()
            });
            return actualizarResponse.text();
    }
async function editarElemento(id_incidencia) {
                try {
                    const incidencia = await obtenerIncidenciaParaEditar(id_incidencia);
                    // Mostrar el formulario de edición y manejar la actualización
                    const formValues = await mostrarFormularioEdicion(incidencia);
                     //console.log('datos  nuevos del editar: ', formValues);
                     // Validar y enviar los datos actualizados al servidor
                    if (formValues) {
                        const actualizarResponse = await actualizarIncidencia(id_incidencia, formValues);
                        //console.log(actualizarResponse); // Aquí puedes hacer lo que necesites con el resultado
                        // Mostrar mensaje de éxito
                            Swal.fire({
                                        title: 'Incidencia actualizada',
                                        text: 'La incidencia ha sido actualizada exitosamente',
                                        icon: 'success'
                                            });
                                            // Volver a renderizar la tabla actualizada
                                        changeView('./modulos/listado_incidencias.php');
                                        }
                                    } catch (error) {
                                        console.error('Error:', error);
                                        Swal.fire({
                                            title: 'Error',
                                            text: 'Se produjo un error al editar la incidencia',
                                            icon: 'error'
                                        });
                                    }
    }  
/* ----------------------- vista descargar-------------------- */
document.getElementById('descargar').addEventListener('click', ()=>{
  changeView('./modulos/descargar_incidencias.php');
});
// Agregar el evento de envío del formulario al contenedor del contenido dinámico
contenidoDinamico.addEventListener('submit', async (e) => {
    e.preventDefault();

    if (e.target.id === 'downloadForm') {
        
        const fechaInicio = document.getElementById('filterDate1').value;
        const fechaFin = document.getElementById('filterDate2').value;

        if (fechaInicio === '' || fechaFin === ''||(fechaInicio === '' && fechaFin === '')) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                toast: true,
                position: 'top-right',
                text: 'Por favor, complete las fechas de inicio y fin.',
                confirmButtonText: 'Aceptar',// Establecer el texto del botón
                didOpen: () => {
                    // Personalizar el botón Aceptar con el color y sin bordes
                    const button = Swal.getPopup().querySelector('.swal2-confirm');
                    button.style.backgroundColor = '#F14668';
                    button.style.border = 'none';
                    button.style.boxShadow = 'none';
                    }
                   }
            
            );
            return;
        }


const formDataDownload = new FormData(e.target);
        try {
            const response = await fetch('/servidor/incidencia/descargar.php', {
                method: 'POST',
                body: formDataDownload,
            });

            if (response.ok) {
                // Descargar el archivo Excel directamente
                const blob = await response.blob();
                const url = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.download = 'Consulta_incidencias.xls';
                link.click();
                URL.revokeObjectURL(url);

                Swal.fire({
                icon: 'success',
                title: 'Descarga exitosa',
                text: 'El archivo ha sido descargado exitosamente.',
                confirmButtonText: 'Aceptar',// Establecer el texto del botón
                didOpen: () => {
                    // Personalizar el botón Aceptar con el color y sin bordes
                    const button = Swal.getPopup().querySelector('.swal2-confirm');
                    button.style.backgroundColor = '#48C78E';
                    button.style.border = 'none';
                    button.style.boxShadow = 'none';
                    }
                   });
            } else {
                // Obtener la respuesta JSON
                const data = await response.json();

                if (data.error) {
                    Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.error,
                confirmButtonText: 'Aceptar',// Establecer el texto del botón
                didOpen: () => {

                    // Personalizar el botón Aceptar con el color y sin bordes
                    const button = Swal.getPopup().querySelector('.swal2-confirm');
                    button.style.backgroundColor = '#F14668';
                    button.style.border = 'none';
                    button.style.boxShadow = 'none';
                }
            });
                } else {
                    Swal.fire('Error', 'Ocurrió un error en la descarga de datos', 'error');
                }
            }
        } catch (error) {
            Swal.fire('Error', 'Ocurrió un error en la descarga de datos', 'error');
        }
    }
});
/* ----------------------- vista logout-------------------- */
// logout del sistema
document.getElementById('logout').addEventListener('click', async () => {
  const result = await Swal.fire({
    title: '¿Quiere salir del sistema?',
    text: '¡No podrá deshacer esta acción!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#19459D',
    cancelButtonColor: '#F14668',
    confirmButtonText: '  Salir  ',
    cancelButtonText: 'Cancelar'
  });

  if (result.isConfirmed) {
    try {
      const response = await fetch('/servidor/login/logout.php');
      if (response.ok) {
        const responseData = await response.json();
        Swal.fire({
          icon: 'success',
          title: '¡Cierre de sesión exitoso!',
          text: 'Ha salido correctamente del sistema.',
          toast: true,
          position: 'top-right',
          showConfirmButton: false,
          timer: 2000, // Tiempo de duración del Toast
          timerProgressBar: true, // Barra de progreso del Toast
        }).then(() => {
          // Realizar la redirección una vez que se muestre el Toast de éxito
          window.location.href = '../../index.php';
        });
      } else {
        throw new Error('Error al cerrar sesión'); // Lanzar un error genérico
      }
    } catch (error) {
      console.error(error);
      Swal.fire({
          icon: 'error',
        toast: true,
        position: 'top-right',
        title: '¡Error!',
          text: 'Ocurrió un problema al intentar cerrar sesión.',
         showConfirmButton: false,
          timer: 2000, // Tiempo de duración del Toast
          timerProgressBar: true, // Barra de progreso del Toast
      });
    }
  }
 /*  else {
    // El usuario ha cancelado la acción
    Swal.fire('¡Acción cancelada!', 'Permanecerá en el sistema.', 'info');
  } */
});
/* ----------------------- vista registro user-------------------- */
document.getElementById('newUser').addEventListener("click", () => {
    changeView('./modulos/registro_usuario.php');
})
//funcion para enviarregistro deusuario
contenidoDinamico.addEventListener("submit", async (e) => {
    e.preventDefault();
     const nameUser = document.getElementById('nameUser').value;
    const rolUser = document.getElementById('rolUser').value;
    const passwordUser=document.getElementById('passwordUser').value;

        if (nameUser === '' || rolUser === ''||passwordUser===''||(nameUser === '' && rolUser === ''&&passwordUser==='')||(nameUser === '' && rolUser === '')||(rolUser === ''&&passwordUser==='')||(nameUser === '' && passwordUser==='')) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                toast: true,
                position: 'top-right',
                text: 'Por favor, complete los campos vacios',
                confirmButtonText: 'Aceptar',// Establecer el texto del botón
                didOpen: () => {
                    // Personalizar el botón Aceptar con el color y sin bordes
                    const button = Swal.getPopup().querySelector('.swal2-confirm');
                    button.style.backgroundColor = '#F14668';
                    button.style.border = 'none';
                    button.style.boxShadow = 'none';
                    }
                   }
            
            );
            return;
    }
    

        const formDataUser = new FormData(e.target);
      console.log(formDataUser)

        try {
            const response = await fetch("/servidor/registro/registrar.php", {
                method: "POST",
                body: formDataUser,
            });

            if (!response.ok) {
                throw new Error("Error al enviar la solicitud");
            }

            const dataUser = await response.json();

            if (dataUser.status === "success") {
                Swal.fire({
                    icon: 'success',
                    title: '¡Registro exitoso!',
                    toast: true,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                })/* .then(() => {
                    window.location.replace("/index.php"); // Redireccionar a la página de inicio del usuario
                }) */;
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: dataUser.message,
                    toast: true,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,

                });
            }
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ha ocurrido un error inesperado',
                toast: true,
                position: 'top-right',
                timer: 2000,
                timerProgressBar: true,

            });
        }
    
});
/* ----------------------- vista registro conductor--------------- */
document.getElementById('newDriver').addEventListener("click", () => {
    changeView('./modulos/registro_conductor.php');
})
/* ----------------------- vista registro bus--------------------- */
document.getElementById('newBus').addEventListener("click", () => {
    changeView('./modulos/registro_bus.php');
})

/* ----------------------- vista registro Incidencias------------------- */
document.getElementById('incidencia').addEventListener("click", () => {
    changeView('./modulos/registro_incidencias.php');
})
