/**
 * Cambia la duración máxima del audio
 */
function audioDuracion(max) {
    const player = document.getElementById("audio-player");
    player.currentTime = 0;
    player.ontimeupdate = function() {
        if (player.currentTime >= max) {
            player.pause();
            player.currentTime = 0;
        }
    };
}

// La duración máxima empieza en 2
let sec = 2;
window.onload = () => audioDuracion(sec);

/**
 * El usuario intenta adivinar la canción que suena.
 * El input se recoge y compara con la solución encriptada.
 * Si acierta, un mensaje lo felicita y puede continuar adivinando.
 * Si falla, se le dan 2 segundos más de escucha sucesivamente hasta que gane.
 */
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
        reset.setAttribute('value', res.titulo);
        reset.setAttribute('id', 'cancion-random');

        if (res.acierto) {
            respuesta.innerHTML = `
            <button type="button" class="btn btn-success">¡Felicidades, has acertado!</button>`;
            audio.innerHTML =  `
            <audio controls id="audio-player">
                <source src="${res.random.audio}" type="audio/ogg">
                Tu navegador no soporta la reproducción de audio.
              </audio>`;

            random.replaceWith(reset);
            sec = 2;
            // console.log(sec);
            audioDuracion(sec);
        } else {
            respuesta.innerHTML = `
            <button type="button" class="btn btn-danger">Respuesta incorrecta. ¡Sigue intentándolo!</button>`;
            sec = sec + 2;
            // console.log(sec);
            audioDuracion(sec);
        }
        guess.value = '';
    })
    .catch(error => console.error(error));
}
