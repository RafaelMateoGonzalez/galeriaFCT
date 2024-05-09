<!-- resources/views/nav.blade.php -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Galeria de arte">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <title>Nuevo</title>
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Gallery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/eventos') }}">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/sobre-nosotros') }}">Sobre nosotros</a>
                </li>

                <!-- Botones para usuarios administradores -->
                @auth
                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/nuevo-evento') }}">Crear evento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/eliminar-evento') }}">Eliminar evento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/users') }}">Editar Usuario</a>
                        </li>
                    @endif
                @endauth

                <!-- Botones condicionales según el estado de la sesión -->
                @guest
                    <li class="nav-item">


                        <a class="nav-link" href="{{ route('inicioSesion') }}">Iniciar sesión</a>

                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
