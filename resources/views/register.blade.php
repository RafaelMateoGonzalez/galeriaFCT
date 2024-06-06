<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
<!-- resources/views/register.blade.php -->
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">GaleriaSantos</span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form method="POST" action="{{ route('register') }}" style="width: 23rem;">
                        @csrf
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registro</h3>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                            <label class="form-label" for="name">Nombre:</label>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                            <label class="form-label" for="email">Correo Electrónico:</label>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                            <label class="form-label" for="password">Contraseña:</label>
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="pt-1 mb-4">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit">Registrar</button>
                        </div>
                        <p> <a href="{{ route('inicioSesion') }}" class="link-info">¿Ya tienes cuenta?</a></p>
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
