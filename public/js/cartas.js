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

/**
 * Obtiene los filtros seleccionados en el formulario para buscar cartas
 */
function obtenerFormData() {
    const form = document.getElementById("filter-wrapper");

    let formData = new FormData(form);

    const listaGrupos = document.querySelectorAll(".select-grupo.selected");
    const grupos = Array.from(listaGrupos, e => e.getAttribute("data-id"));

    const listaRareza = document.querySelectorAll(".select-rareza.selected");
    const rareza = Array.from(listaRareza, e => e.getAttribute("data-id"));

    const listaAtributos = document.querySelectorAll(".select-atributo.selected");
    const atributos = Array.from(listaAtributos, e => e.getAttribute("data-id"));

    const listaPjs = document.querySelectorAll(".select-personaje.selected");
    const pjs = Array.from(listaPjs, e => e.getAttribute("data-id"));

    formData.append("grupos", JSON.stringify(grupos));
    formData.append("rareza", JSON.stringify(rareza));
    formData.append("atributos", JSON.stringify(atributos));
    formData.append("pjs", JSON.stringify(pjs));

    formDataBusqueda = formData;
}

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
    obtenerFormData();
}

window.addEventListener('scroll', function() {
    // Al scrollear hacia abajo se cargan más cartas
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
