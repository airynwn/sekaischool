async function mostrarPj(event) {
    // Objeto con los datos del formulario (_token, pj)
    let formData = new FormData();

    let pjId = event.target.getAttribute("data-pj-id");
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formData.append('_token', csrfToken);
    formData.append('personaje', pjId);

    console.log(pjId);

    await fetch('/personajes/personaje', {
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
        let contenedor = document.getElementById("pj-container");
        contenedor.innerHTML = result;
        // Cambia la altura de la columna con media query
        const x = window.matchMedia("(max-width: 767px)");
        cambiarColumna(x);
        x.onchange = () => cambiarColumna(x);
    })
      .catch(e => {
        console.log(e);
        return "Se ha producido un error. Inténtelo más tarde.";
    });
}

async function volverInicio() {
    try {
      const response = await fetch('/personajes', {
        method: "GET",
      });
      if (response.ok) {
        const result = await response.text();
        document.body.innerHTML = result;
      } else {
        throw new Error(response.text());
      }
    } catch (e) {
      console.log(e);
      return "Se ha producido un error. Inténtelo más tarde.";
    }
}

function cambiarColumna(x) {
    const col = document.getElementById("col-info");
    if (x.matches) {
        // Pantalla pequeña
        document.getElementById("caja-datos").classList.add("caja-scroll");
        document.getElementById("caja-historia").classList.add("caja-scroll");
        document.getElementById("caja-personalidad").classList.add("caja-scroll");
        col.style.maxHeight = null;
    } else {
        document.getElementById("caja-datos").classList.remove("caja-scroll");
        document.getElementById("caja-historia").classList.remove("caja-scroll");
        document.getElementById("caja-personalidad").classList.remove("caja-scroll");
        const img = document.getElementById("img-pj")
        img.onload = () => {
            col.style.maxHeight = `calc(50vw * ${img.height / img.width})`;
        };
    }
    console.log(col);
  }
