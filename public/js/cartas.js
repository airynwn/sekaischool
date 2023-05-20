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

async function buscarCartas(event) {
    event.preventDefault();

    const form = event.target;
    // Objeto con los datos del formulario (_token, grupo, rareza, atributo, personaje)
    let formData = new FormData(form);

    let grupos = [];
    const listaGrupos = document.querySelectorAll(".select-grupo.selected");
    listaGrupos.forEach((e) => {
        let id = e.getAttribute("data-id");
        grupos.push(id);
    });

    let rareza = [];
    const listaRareza = document.querySelectorAll(".select-rareza.selected");
    listaRareza.forEach((e) => {
        let id = e.getAttribute("data-id");
        rareza.push(id);
    });

    let atributos = [];
    const listaAtributos = document.querySelectorAll(".select-atributo.selected");
    listaAtributos.forEach((e) => {
        let id = e.getAttribute("data-id");
        atributos.push(id);
    });

    let pjs = [];
    const listaPjs = document.querySelectorAll(".select-personaje.selected");
    listaPjs.forEach((e) => {
        let id = e.getAttribute("data-id");
        pjs.push(id);
    });

    // Construye formData con los datos seleccionados
    // pasados a JSON para enviar al controller
    formData.append("grupos", JSON.stringify(grupos));
    formData.append("rareza", JSON.stringify(rareza));
    formData.append("atributos", JSON.stringify(atributos));
    formData.append("pjs", JSON.stringify(pjs));

    await fetch('/cartas/buscar', {
        method: "POST",
        body: formData,
      })
      .then(response => {
        if (response.ok) {
            return response.text();
        } else {
            throw new Error(response.text());
        }
    })
      .then(result => {
        console.log(result)
        let contenedor = document.getElementById("cartas-container");
        contenedor.innerHTML = result;
    })
      .catch(e => {
        console.log(e);
        return "Se ha producido un error. Inténtelo más tarde.";
    });

}
