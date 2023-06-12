document.addEventListener('click', (event) => {
    const target = event.target;
    if (target.matches('.pagination a')) {
        event.preventDefault();
        const url = target.href;
        paginar(url);
        history.replaceState(null, '', url); // actualiza URL
    }
});

/**
 * Paginación según URL de las tablas de la vista de Admin
 */
async function paginar(url) {
    await fetch(url)
    .then(response => {
        if (response.ok) {
            return response.text();
        } else {
            throw new Error(response.text());
        }
    })
    .then(result => {
        // Accede al id container desde el html resultante con el DOM Parser
        // y cambia el antiguo contenido del contenedor por el nuevo paginado
        const parser = new DOMParser();
        const responseHtml = parser.parseFromString(result, 'text/html');
        const nuevo = responseHtml.getElementById('tabla-container');
        let actual = document.getElementById('tabla-container');
        actual.innerHTML = nuevo.innerHTML;
    })
    .catch(e => {
        console.log(e);
        return "Se ha producido un error. Inténtelo más tarde.";
    });
}
