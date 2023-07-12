  /*  para el menu boton de hamburguesa */
const navigation = document.querySelector('.inicio__navegation');
const toggles=document.querySelector('.inicio__navegation-toggle');
    toggles.onclick=function(){
        navigation.classList.toggle('active');
}
/* ------------------------FIN ----------------------- */
/* para la barra de progreso del formulario paso1->paso2->paso3->paso->4 */
/* leemos los elementos  */
const slidePage = document.querySelector(".slidepage");
const nextBtn1 = document.querySelector(".nextBtn");

const prevBtn2 = document.querySelector(".prev-1");
const nextBtn2 = document.querySelector(".next-1");

const prevBtn3 = document.querySelector(".prev-2");
const nextBtn3= document.querySelector(".next-2");

const prevBtn4 = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");

const progressText = document.querySelectorAll(".addIncidents__progress-title")
const progressCheck = document.querySelectorAll(".addIncidents__progress-check")
 const bullet = document.querySelectorAll(".addIncidents__progress-bullet")

let max = 4;
let current=1

nextBtn1.addEventListener("click", function () {
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add('spot-light');
      progressText[current - 1].classList.add('spot-light');
    progressCheck[current - 1].classList.add('spot-light');
    current+= 1;

})

nextBtn2.addEventListener("click", function () {
       
    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add('spot-light');
     progressText[current - 1].classList.add('spot-light');
    progressCheck[current - 1].classList.add('spot-light');
    current+= 1;
})

nextBtn3.addEventListener("click", function () {
      
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add('spot-light');
     progressText[current - 1].classList.add('spot-light');
    progressCheck[current - 1].classList.add('spot-light');
    current+= 1;
})
/* ------------------------------------------- */
prevBtn2.addEventListener("click", function () {
      
    slidePage.style.marginLeft = "0%";
      bullet[current - 2].classList.remove('spot-light');
     progressText[current - 2].classList.remove('spot-light');
    progressCheck[current - 2].classList.remove('spot-light');
    current -= 1;
})

prevBtn3.addEventListener("click", function () {
    
    slidePage.style.marginLeft = "-25%";
       bullet[current - 2].classList.remove('spot-light');
     progressText[current - 2].classList.remove('spot-light');
    progressCheck[current - 2].classList.remove('spot-light');
    current -= 1;
    
})
prevBtn4.addEventListener("click", function () {
    slidePage.style.marginLeft = "-50%";
       bullet[current - 2].classList.remove('spot-light');
     progressText[current - 2].classList.remove('spot-light');
    progressCheck[current - 2].classList.remove('spot-light');
    current -= 1;
})
submitBtn.addEventListener("click", function () {
  bullet[current - 1].classList.add('spot-light');
  progressText[current - 1].classList.add('spot-light');
  progressCheck[current - 1].classList.add('spot-light');
  current += 1;

  setTimeout(function () {
    guardarDatosFormulario();
    Swal.fire({
      icon: 'success',
      title: 'Datos guardados',
      text: 'Los datos se han guardado correctamente.',
      confirmButtonText: 'Aceptar',
    }).then(function () {
        location.reload();
      // Aquí puedes agregar cualquier otra acción que desees realizar después de guardar los datos
      // Por ejemplo, redireccionar a otra página o realizar alguna otra tarea.
    });
  },2000);
});


/* ---------------------FIN --------------------------- */
/* para los select anidados del fomulario */

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

