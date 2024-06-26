<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Galeria de arte">
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


    <title>Login Galería</title>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">GaleriaSantos</span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;" method="POST" action="{{ route('login') }}">
                        @csrf <!-- Asegúrate de incluir la directiva CSRF para proteger tu formulario -->

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h3>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" required />
                            <label class="form-label" for="form2Example18">Correo electrónico</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" required />
                            <label class="form-label" for="form2Example28">Contraseña</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                        </div>


                        <p>¿No tienes cuenta aún? <a href="{{ route('register') }}" class="link-info">Registrate ahora</a></p>
                    </form>


                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('img/imagen6.jpg') }}" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">

            </div>
        </div>
    </div>
</section>
</body>
</html>
