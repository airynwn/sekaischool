/**
 * Realiza una petición asíncrona al servidor
 * para enviar un post en la pestaña de comunidad
 * y muestra un mensaje con información
 *
 * Función no bloqueante: debe esperar a que responda el servidor (async/await)
 */
async function enviarPost(event) {
    event.preventDefault();

    const form = event.target;
    // Objeto con los datos del formulario (_token, contenido, user_id)
    const formData = new FormData(form);

    formData.forEach((value, key) => console.log(key,value));

    const msg = await fetch("/comunidad/post", {
        method: "POST",
        body: formData,
    })
        .then((response) => {
            if (response.ok || response.status == 422) {
                return response.json();
            } else {
                throw new Error(response.json());
            }
        })
        .then((result) => result.info)
        .catch((e) => {
            console.log(e.info);
            return "Se ha producido un error. Inténtelo más tarde.";
        });

    const titulo = document.getElementById("titulo");
    titulo.innerHTML = "Enviar post";
    const mensaje = document.getElementById("mensaje");
    mensaje.innerHTML = msg;
    const postsModal = new bootstrap.Modal(
        document.getElementById("enviarPostModal")
    );
    postsModal.show();

    form.reset();
}

/**
 * Realiza una petición asíncrona al servidor
 * para valorar un post en la pestaña de comunidad
  * y muestra un mensaje con información
 *
 * Función no bloqueante: debe esperar a que responda el servidor (async/await)
 */
async function valorarPost(event) {
    event.preventDefault();

    const form = event.target;
    // Objeto con los datos del formulario (_token, post_id)
    const formData = new FormData(form);
    const postId = form.getAttribute("data-post-id");


    formData.forEach((value, key) => console.log(key,value));

    const msg = await fetch(`/comunidad/${postId}/valorar`, {
        method: "POST",
        body: formData,
    })
        .then((response) => {
            if (response.ok || response.status == 422) {
                return response.json();
            } else {
                throw new Error(response.json());
            }
        })
        .then((result) => result.info)
        .catch((e) => {
            console.log(e.info);
            return "Se ha producido un error. Inténtelo más tarde.";
        });

    const titulo = document.getElementById("titulo");
    titulo.innerHTML = "Valorar post";
    const mensaje = document.getElementById("mensaje");
    mensaje.innerHTML = msg;

    const postsModal = new bootstrap.Modal(
        document.getElementById("enviarPostModal")
    );
    postsModal.show();

    form.reset();
}
