<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de la Tarjeta</title>
</head>
<body>
<h1>Datos de la Tarjeta</h1>
<p>Número de Tarjeta: {{ $datos['numeroTarjeta'] }}</p>
<p>CVV: {{ $datos['cvv'] }}</p>
<p>Fecha de Expiración: {{ $datos['fechaExpiracion'] }}</p>
</body>
</html>
