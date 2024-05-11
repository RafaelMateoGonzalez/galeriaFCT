{{-- resources/views/eventos/listaEventos.blade.php --}}
<div class="row">
    @forelse($eventos as $evento)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($evento->foto)
                    <img src="{{ asset('storage/' . $evento->foto) }}" class="card-img-top" alt="Imagen del evento">
                @else
                    <img src="{{ asset('placeholder-image.png') }}" class="card-img-top" alt="Imagen no disponible">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $evento->titulo }}</h5>
                    <p class="card-text">{{ $evento->descripcion }}</p>
                    <p class="card-text"><small class="text-muted">Fecha del evento: {{ \Carbon\Carbon::parse($evento->fecha_evento)->format('d M Y') }}</small></p>
                    <p class="card-text">Precio de entrada: {{ number_format($evento->precio_entrada, 2) }}€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center">No hay eventos disponibles en este momento.</p>
    @endforelse
</div>

<div class="row">
    <div class="col-12">
        {{ $eventos->links() }} <!-- Componente de paginación -->
    </div>
</div>
