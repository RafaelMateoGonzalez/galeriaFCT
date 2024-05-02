
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
