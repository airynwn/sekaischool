async function adivinar(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    await fetch('/canciones', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        const res = JSON.parse(result);
        let respuesta = document.getElementById("respuesta");
        let audio = document.getElementById("contenedor-audio");
        let guess = document.getElementById("cancion-guess");
        let random = document.getElementById("cancion-random");

        let reset = document.createElement('input');
        reset.setAttribute('type', 'hidden');
        reset.setAttribute('name', 'solucion');
        reset.setAttribute('value', res.random.titulo);
        reset.setAttribute('id', 'cancion-random');

        if (res.solucion === res.guess) {
            respuesta.innerHTML = `
            <button type="button" class="btn btn-success">¡Felicidades, has acertado!</button>`;
            audio.innerHTML =  `
            <audio controls>
                <source src="${res.random.audio}" type="audio/ogg">
                Tu navegador no soporta la reproducción de audio.
              </audio>`;

            random.replaceWith(reset);
        } else {
            respuesta.innerHTML = `
            <button type="button" class="btn btn-danger">Respuesta incorrecta. ¡Sigue intentándolo!</button>`
        }
        guess.value = '';
    })
    .catch(error => console.error(error));
}
