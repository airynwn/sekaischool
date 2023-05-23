function validarBio() {
    const bio = document.getElementById("bio");

    if (bio.value.length <= 200) {
        return true;
    } else {
        alert("La biografía no puede exceder los 200 caracteres");
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
        alert("El usuario de Discord debe ser mayor a 2 y menor a 32 caracteres e ir seguido de una almohadilla y 4 números");
    }

    return false;
}

function validarTw() {
    const tw = document.getElementById("tw");

    if (/^@(\w){1,15}$/.test(tw.value)){
        return true;
    } else {
        alert("El usuario de Twitter sólo puede incluir letras, números y guión bajo hasta 15 caracteres y debe empezar por @");
    }

    return false;
}

function validarUsername() {
    const name = document.getElementById("name");

    if (/^\w{1,16}$/.test(name.value)){
        return true;
    } else {
        alert("El nombre de usuario sólo puede incluir letras, números y guión bajo hasta 16 caracteres");
    }

    return false;
}

function validarPw() {
    // TODO
    const password = document.getElementById("password");

    if (/.{8,}/.test(password.value)){
        console.log('hola');
        return true;
    } else {
        alert("La contraseña debe tener al menos 8 caracteres ");
    }

    return false;
}

function validarPwConfirm() {
    // TODO
    const password = document.getElementById("password");
    const passwordconfirm = document.getElementById("password-confirm");

    if (passwordconfirm.value === password.value){
        return true;
    } else {
        alert("Las contraseñas deben ser iguales");
    }

    return false;
}

// TODO Fecha de cumpleaños

// TODO FontAwesome Eye Icon al lado de los input password
// document.getElementById("ver").addEventListener('click', () => {
//     let dni = document.getElementById("dni");
//     (dni.type == "text") ? dni.type = "password" : dni.type = "text";
// });

function validarRegistro(event) {
    event.preventDefault();

    if (validarUsername() && validarPw() && validarPwConfirm()) {
        console.log("Datos introducidos correctamente");
        event.target.submit();
    }
}


// Bio + Discord + Twitter
function validarEditarPerfil(event) {
    event.preventDefault();

    if (validarBio() && validarDc() && validarTw()) {
        console.log("Datos introducidos correctamente");
        event.target.submit();
    }
}

