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
            respuesta.innerHTML = 'Has ganaoooo, toma otra';
            audio.innerHTML =  `
            <audio controls start="0" end="5">
                <source src="${res.random.audio}" type="audio/ogg">
                Tu navegador no soporta la reproducción de audio.
              </audio>`;

            random.replaceWith(reset);
        } else {
            respuesta.innerHTML = 'Respuesta incorrecta. ¡Sigue intentándolo!'
        }
        guess.value = '';
    })
    .catch(error => console.error(error));
}
