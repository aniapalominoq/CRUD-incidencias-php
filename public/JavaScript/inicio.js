  /*  para el menu boton de hamburguesa */
let navigation = document.querySelector('.inicio__navegation');
    let toggles=document.querySelector('.inicio__navegation-toggle');
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
        alert("you're successfully signed up")
        location.reload()
    },800)
    
})
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
        categoriaSelect.innerHTML = '<option id="" value="">Seleccione una categoría</option>';
        
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
        subcategoriaSelect.innerHTML = '<option value="">Seleccione una subcategoría</option>';
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
        
        causaSelect.innerHTML = '<option value="">Seleccione una causa</option>';
        
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
        
        consecuenciaSelect.innerHTML = '<option value="">Seleccione una consecuencia</option>';
        
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
        consorcioSelect.innerHTML = '<option value="">Seleccione una consorcio</option>';
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
        rutaSelect.innerHTML = '<option value="">Seleccione una ruta</>';
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
        sentidoSelect.innerHTML = '<option value="">Seleccione un sentido</option>';
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
        tipokilometrajeSelect.innerHTML = '<option value="">Seleccione tipo kilometraje</option>';
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
        inputBus.value =data[0].id_bus;
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
        console.log('datos del dni',data)
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
            console.log('dni-----', data)
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
    rutaSelect.innerHTML = '<option value="">Seleccione una ruta</option>';
    if (consorcioId) {
        cargarRuta(consorcioId ,tipoId);
    }

})

// Event listener para cargar consecuencias cuando se selecciona una causa
causaSelect.addEventListener('change', () => {
    const causaId = causaSelect.value;
    //console.log(' id de la causa',causaId);
    // Limpiar select de consecuencias
    consecuenciaSelect.innerHTML = '<option value="">Seleccione una consecuencia</option>';
    
    if (causaId) {
        cargarConsecuencias(causaId);
    }
});

// Event listener para cargar causas cuando se selecciona una subcategoría
subcategoriaSelect.addEventListener('change', () => {
    const subcategoriaId = subcategoriaSelect.value;
   // console.log( 'subcategoria',subcategoriaId)
    // Limpiar select de causas y consecuencias
    causaSelect.innerHTML = '<option value="">Seleccione una causa</option>';
    consecuenciaSelect.innerHTML = '<option value="">Seleccione una consecuencia</option>';
    
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
    subcategoriaSelect.innerHTML = '<option value="">Seleccione una subcategoría</option>';
    causaSelect.innerHTML = '<option value="">Seleccione una causa</option>';
    consecuenciaSelect.innerHTML = '<option value="">Seleccione una consecuencia</option>';
    
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


const example = document.getElementById("example")
example.addEventListener("click", mostrarAlerta)
// your_script.js
function mostrarAlerta() {
  Swal.fire({
    title: '¡Hola!',
    text: 'Esta es una alerta de ejemplo.',
    icon: 'success',
    confirmButtonText: 'Aceptar'
  });
}
