document.addEventListener("DOMContentLoaded", function() {
    const botonesCompra = document.querySelectorAll('.btn-primary');

    botonesCompra.forEach(function(boton) {
        boton.addEventListener('click', function(event) {
            event.preventDefault();  // Prevenir que el enlace haga algo (como navegar a otra página)
            const numeroTarjeta = prompt("Por favor, ingresa el número de tu tarjeta de crédito:");

            // Expresión regular para verificar el número de tarjeta de crédito
            // Esta expresión verifica formatos comunes de tarjetas, como Visa, MasterCard, etc.
            // Expresión regular para verificar el número de tarjeta de crédito
// Esta expresión verifica formatos comunes de tarjetas, como Visa, MasterCard, etc.
            const regexTarjeta = /^(?:4[0-9]{12}(?:[0-9]{3})? |5[1-5][0-9]{14} |3[47][0-9]{13} |3(?:0[0-5]|[68][0-9])[0-9]{11} |6(?:011|5[0-9]{2})[0-9]{12} |(?:2131|1800|35\d{3})\d{11})$/;


            if (regexTarjeta.test(numeroTarjeta)) {
                alert("Número de tarjeta válido.");
            } else {
                alert("Número de tarjeta inválido. Por favor, inténtalo de nuevo.");
            }
        });
    });
});
