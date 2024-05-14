
document.addEventListener('DOMContentLoaded', (event) => {
    if (!getCookie("cookieConsent")) {
        // Usar la función de Bootstrap para mostrar la modal
        var myModal = new bootstrap.Modal(document.getElementById('cookieConsentModal'), {
            backdrop: 'static', // Esto hace que no se pueda cerrar al hacer clic fuera
            keyboard: false // Esto desactiva la posibilidad de cerrar con la tecla ESC
        });
        myModal.show();
    }

    document.getElementById("acceptCookieConsent").onclick = function() {
        setCookie("cookieConsent", "accepted", 365);
        // Usar la función de Bootstrap para ocultar la modal
        var myModal = bootstrap.Modal.getInstance(document.getElementById('cookieConsentModal'));
        myModal.hide();
    };
});


function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}






document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById('modalTarjeta');
    const formTarjeta = document.getElementById('formTarjeta');
    const eventoIdInput = document.getElementById('eventoId');

    document.querySelectorAll('.btn-primary').forEach(boton => {
        boton.addEventListener('click', function(event) {
            event.preventDefault();
            const eventoId = this.getAttribute('data-evento-id');
            eventoIdInput.value = eventoId;
            modal.style.display = 'block';
        });
    });

    formTarjeta.addEventListener('submit', function(event) {
        event.preventDefault();

        const numeroTarjeta = document.getElementById('numeroTarjeta').value.trim();
        const cvv = document.getElementById('cvv').value.trim();
        const fechaExpiracion = document.getElementById('fechaExpiracion').value;

        // Validación del número de la tarjeta
        const regexTarjeta = /^(4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|6(?:011|5[0-9]{2})[0-9]{12}|(?:2131|1800|35\d{3})\d{11})$/;
        const esNumeroTarjetaValido = regexTarjeta.test(numeroTarjeta);

        // Validación del CVV
        const regexCVV = /^[0-9]{3}$/;
        const esCVVValido = regexCVV.test(cvv);

        // Validación de la fecha de expiración
        const fechaActual = new Date();
        const fechaIngresada = new Date(fechaExpiracion);
        const esFechaValida = fechaIngresada >= fechaActual;

        if (!esNumeroTarjetaValido) {
            alert("Número de tarjeta inválido. Por favor, inténtalo de nuevo.");
        } else if (!esCVVValido) {
            alert("El CVV debe ser de 3 dígitos.");
        } else if (!esFechaValida) {
            alert("La fecha de expiración debe ser posterior a la fecha actual.");
        } else {
            formTarjeta.submit();
        }
    });
});

function mostrarModal(boton) {
    const modal = document.getElementById('modalTarjeta');
    const eventoIdInput = document.getElementById('eventoId');
    const eventoId = boton.getAttribute('data-evento-id');
    eventoIdInput.value = eventoId;
    modal.style.display = 'block';
}

function cerrarModal() {
    document.getElementById('modalTarjeta').style.display = 'none';
}
