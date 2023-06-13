/**
 * Realiza una petición asíncrona al servidor
 * para añadir una carta al inventario
 * y muestra un modal con el resultado
 *
 * Función no bloqueante: debe esperar a que responda el servidor (async/await)
*/
async function anadirCarta(event) {
    event.preventDefault();

    const form = event.target;
    // Objeto con los datos del formulario (_token, carta, estado)
    const formData = new FormData(form);

    const msg = await fetch('/cartas/add', {
        method: "POST",
        body: formData,
      })
      .then(response => {
          if (response.ok || response.status == 422) {
              return response.json();
          } else {
              throw new Error(response.json());
          }
      })
      .then(result => result.info)
      .catch(e => {
        console.log(e);
        return "Se ha producido un error. Inténtelo más tarde.";
    });

    const mensaje = document.getElementById("anadir-body");
    mensaje.innerHTML = msg;
    const cartasModal = new bootstrap.Modal(document.getElementById('anadirCartaModal'));
    cartasModal.show();

}

// formData que contiene los filtros
let formDataBusqueda;

function obtenerCookie() {
    const filtros = localStorage.getItem("filtros");
    if (filtros !== null) {
        const obj = JSON.parse(filtros);
        console.log(obj);
        // {grupos: Array(1), rareza: Array(0), atributos: Array(0), pjs: Array(0)}
        for (let [atrib, listaSel] of Object.entries(obj)) {
            // atrib: grupos, rareza... listaSel: 1, 2...
            for (let sel of listaSel) {
                // Marca como selected los elementos seleccionados
                let elem = document.querySelector(`.select-${atrib}[data-id="${sel}"]`);
                elem.classList.add('selected');
            }
        }
    }
}

/**
 * Obtiene los filtros seleccionados en el formulario para buscar cartas
 */
function obtenerFormData() {
    const form = document.getElementById("filter-wrapper");
    const formData = new FormData(form);

    // Array de los data-id de cada campo
    getArr = (c) => Array.from(document.querySelectorAll(c), e => e.getAttribute("data-id"));

    // Obtiene los valores (data-id) cada campo filtrado (selected)
    const obj = {
        "grupos": getArr(".select-grupos.selected"),
        "rareza":  getArr(".select-rareza.selected"),
        "atributos": getArr(".select-atributos.selected"),
        "pjs": getArr(".select-pjs.selected")
    }

    Object.keys(obj).forEach(key => formData.append(key, JSON.stringify(obj[key])));

    formDataBusqueda = formData;
    // Guarda los filtros en la cookie
    localStorage.setItem("filtros", JSON.stringify(obj));
}

/**
 * Botón para limpiar los filtros seleccionados
 */
function limpiarFiltros(event) {
    let selected = document.querySelectorAll('.selected');
    selected.forEach(e => {
        e.classList.remove('selected');
    });
}

/**
 * Busca las cartas según los filtros seleccionados
 * Una vez cargados los filtros, permite hacer scroll infinito para ver más
 */
async function buscarCartas(event) {
    event.preventDefault();
    // Empieza con la página en 0 y el contenedor de cartas vacío
    page = 0;
    const contenedor = document.getElementById("cartas-container");
    contenedor.innerHTML = "";
    obtenerFormData();
    await cargarCartas();
}

// Página inicial
let page = 1;
let cargando = false;

// Datos iniciales
window.onload = () => {
    obtenerCookie();
    const form = document.getElementById("filter-wrapper");
    const formData = new FormData(form);
    const values = ["grupos", "rareza", "atributos", "pjs"];
    values.forEach(value => formData.append(value, "[]"));
    formDataBusqueda = formData;
}

// Scroll infinito: Al scrollear hacia abajo se cargan más cartas
window.addEventListener('scroll', function() {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
        cargarCartas();
    }
});

async function cargarCartas() {
    if (cargando) {
        return;
    }

    // Empieza sumando una página (0 --> 1)
    cargando = true;
    page++;

    await fetch(`/cartas/buscar?page=${page}`, {
          method: "POST",
          body: formDataBusqueda,
    })
    .then(response => {
        if (response.ok) {
            return response.text();
        } else {
            throw new Error(response.text());
        }
    })
    .then(result => {
        // Añade las nuevas cartas al final del contenedor al scrollear
        console.log(result);
        const contenedor = document.getElementById("cartas-container");
        contenedor.insertAdjacentHTML('beforeend', result);
        cargando = false;
    })
    .catch(e => {
        console.log(e);
        const contenedor = document.getElementById("cartas-container");
        contenedor.innerHTML = "<p>Se ha producido un erorr. Inténtelo más tarde</p>"

    });
}
