function validarBio() {
    const bio = document.getElementById("bio");

    if (bio.value.length <= 200) {
        document.getElementById('bio-error').classList.remove('error-visible');
        return true;
    } else {
        // alert("La biografía no puede exceder los 200 caracteres");
    }
    document.getElementById('bio-error').classList.add('error-visible');

    return false;
}

function validarDc() {
    const dc = document.getElementById("dc");

    if (/^((.{2,32})#\d{4})$/.test(dc.value) || dc.value.length === 0){
        document.getElementById('dc-error').classList.remove('error-visible');
        return true;
    } else {
        // alert("El usuario de Discord debe ser mayor a 2 y menor a 32 caracteres e ir seguido de una almohadilla y 4 números");
    }
    document.getElementById('dc-error').classList.add('error-visible');

    return false;
}

function validarTw() {
    const tw = document.getElementById("tw");

    if (/^@(\w){1,15}$/.test(tw.value) || tw.value.length === 0){
        document.getElementById('tw-error').classList.remove('error-visible');
        return true;
    } else {
        // alert("El usuario de Twitter sólo puede incluir letras, números y guión bajo hasta 15 caracteres y debe empezar por @");
    }
    document.getElementById('tw-error').classList.add('error-visible');

    return false;
}

function validarUsername() {
    const name = document.getElementById("name");

    if (name.value == 'edit') {
        document.getElementById('name-error').classList.add('error-visible');
        // alert("Nombre inválido");
        return false;
    }

    if (/^[A-Za-z]{1,16}$/.test(name.value)){
        document.getElementById('name-error').classList.remove('error-visible');
        return true;
    }

    document.getElementById('name-error').classList.add('error-visible');

    return false;
}

function validarEmail() {
    const email = document.getElementById("email");

    if (/^[\w\.-]+@([\w-]+\.)[\w-]{2,4}$/.test(email.value)){
        document.getElementById('email-error').classList.remove('error-visible');
        return true;
    } else {
        // alert("El usuario de Twitter sólo puede incluir letras, números y guión bajo hasta 15 caracteres y debe empezar por @");
    }
    document.getElementById('email-error').classList.add('error-visible');

    return false;
}

function validarPw() {
    const password = document.getElementById("password");

    if (/^(?=.*[A-Za-z])(?=.*\d).{8,}$/.test(password.value)) {
        // Búsqueda hacia delante: Al menos una letra + Al menos un número
        // Mínimo 8 caracteres
        document.getElementById('password-error').classList.remove('error-visible');
        return true;
    } else {
        if (password.value.length < 8) {
            console.log('8c')
            // alert("La contraseña debe tener al menos 8 caracteres");
        }
        if (/^(?!.*[A-Za-z])$/.test(password.value)) {
            console.log('letra')
            // Búsqueda hacia delante negativa: No tiene ninguna letra
            // alert("La contraseña debe tener al menos una letra");
        }
        if (/^(?!.*\d)$/.test(password.value)) {
            console.log('numero')
            // Búsqueda hacia delante negativa: No tiene ningún número
            // alert("La contraseña debe tener al menos un número");
        }
    }
    document.getElementById('password-error').classList.add('error-visible');

    return false;
}

function validarPwConfirm() {
    const password = document.getElementById("password");
    const passwordconfirm = document.getElementById("password_confirmation");

    if (passwordconfirm.value === password.value){
        document.getElementById('password_confirmation-error').classList.remove('error-visible');
        return true;
    } else {
        // alert("Las contraseñas deben ser iguales");
    }
    document.getElementById('password_confirmation-error').classList.add('error-visible');

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
    let result = validarUsername();
    result = validarEmail() && result;
    result = validarPw() && result;
    result = validarPwConfirm() && result;
    result = validarBio() && result;
    result = validarDc() && result;
    result = validarTw() && result;
    // TODO email y to lo demas


    if (result) {
        console.log("Datos introducidos correctamente");
        event.target.submit();
    }
}


// Bio + Discord + Twitter
function validarEditarPerfil(event) {
    // event.preventDefault();

    // if (validarBio() && validarDc() && validarTw()) {
    //     console.log("Datos introducidos correctamente");
    //     event.target.submit();
    // }
}

