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

<form action="{{ route('crear_evento') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="titulo">Título del Evento:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>
    <div class="form-group">
        <label for="fecha_evento">Fecha del Evento:</label>
        <input type="date" class="form-control" id="fecha_evento" name="fecha_evento" required>
    </div>
    <div class="form-group">
        <label for="ubicacion">Ubicación:</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="precio_entrada">Precio de Entrada:</label>
        <input type="number" class="form-control" id="precio_entrada" name="precio_entrada" required step="0.01">
    </div>
    <div class="form-group">
        <label for="foto">Foto del Evento:</label>
        <input type="file" class="form-control-file" id="foto" name="foto" required>
    </div>
    <button type="submit" class="btn btn-primary">Crear Evento</button>
</form>


</body>
</html>