// Cargar categorías
async function cargarCategorias() {
    try {
         //console.log("soy la funcion cargarcategoria")
        //solicitud AJAX al servidor
        const response = await fetch('../../servidor/incidencia/cargar_categoria.php');
         // Esperar la respuesta y convertimos a formato JSON
        const data = await response.json();
         // Limpiar el select
         //categoriaSelect.innerHTML = '';
         // Iterar sobre los datos y crear las opciones
        categoriaSelect.innerHTML = '<option id="" value="" class="addIncidents__form-option">Seleccione una categoría</option>';
        
        data.forEach(categoria => {
            const option = document.createElement('option');
            option.value = categoria.id_categoria;
            option.textContent = categoria.categoria;
            categoriaSelect.appendChild(option);
        });
    } catch (error) {
        console.error('error al cargar las categorias',error);
    }
}
// Cargar subcategorías
async function cargarSubCategorias(categoriaId) {
    try {
          const response = await fetch(`../../servidor/incidencia/cargar_subcategoria.php?categoria_id=${categoriaId}`);
        const data = await response.json();
        subcategoriaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una subcategoría</option>';
        data.forEach(subcategoria => {
            const option = document.createElement('option');
            option.value = subcategoria.id_subcategoria;
            option.textContent = subcategoria.sub_categoria;
            subcategoriaSelect.appendChild(option);
        });
    } catch (error) {
        console.error('Error al cargar las subcategorías:', error);
    }
}    
// Cargar causas
async function cargarCausas(subcategoriaId) {
    try {
        const response = await fetch(`../../servidor/incidencia/cargar_causa.php?subcategoria_id=${subcategoriaId}`);
        const data = await response.json();
        
        causaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una causa</option>';
        
        data.forEach(causa => {
            const option = document.createElement('option');
            option.value = causa.idcausa;
            option.textContent = causa.causa;
            causaSelect.appendChild(option);
        });
    } catch (error) {
        console.error('Error al cargar las causas:',error);
    }
}
// Cargar consecuencias
async function cargarConsecuencias(causaId) {
    try {
        const response = await fetch(`../../servidor/incidencia/cargar_consecuencia.php?causa_id=${causaId}`);
        const data = await response.json();
        
        consecuenciaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una consecuencia</option>';
        
        data.forEach(consecuencia => {
            const option = document.createElement('option');
            option.value = consecuencia.id_consecuencia;
            option.textContent = consecuencia.consecuencia;
            consecuenciaSelect.appendChild(option);
        });
    } catch (error) {
        console.error(error);
    }
}
async function cargarConsorcio() {
    try {
        const response = await fetch(`../../servidor/incidencia/cargar_consorcio.php`);
        const data = await response.json();
        consorcioSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una consorcio</option>';
        data.forEach(consorcio => {
            const option = document.createElement('option');
            option.value = consorcio.idconsorcio;
            option.textContent = consorcio.nombre_consorcio;
            consorcioSelect.appendChild(option);
        })
    } catch (error) {
        console.error('error al cargar consorcio', error);
    }

}
async function cargarRuta(consorcioId,tipoId){
    try {
        const response = await fetch(`../../servidor/incidencia/cargar_ruta.php?consorcio_id=${consorcioId}&id_tipo=${tipoId}`);
        const data = await response.json();
        rutaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una ruta</>';
        data.forEach(ruta => {
        const option = document.createElement('option');
        option.value = ruta.id_ruta;
        option.textContent = ruta.abreviatura;
        rutaSelect.appendChild(option);
    })
    } catch (error) {
        console.error('error al cargar ruta',error)
    }
    
}
async function cargarSentido() {
    try {
         const response = await fetch(`../../servidor/incidencia/cargar_sentido.php`)
        const data = await response.json();
        sentidoSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione un sentido</option>';
        data.forEach(sentido => {
        const option = document.createElement('option');
        option.value = sentido.idsentido;
        option.textContent = sentido.sentido;
        sentidoSelect.appendChild(option);
    })
    } catch (error) {
        console.error('error al cargar sentido',error)
    }
    }
