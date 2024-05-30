<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tickets.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
<br><br>
<!-- resources/views/entradas/mis-entradas.blade.php -->
@include('nav')
<br><br><br>

<div class="container">
    <h1>Mis Entradas</h1>
    <p>Usuario: {{ $user->name }}</p>

    @foreach($entradas as $entrada)
        <div class="ticket" id="entrada-{{ $entrada->id }}">
            <div class="ticket-left">
                <h1>{{ $entrada->evento->titulo }} <span>Evento</span></h1>
                <div class="ticket-info">
                    <div class="info">
                        <span>Evento</span>
                        <p>{{ $entrada->evento->titulo }}</p>
                    </div>
                    <div class="info">
                        <span>Nombre</span>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="info">
                        <span>Fecha</span>
                        <p>{{ \Carbon\Carbon::parse($entrada->fecha_compra)->format('d/m/Y') }}</p>
                    </div>
                    <div class="info">
                        <span>Hora</span>
                        <p>{{ \Carbon\Carbon::parse($entrada->fecha_compra)->format('H:i') }}</p>
                    </div>
                    <div class="info">
                        <span>ID</span>
                        <p>{{ $entrada->id }}</p>
                    </div>
                </div>
            </div>
            <button class="print-button" data-id="{{ $entrada->id }}">Imprimir Entrada</button>
            <div class="ticket-right">
                <div class="eye"></div>
                <div class="number">
                    <h3>{{ $entrada->id }}</h3>
                    <span>ID</span>
                </div>
                <div class="barcode">
                    <img src="{{ asset('storage/qrcodes/' . $entrada->codigo . '.png') }}" alt="QR Code">
                </div>
            </div>
        </div>
    @endforeach
</div>



<script>

    $(document).ready(function() {
        $('.print-button').on('click', function() {
            var entradaId = $(this).data('id');
            var entradaDiv = $('#entrada-' + entradaId).clone();
            entradaDiv.find('.print-button').remove(); // Remover el botón de imprimir del clon
            var entradaHtml = entradaDiv.prop('outerHTML');

            var printWindow = window.open('', '_blank', 'width=800,height=600');
            printWindow.document.write('<html><head><title>Imprimir Entrada</title>');
            printWindow.document.write('<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">');
            printWindow.document.write('</head><body>');
            printWindow.document.write(entradaHtml);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    });

</script>

</body>
</html>
