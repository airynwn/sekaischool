/**
 * Realiza una petición asíncrona al servidor
 * para eliminar una carta del inventario
 * y muestra un modal con el resultado
 *
 * Función no bloqueante: debe esperar a que responda el servidor (async/await)
 */
async function eliminarCarta(event) {
    event.preventDefault();

    const form = event.target;
    // Objeto con los datos del formulario (_token, carta)
    const formData = new FormData(form);
    console.log("test");

    const msg = await fetch("/cartas/delete", {
        method: "POST",
        body: formData,
    })
        .then((response) => {
            if (response.ok) {
                form.parentElement.parentElement.remove();
                return response.json();
            } else if (response.status == 422) {
                return response.json();
            } else {
                throw new Error(response.json());
            }
        })
        .then((result) => result.info)
        .catch((e) => {
            console.log(e);
            return "Se ha producido un error. Inténtelo más tarde.";
        });

    const mensaje = document.getElementById("eliminar-body");
    mensaje.innerHTML = msg;
    const cartasModal = new bootstrap.Modal(
        document.getElementById("eliminarCartaModal")
    );
    cartasModal.show();
}

async function mostrarCartas(event) {
    // Objeto con los datos del formulario (_token, modo)
    let formData = new FormData();

    let modo = event.target.getAttribute("data-modo");
    let user = event.target.getAttribute("data-user");
    // Opacidad del botón
    document.querySelectorAll('.selected-opacidad').forEach(function(e) {
        e.classList.remove('selected-opacidad');
    });
    event.target.classList.toggle("selected-opacidad");

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formData.append('_token', csrfToken);
    formData.append('modo', modo);
    formData.append('user', user);

    console.log(modo);
    console.log(user);

    await fetch('/profile/inventario', {
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
