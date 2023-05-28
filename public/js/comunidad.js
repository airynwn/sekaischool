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

/**
 * Obtiene el ID del post actual y se lo pasa al
 * modal de confirmación de borrado
 * para tenerlo como hidden input
 */
function confirmarBorrado(event) {
    event.preventDefault();

    const form = event.target;
    const postId = form.getAttribute("data-post-id");
    document.getElementById("hidden-post-id").value = postId;

    const postsModal = new bootstrap.Modal(
        document.getElementById("eliminarPostModal")
    );
    postsModal.show();
}

/**
 * Realiza una petición asíncrona al servidor
 * para valorar un post en la pestaña de comunidad
 * y muestra un mensaje con información
 *
 * Función no bloqueante: debe esperar a que responda el servidor (async/await)
 */
async function eliminarPost(event) {
    event.preventDefault();

    const form = event.target;
    // Objeto con los datos del formulario (_token, post_id)
    const formData = new FormData(form);
    const postId = document.getElementById("hidden-post-id").value;

    formData.forEach((value, key) => console.log(key,value));

    const msg = await fetch(`/comunidad/${postId}/delete`, {
        method: "POST",
        body: formData,
    })
        .then((response) => {
            if (response.ok) {
                // Elimina el post
                document.getElementById(`post-${postId}`).remove();
                return response.json();
            } else if (response.status == 403) {
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
    titulo.innerHTML = "Eliminar post";
    const mensaje = document.getElementById("mensaje");
    mensaje.innerHTML = msg;

    const postsModal = new bootstrap.Modal(
        document.getElementById("enviarPostModal")
    );
    postsModal.show();

    form.reset();
}

async function mostrarPosts(event) {
    // Objeto con los datos del formulario (_token, modo)
    let formData = new FormData();

    let modo = event.target.getAttribute("data-modo");
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formData.append('_token', csrfToken);
    formData.append('modo', modo);

    console.log(modo);

    await fetch('/comunidad/posts', {
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
        let contenedor = document.getElementById("post-container");
        contenedor.innerHTML = result;
    })
      .catch(e => {
        console.log(e);
        return "Se ha producido un error. Inténtelo más tarde.";
    });
}
