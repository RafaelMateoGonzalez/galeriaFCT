{{-- resources/views/usuarios.blade.php --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <!-- Puedes añadir aquí algún framework de CSS como Bootstrap para mejorar el estilo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('nav');
<div class="container mt-5">
    <h1>Listado de Usuarios</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Administrador</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Actualización</th>
            <th>Acciones</th> <!-- Nueva columna para las acciones -->
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_admin ? 'Sí' : 'No' }}</td>
                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                <td>{{ $user->updated_at->format('d/m/Y H:i') }}</td>
                <td>
                    <!-- Enlace para eliminar cuenta -->
                    <a href="{{ route('eliminar_cuenta', $user->id) }}" class="btn btn-danger">Eliminar Cuenta</a>

                    <!-- Formulario para cambiar tipo de cuenta -->
                    <form action="{{ route('cambiar_tipo_cuenta', $user->id) }}" method="post" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-success">
                            Cambiar Tipo
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach




        </tbody>
    </table>
</div>

</body>
</html>
