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
