<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Galeria de arte">

    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <title>Document</title>
</head>
<body>
@include('nav')
<br><br><br>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row w-100">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header  text-center py-4 btn-ligth2">
                    <h3>Crear Nuevo Evento</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('crear_evento') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="titulo" class="form-label">Título del Evento</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="fecha_evento" class="form-label">Fecha del Evento</label>
                            <input type="date" class="form-control" id="fecha_evento" name="fecha_evento" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="ubicacion" class="form-label">Ubicación</label>
                            <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="precio_entrada" class="form-label">Precio de Entrada</label>
                            <input type="number" class="form-control" id="precio_entrada" name="precio_entrada" required step="0.01">
                        </div>
                        <div class="form-group mb-4">
                            <label for="foto" class="form-label">Foto del Evento</label>
                            <input type="file" class="form-control" id="foto" name="foto" required>
                        </div>
                        <button type="submit" class="btn btn-ligth2">Crear Evento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
