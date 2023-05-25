async function mostrarGrupo(event) {
    // Objeto con los datos del formulario (_token, grupo)
    let formData = new FormData();

    let grupoId = event.target.getAttribute("data-grupo-id");
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formData.append('_token', csrfToken);
    formData.append('grupo', grupoId);

    console.log(grupoId);

    await fetch('/grupos/grupo', {
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
        let contenedor = document.getElementById("grupo-container");
        contenedor.innerHTML = result;
    })
      .catch(e => {
        console.log(e);
        return "Se ha producido un error. Inténtelo más tarde.";
    });
}
