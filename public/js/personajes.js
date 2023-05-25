async function mostrarPj(event) {
    // Objeto con los datos del formulario (_token, pj)
    let formData = new FormData();

    let pjId = event.target.getAttribute("data-pj-id");
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formData.append('_token', csrfToken);
    formData.append('personaje', pjId);

    console.log(pjId);

    await fetch('/personajes/personaje', {
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
        let contenedor = document.getElementById("pj-container");
        contenedor.innerHTML = result;
    })
      .catch(e => {
        console.log(e);
        return "Se ha producido un error. Inténtelo más tarde.";
    });
}