async function cargarTipoKilometraje() {
    try {
        const response = await fetch(`../../servidor/incidencia/cargar_tipo_kilometraje.php`);
        const data = await response.json();
        tipokilometrajeSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione tipo kilometraje</option>';
        data.forEach(tipokilometraje => {
            const option = document.createElement('option');
            option.value = tipokilometraje.idtipo_kilometraje;
            option.textContent = tipokilometraje.tipo_kilometraje;
            tipokilometrajeSelect.appendChild(option);
        })
    } catch (error) {
        console.error('error al cargar tipo kiometraje',error)
    }
}
async function cargarNumVid(consorcioId,tipoId) {
    try {
        const response = await fetch(`../../servidor/incidencia/cargar_vid.php?consorcio_id=${consorcioId}&id_tipo=${tipoId}`);
       
        const data = await response.json();
        opcionesVidSelect.innerHTML = ''
       // console.log('datos del VID',data)
        data.forEach(numeroVid => {
        const option = document.createElement('option');
            option.value = numeroVid;
        opcionesVidSelect.appendChild(option);
    })
    } catch (error) {
        console.error('error al cargar cargar numero vid',error)
    }
}
async function cargarBusPlaca(numeroVid) {
    try {
        const response = await fetch(`../../servidor/incidencia/cargar_bus_placa.php?numero_vid=${numeroVid}`);
        const data = await response.json();
        inputBus.value ='';
        inputPlaca.value = ''
        inputBus.value =data[0].num_externo;
        inputPlaca.value = data[0].placa;
        
      
    } catch (error) {
        console.error('error al cargar idbus y placa',error)
    }
    
}
async function cargarNumDni(consorcioId,tipoId) {
   try {
        const response = await fetch(`../../servidor/incidencia/cargar_dni.php?consorcio_id=${consorcioId}&id_tipo=${tipoId}`);
       
        const data = await response.json();
        opcionesDniSelect.innerHTML = ''
        //console.log('datos del dni',data)
        data.forEach(numeroVid => {
        const option = document.createElement('option');
            option.value = numeroVid;
        opcionesDniSelect.appendChild(option);
    })
    } catch (error) {
        console.error('error al cargar cargar numero dni',error)
    }

}
async function cargarCaccConductor(numeroDni) {
        try {
        const response = await fetch(`../../servidor/incidencia/cargar_cacc_conductor.php?numero_dni=${numeroDni}`);
            const data = await response.json();
           // console.log('dni-----', data)
            inputCacc.value = '';
        inputConductor.value ='';
        inputCacc.value =data[0].cacc;
        inputConductor.value = data[0].nombre;
    } catch (error) {
        console.error('error al cargar cacc y conductor',error)
    }
    
}
/* ---------------EVENT LISTENER-------------------------------------- */
// Event listener para cargar cacc y nombre del conductor al  llenar el campo dni
inputDni.addEventListener('input', () => {
    const valueDni = inputDni.value;
    if (valueDni) {
        cargarCaccConductor(valueDni);
    }
})
// Event listener para cargar dni cuando selecione un consorcio y un tipo de servicio:
consorcioSelect.addEventListener('change', () => {
     const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
    opcionesDniSelect.innerHTML = '';
    inputDni.value=''
    inputCacc.value ='';
    inputConductor.value = '';
       if (consorcioId) {
        cargarNumDni(consorcioId,tipoId)
    }
  });

tipoServicioSelect.addEventListener('change', () => {
    const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
    opcionesDniSelect.innerHTML = '';
    inputDni.value=''
    inputCacc.value ='';
    inputConductor.value = '';
    if (tipoId) {
        cargarNumDni(consorcioId,tipoId)
    }

})

// Event listener para cargar idbus y placa al  llenar el campo VID
inputVid.addEventListener('input', () => {
    const valueVid = inputVid.value;
    if (valueVid ) {
        cargarBusPlaca(valueVid);
    }

})
// Event listener para cargar VID segun el consorcio y tipo de servicio
consorcioSelect.addEventListener('change', () => {
     const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
    opcionesVidSelect.innerHTML = '';
    inputVid.value=''
    inputBus.value ='';
    inputPlaca.value = '';
       if (consorcioId) {
        cargarNumVid(consorcioId,tipoId)
    }
  });

tipoServicioSelect.addEventListener('change', () => {
    const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
    opcionesVidSelect.innerHTML = ''
     inputVid.value=''
     inputBus.value ='';
    inputPlaca.value = '';
    if (tipoId) {
        cargarNumVid(consorcioId,tipoId)
    }

})

