{{-- resources/views/eventos/listaEventos.blade.php --}}
<div class="container">
    <div class="row">
        @forelse($eventos as $evento)
            <div class="col-md-12 mb-4">
                <div class="card h-100 tarjeta-evento">
                    <div class="tarjeta-imagen">
                        @if($evento->foto)
                            <img src="{{ asset('storage/' . $evento->foto) }}" class="img-fluid rounded-start" alt="Imagen del evento">
                        @else
                            <img src="{{ asset('placeholder-image.png') }}" class="img-fluid rounded-start" alt="Imagen no disponible">
                        @endif
                        <div class="nombre-evento">
                            <h5 class="card-title">{{ $evento->titulo }}</h5>
                        </div>
                        <div class="tarjeta-detalles">
                            <p class="card-text">{{ $evento->descripcion }}</p>
                            <p class="card-text"><small class="text-muted">Fecha del evento: {{ \Carbon\Carbon::parse($evento->fecha_evento)->format('d M Y') }}</small></p>
                            <p>Creado por: {{ $evento->user ? $evento->user->name : 'Usuario desconocido' }}</p>
                            <p class="card-text">Precio de entrada: {{ number_format($evento->precio_entrada, 2) }}€</p>

                            @auth
                                @if (Auth::user()->is_admin)
                                    <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                @endif
                                <button class="btn btn-primary" data-evento-id="{{ $evento->id }}" onclick="mostrarModal(this)">Comprar Entrada</button>
                            @else
                                <a href="{{ route('inicioSesion') }}" class="btn btn-secondary">Necesitas iniciar sesión para comprar una entrada</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">No hay eventos disponibles en este momento.</p>
        @endforelse
    </div>
</div>



<!-- Modal para ingreso de datos de la tarjeta -->
<div id="modalTarjeta" style="display: none;">
    <h2>Introduzca los datos de su tarjeta de crédito para la compra</h2>
    <form id="formTarjeta" action="{{ route('entradas.store') }}" method="POST">
        @csrf
        <input type="hidden" name="evento_id" id="eventoId">
        <input type="hidden" name="cantidad" value="1">
        <input type="text" id="numeroTarjeta" name="numeroTarjeta" placeholder="Número de tarjeta" required>
        <input type="number" id="cvv" name="cvv" placeholder="CVV" required>
        <input type="date" id="fechaExpiracion" name="fechaExpiracion" placeholder="Fecha de expiración" required>
        <button type="submit">Validar</button>
        <button type="button" onclick="cerrarModal()">Cancelar</button>
    </form>
</div>


<div class="row">
    <div class="col-12">
        {{ $eventos->links() }} <!-- Componente de paginación -->
    </div>
</div>
<script src="{{ asset('js/script.js') }}"></script>
<link href="{{ asset('css/tarjeta.css') }}" rel="stylesheet" />
