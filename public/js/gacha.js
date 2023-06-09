let total = 0;
async function gachaPull() {
    let formData = new FormData();
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    formData.append('_token', csrfToken);
    await fetch('/gacha/pull', {
          method: "POST",
          body: formData,
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error(response.text());
        }
    })
    .then(result => {
        // result.pull = objeto javascript { campo: valor }
        const contenedor = document.getElementById("pull-result");
        contenedor.innerHTML = '';

        let count2 = document.getElementById("count-2");
        let count3 = document.getElementById("count-3");
        let count4 = document.getElementById("count-4");

        for (const carta of Object.values(result.pull)) {
            if (carta.rareza === 2) {
                count2.innerHTML = parseInt(count2.innerHTML) + 1;
            } else if (carta.rareza === 3) {
                count3.innerHTML = parseInt(count3.innerHTML) + 1;
            } else {
                count4.innerHTML = parseInt(count4.innerHTML) + 1;
            }

            const col = `col carta-card d-flex flex-column align-items-center
            ${carta.rareza === 3 ? 'card-3' : carta.rareza === 4 ? 'card-4' : ''}`;
            const html = `
                <div class="${col}">
                    <img src="${carta.unidolized_icon}" alt="${carta.nombre}" class="card img-fluid">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <img src="img/icons/${carta.rareza}_star.png" alt="Rareza ${carta.rareza}" class="img-fluid">
                        <img src="img/icons/${carta.atributo}.png" alt="Atributo ${carta.atributo}" class="img-fluid">
                    </div>
                </div>
            `;

        contenedor.innerHTML += html;
        }

        total = total + 10;

        let cristales = document.getElementById("cristales");
        cristales.innerHTML = parseInt(cristales.innerHTML) + 3000;

        let cartas = document.getElementById("cartas");
        cartas.innerHTML = total;

        // Cálculo de porcentajes
        document.getElementById("pc-2").innerHTML = ((count2.innerHTML / total) * 100).toFixed(2);
        document.getElementById("pc-3").innerHTML = ((count3.innerHTML / total) * 100).toFixed(2);
        document.getElementById("pc-4").innerHTML = ((count4.innerHTML / total) * 100).toFixed(2);

    })
    .catch(e => {
        console.log(e);
        const contenedor = document.getElementById("pull-result");
        contenedor.innerHTML = "<p>Se ha producido un erorr. Inténtelo más tarde</p>"

    });
}

function resetPull() {
    total = 0;
    document.getElementById("cristales").innerHTML = '0';
    document.getElementById("cartas").innerHTML = '0';
    document.getElementById("count-2").innerHTML = '0';
    document.getElementById("count-3").innerHTML = '0';
    document.getElementById("count-4").innerHTML = '0';
    document.getElementById("pc-2").innerHTML = '0';
    document.getElementById("pc-3").innerHTML = '0';
    document.getElementById("pc-4").innerHTML = '0';
    document.getElementById("pull-result").innerHTML = '';
}