// Event listener para cargar ruta cuando selecione un consorcio:
tipoServicioSelect.addEventListener('change', () => {
    const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
   // console.log('soy tipo de servicio..',consorcioId,tipoId);
    rutaSelect.innerHTML = '<li id="lista_vid" class="addIncidents__form-input-li"></li>';
    if (tipoId) {
        cargarRuta(consorcioId ,tipoId);
    }

})
consorcioSelect.addEventListener('change', () => {
    const consorcioId = consorcioSelect.value;
    const tipoId = tipoServicioSelect.value;
    rutaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una ruta</option>';
    if (consorcioId) {
        cargarRuta(consorcioId ,tipoId);
    }

})

// Event listener para cargar consecuencias cuando se selecciona una causa
causaSelect.addEventListener('change', () => {
    const causaId = causaSelect.value;
    //console.log(' id de la causa',causaId);
    // Limpiar select de consecuencias
    consecuenciaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una consecuencia</option>';
    
    if (causaId) {
        cargarConsecuencias(causaId);
    }
});

// Event listener para cargar causas cuando se selecciona una subcategoría
subcategoriaSelect.addEventListener('change', () => {
    const subcategoriaId = subcategoriaSelect.value;
   // console.log( 'subcategoria',subcategoriaId)
    // Limpiar select de causas y consecuencias
    causaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una causa</option>';
    consecuenciaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una consecuencia</option>';
    
    if (subcategoriaId) {
        cargarCausas(subcategoriaId);
    }
});

// Event listener para cargar subcategorías cuando se selecciona una categoría
categoriaSelect.addEventListener('change', () => {
    const categoriaId = categoriaSelect.value;
    /* console.log(categoriaSelect)
    console.log( 'soy id seleccionado de categoria',categoriaId) */
    // Limpiar select de subcategorías y causas
    subcategoriaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una subcategoría</option>';
    causaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una causa</option>';
    consecuenciaSelect.innerHTML = '<option value="" class="addIncidents__form-option">Seleccione una consecuencia</option>';
    
    if (categoriaId) {
        cargarSubCategorias(categoriaId);
    }
});
// Event listener para cargar consorcio , categoria
document.addEventListener('DOMContentLoaded', cargarCategorias);
document.addEventListener('DOMContentLoaded', cargarConsorcio);
document.addEventListener('DOMContentLoaded', cargarSentido);
document.addEventListener('DOMContentLoaded', cargarTipoKilometraje);
/* -------------------------fin--------------------- */

/*  capturar los valores del formulario */

 async  function guardarDatosFormulario () { 
    const formData = new FormData();
    formData.append('date', document.getElementById('date').value);
    formData.append('time_on', document.getElementById('time_on').value);
    formData.append('time_off', document.getElementById('time_off').value);
    formData.append('place_incidence', document.getElementById('place_incidence').value);
    formData.append('categoria', document.getElementById('categoria').value);
    formData.append('subcategoria', document.getElementById('subcategoria').value);
    formData.append('causa', document.getElementById('causa').value);
    formData.append('consecuencia', document.getElementById('consecuencia').value);
    formData.append('descripcion', document.getElementById('descripcion').value);
    formData.append('consorcio', document.getElementById('consorcio').value);
    formData.append('tipo_servicio', document.getElementById('tipo_servicio').value);
    formData.append('ruta', document.getElementById('ruta').value);
    formData.append('numero_servicio', document.getElementById('numero_servicio').value);
    formData.append('sentido', document.getElementById('sentido').value);
    formData.append('vid', document.getElementById('vid').value);
    formData.append('dni', document.getElementById('dni').value);
    formData.append('tipo_kilometraje', document.getElementById('tipokilometraje').value);
    formData.append('kilometraje', document.getElementById('kilometraje').value);
    formData.append('carreras', document.getElementById('numero_carreras').value);

    try {
        const response = await fetch('../../servidor/incidencia/agregar.php', {
        method: 'POST',
        body: formData,
        });
    } catch (error) {
        console.error('Error al guardar:', error);
    }


}

/* ----------------- para renderizar las secciones --------------------------------*/
const contenidoDinamico = document.getElementById('contenido-dinamico');
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


