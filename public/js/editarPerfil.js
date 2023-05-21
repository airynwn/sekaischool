function validarBio() {
    const bio = document.getElementById("bio");

    if (bio.value.length <= 200) {
        return true;
    } else {
        alert("La biografía no puede exceder los 200 caracteres")
    }

    return false;
}

function validarDc() {
    const dc = document.getElementById("dc");

    if (/^((.{2,32})#\d{4})/.test(dc.value)){
        return true;
    } else if (dc.value.length === 0) {
        return true;
    } else {
        alert("El usuario de Discord debe ser mayor a 2 y menor a 32 caracteres e ir seguido de una almohadilla y 4 números")
    }

    return false;
}

function validarTw() {
    const tw = document.getElementById("tw");

    if (/^@(\w){1,15}$/.test(tw.value)){
        return true;
    } else {
        alert("El usuario de Twitter sólo puede incluir letras, números y guión bajo hasta 15 caracteres y debe empezar por @")
    }

    return false;
}

function validarEditarPerfil(event) {
    event.preventDefault();

    if (validarBio() && validarDc() && validarTw()) {
        console.log("Datos introducidos correctamente");
        event.target.submit();
    }
}

