<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@include('nav');
<br><br><br>
<!-- resources/views/register.blade.php -->
<form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <label for="is_admin">Es administrador:</label>
    <input type="checkbox" id="is_admin" name="is_admin">

    <button type="submit">Registrar</button>
</form>
</body>
</html>