// Función para renderizar la tabla Grid.js en el elemento 'wrapper'
async function renderizarTablaGrid() {
  const wrapper = document.getElementById('wrapper');
  //console.log('soy melania',wrapper);
  if (wrapper) {
    // Vaciar el contenido existente del contenedor
    wrapper.innerHTML = '';
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
            {name:"SUB CATEG.", width: "auto" },
            {name:"NUMERO SERV.", width: "auto" },
            {name:"VID", width: "auto" },
            {name:"TIPO KM", width: "auto" },
            {name:"KILOMETRAJE",width:"auto"},
            {name:"ACCIONES",
                width:"auto",
                formatter: (cell, row) => {
                const id = row.cells[0].data;
                    return gridjs.html(`
                    <div class="listContainer__btns">
                    <button  data-id="${id}" class="listContainer__btn-ver" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svg" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                    </button>    
                    <button data-id="${id}" class="listContainer__btn-editar" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svg" viewBox="0 0 512 512"><path d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z" fill="#fff" /></svg>
                    </button>
                    <button data-id="${id}" class="listContainer__btn-eliminar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon listContainer__tabla-svg" viewBox="0 0 512 512"><path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352"/><path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                    </button>
                    </div>
                    `);
                }
            }
        ],
        sort: true,
    fixedHeader: true,
  height: '400px',
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
          
   search: {
    enabled: true,
    placeholder: 'Buscar...',
    onInput: (value) => {
      // Lógica personalizada al escribir en el campo de búsqueda
      console.log('Valor de búsqueda:', value);
    },
    onReset: () => {
      // Lógica personalizada al restablecer la búsqueda
      console.log('Búsqueda restablecida');
    }
  },
    pagination: {
        limit: 10,
        summary: false
    },
     style: {
    table: {
             fontSize: '12px',
    },
    th: {
      backgroundColor:'#5ABDD5',
        fontWeight: '100',
      color:'#FFFF'
    },
         td: {
    textAlign: 'center', // Alinea el contenido en el centro horizontalmente
    verticalAlign: 'middle' ,// Alinea el contenido en el centro verticalmente
    padding: '3.5px',
    fontSize: '12px',
    //fontWeight: '100', // Establece el tamaño de fuente deseado para la columna 'Name'
    }
  }
    }).render(document.getElementById("wrapper"));


