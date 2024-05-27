<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Galeria de arte">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


    <title>Document</title>
</head>
<body>


{{-- resources/views/user/edit.blade.php --}}
@include('nav')
<br><br><br>

<div class="container">
    <h2>Actualizar Información</h2>
    <form method="POST" action="{{ route('user.update') }}">
        @csrf

        {{-- Campo para el nombre --}}
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required>
        </div>

        {{-- Campo para la contraseña actual --}}
        <div class="form-group">
            <label for="current_password">Contraseña Actual:</label>
            <input type="password" class="form-control" id="current_password" name="current_password" required>
        </div>

        {{-- Campo para la nueva contraseña --}}
        <div class="form-group">
            <label for="new_password">Nueva Contraseña:</label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
        </div>

        {{-- Campo para confirmar la nueva contraseña --}}
        <div class="form-group">
            <label for="new_password_confirmation">Confirmar Nueva Contraseña:</label>
            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>



</body>
</html>
