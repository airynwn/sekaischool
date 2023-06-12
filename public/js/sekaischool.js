/**
 * Funciones genéricas
 */

/**
 * Selecciona un personaje al clickear su imagen recogiendo su ID
 */
function seleccionar(e) {
    e.classList.toggle("selected");
}

/**
 * Muestra los caracteres de la contraseña al pulsar el ojo
 */
function ver() {
    let pw = document.getElementById("password");
    let pwconfirm = document.getElementById("password_confirmation");
    let tipo = pw.getAttribute("type") === "password" ? "text" : "password";
    pw.setAttribute("type", tipo);
    pwconfirm.setAttribute("type", tipo);
}