// Agregar evento al contenedor principal de la tabla
document.getElementById("wrapper").addEventListener("click", function(event) {
  const target = event.target;

  // Verificar si el evento ocurrió en un botón de editar
  if (target.classList.contains("listContainer__btn-editar")) {
    const id = target.dataset.id;
    editarElemento(id);
  }

  // Verificar si el evento ocurrió en un botón de eliminar
  if (target.classList.contains("listContainer__btn-eliminar")) {
    const id = target.dataset.id;
    eliminarElemento(id);
    }
    
  // Verificar si el evento ocurrió en un botón de ver
  if (target.classList.contains("listContainer__btn-ver")) {
    const id = target.dataset.id;
    visualizarIncidencia(id);
    }
    
});
    /* ------------------------------------------------------------------------- */
    /* funcion para ver eldetalle de cada fila */
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
    console.log( 'respuesta de los detalles',detallesIncidencia);
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

             </div>
             `,
      icon: 'info',
      confirmButtonText: 'OK'
    });
    console.log("visualizar elemento con ID:", id);
  } catch (error) {
      console.error(error);
       Swal.fire({
      title: 'Error',
      text: 'Ha ocurrido un error al obtener los detalles de la incidencia',
      icon: 'error',
      confirmButtonText: 'OK'
    });
  }
}
/* -------------------------------------------------------------------------- */
/* funcion  para editar la tabla */
       async function editarElemento(id_incidencia) {
        try {
        // Realizar la solicitud para obtener los datos de la incidencia a editar
        const response = await fetch('/servidor/incidencia/editar.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'id_incidencia=' + encodeURIComponent(id_incidencia)
        });

        const incidencia = await response.json();

        // Mostrar el formulario de edición utilizando SweetAlert2
        const { value: formValues } = await Swal.fire({
            title: 'Editar incidencia',
            html: ` <div class="addIncidents__form-group">
                <div class="addIncidents__form-field">
                    <label for="date" class="addIncidents__form-label">Fecha</label>
                    <input id="date" name="date" type="date" class="addIncidents__form-input" required>
                </div>
                <div class="addIncidents__form-field">
                    <label for="time_on" class="addIncidents__form-label">Hora Inicio</label>
                    <input id="time_on" name="time_on" type="time" class="addIncidents__form-input" required>
                </div>
                <div class="addIncidents__form-field">
                    <label for="time_off" class="addIncidents__form-label">Hora Fin</label>
                    <input id="time_off" name="time_off" type="time" class="addIncidents__form-input" required>
                </div>
                </div>
                <div class="addIncidents__form-field">
                    <label for="place_incidence" class="addIncidents__form-label">Lugar del incidente</label>
                    <input id="place_incidence" name="place_incidence" type="text" class="addIncidents__form-input" placeholder="lugar del incidente" required>
                </div>
            <!-- page two -->
             <div class="addIncidents__form-group">
                <div class="addIncidents__form-field">
                    <label for="categoria" class="addIncidents__form-label">Categoria:</label>
                    <select id="categoria" name="categoria" class="addIncidents__form-select" required>
                        <option value="">Seleccione una categoría</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="subcategoria" class="addIncidents__form-label">subcategoria :</label>
                    <select id="subcategoria" name="subcategoria" class="addIncidents__form-select" required>
                        <option value="">Seleccione una subcategoria</option>
                    </select>
                </div>
                </div>
                 <div class="addIncidents__form-group">
                <div class="addIncidents__form-field">
                    <label for="causa" class="addIncidents__form-label">Causa:</label>
                    <select id="causa" name="causa" class="addIncidents__form-select" required>
                        <option value="">Seleccione una causa</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="consecuencia" class="addIncidents__form-label">Consecuencia:</label>
                    <select id="consecuencia" name="consecuencia" class="addIncidents__form-select" required>
                        <option value="">Seleccione una consecuencia</option>
                    </select>
                </div>
                </div>
                <div class="addIncidents__form-field">
                    <label for="descripcion" class="addIncidents__form-label">Breve descripcion</label>
                    <textarea id="descripcion" name="descripcion" class="addIncidents__form-textarea" rows="10" cols="50" placeholder="descripcion"></textarea>
                </div>
                <div class="addIncidents__form-group">
                    <div class="addIncidents__form-field">
                        <label for="consorcio" class="addIncidents__form-label">Consorcio:</label>
                        <select id="consorcio" name="consorcio" class="addIncidents__form-select" required>
                            <option value="">Seleccione un consorcio</option>
                        </select>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="tipo-servicio" class="addIncidents__form-label">Tipo de servicio</label>
                        <select name="tipo_servicio" id="tipo_servicio" class="addIncidents__form-select" required>
                            <option class="addIncidents__form-select-option" value="">Seleccione tipo serv.</option>
                            <option class="addIncidents__form-select-option" value="1">TRONCAL</option>
                            <option class="addIncidents__form-select-option" value="2">ALIMENTADOR</option>
                        </select>
                    </div>
                </div>
                <div class="addIncidents__form-group">
                    <div class="addIncidents__form-field">
                        <label for="ruta" class="addIncidents__form-label">Ruta:</label>
                        <select id="ruta" name="ruta" class="addIncidents__form-select" required>
                            <option value="">Seleccione una ruta</option>
                        </select>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="sentido" class="addIncidents__form-label">Sentido:</label>
                        <select id="sentido" name="sentido" class="addIncidents__form-select" required>
                            <option value="">Seleccione una sentido</option>
                        </select>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="numero_servicio" class="addIncidents__form-label">Número servicio</label>
                        <input id="numero_servicio" name="numero_servicio" type="number" class="addIncidents__form-input" placeholder="Número Servicio" required>
                    </div>
                </div>
                <div class="addIncidents__form-group">
                    <div class="addIncidents__form-field">
                        <label for="vid" class="addIncidents__form-label">VID</label>
                        <input list="opcionesVid" name="vid" id="vid" type="text" placeholder="cod. vid" class="addIncidents__form-input" required>
                        <datalist id="opcionesVid" class="addIncidents__form-input-datalist">
                            <option value="">
                        </datalist>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="id_bus" class="addIncidents__form-label">Id bus</label>
                        <input name="id_bus" id="id_bus" type="text" class="addIncidents__form-input" placeholder="id bus" disabled>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="placa" class="addIncidents__form-label">Número placa</label>
                        <input name="placa" id="placa" type="text" class="addIncidents__form-input" placeholder="placa de bus" disabled>
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
                        <input name="cod_cacc" id="cod_cacc" type="text" class="addIncidents__form-input" placeholder=" cod. cacc" disabled>
                    </div>
                    <div class="addIncidents__form-field">
                        <label for="conductor" class="addIncidents__form-label">Conductor</label>
                        <input name="conductor" id="conductor" type="text" class="addIncidents__form-input" placeholder="nombre del conductor" disabled>
                    </div>
            </div>
              <div class="addIncidents__form-group">
                <div class="addIncidents__form-field">
                    <label for="tipokilometraje" class="addIncidents__form-label">Tipo Kilometraje:</label>
                    <select id="tipokilometraje" name="tipokilometraje" class="addIncidents__form-select" required>
                        <option value="">Seleccione kilometraje</option>
                    </select>
                </div>
                <div class="addIncidents__form-field">
                    <label for="kilometraje" class="addIncidents__form-label">Kilometraje</label>
                    <input name="kilometraje" id="kilometraje" type="number" class="addIncidents__form-input" placeholder="km" required>
                </div>
                <div class="addIncidents__form-field">
                    <label for="numero_carreras" class="addIncidents__form-label"> Número Carreras</label>
                    <input name="numero_carreras" id="numero_carreras" type="number" class="addIncidents__form-input" placeholder="Número de Carreras">
                </div></div>`,
            focusConfirm: false,
            preConfirm: () => {
                return [
                    document.getElementById('swal-input1').value,
                    document.getElementById('swal-input2').value
                ];
            }
        });

        // Validar y enviar los datos actualizados al servidor
        if (formValues) {
            const titulo = formValues[0];
            const descripcion = formValues[1];

            // Realizar la solicitud para actualizar la incidencia
            const actualizarResponse = await fetch('actualizar_incidencia.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'id_incidencia=' + encodeURIComponent(id_incidencia) +
                      '&titulo=' + encodeURIComponent(titulo) +
                      '&descripcion=' + encodeURIComponent(descripcion)
            });

            const actualizarResponseText = await actualizarResponse.text();
            console.log(actualizarResponseText); // Aquí puedes hacer lo que necesites con el resultado

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
    

  // Lógica para editar el elemento con el ID proporcionado
    console.log("Editar elemento con ID:", id);
    
}

async function eliminarElemento(id_incidencia) {
   try {
        const result = await Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción eliminará la incidencia',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
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
                icon: 'success'
            });
       }
        changeView('./modulos/listado_incidencias.php');
    } catch (error) {
       // console.error('Error:', error);
        Swal.fire({
            title: 'Error',
            text: 'Se produjo un error al eliminar la incidencia',
            icon: 'error'
        });
    }
  // Lógica para eliminar el elemento con el ID proporcionado
  //console.log("Eliminar elemento con ID:", id);
}
    } catch (error) {
      // Manejar errores en la solicitud fetch
      console.error(error);
    }
  }
}
    
document.getElementById('listar').addEventListener('click', function () {
    changeView('./modulos/listado_incidencias.php');
});

document.getElementById('descargar').addEventListener('click', function() {
  changeView('./modulos/descargar_incidencias.php');
});


// your_script.js
function mostrarAlerta() {
  Swal.fire({
    title: '¡Hola!',
    text: 'Esta es una alerta de ejemplo.',
    icon: 'success',
    confirmButtonText: 'Aceptar'
  });
}
