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

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header">
            <h2 class="card-title">Modificar Evento</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('event.update', $evento->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="event_name">Nombre del Evento:</label>
                    <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $evento->titulo }}" required>
                </div>


                <div class="form-group">
                    <label for="event_date">Fecha del Evento:</label>
                    <input type="date" class="form-control" id="event_date" name="event_date" value="{{ $evento->fecha_evento->format('Y-m-d') }}" required>
                </div>


                <div class="form-group">
                    <label for="event_price">Precio de Entrada:</label>
                    <input type="text" class="form-control" id="event_price" name="event_price" value="{{ $evento->precio_entrada }}" required>
                </div>




                <div class="form-group">
                    <label for="event_description">Descripción:</label>
                    <textarea class="form-control" id="event_description" name="event_description" rows="3" required>{{ $evento->descripcion }}</textarea>
                </div>


                <div class="form-group">
                    <label for="event_image">Imagen del Evento:</label>
                    <input type="file" class="form-control-file" id="event_image" name="event_image">
                </div>




                @if($evento->foto)
                    <div class="form-group">
                        <label>Imagen Actual:</label>
                        <div>
                            <img src="{{ asset('storage/' . $evento->foto) }}" alt="Imagen del evento" style="max-width: 200px;">
                        </div>
                    </div>
                @endif

                <br>
                <button type="submit" class="btn btn-primary">Actualizar Evento</button>
            </form>
        </div>
    </div>
</div>



</body>
</html>
