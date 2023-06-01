/**
 * Crea una etiqueta <img> que muestra como se vería el avatar
 * a través de recoger la imagen del input de editar perfil
 */
function previsualizar(event) {
    const archivos = event.target.files;
    if (archivos.length > 0) {
        const imagenUrl = URL.createObjectURL(imageFiles[0]);
        const avatar = document.querySelector("#previsualizar-avatar");
        avatar.src = imagenUrl;
        console.log(avatar);
        console.log(imagenUrl);
        avatar.style.objectFit = 'cover';
        avatar.style.height = '250px';
        avatar.style.width = '250px';
    }
}
