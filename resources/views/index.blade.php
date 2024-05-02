<!DOCTYPE html>
<html lang="es">

@include('head');
<body>

@include('cookie');

<!--  Nav de inicio   -->
@include('nav');

<!-- Carousel de imagenes principales -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item fondo active" style="background-image: url('{{ asset('img/imagen6.jpg') }}')">
            <div class="carousel-caption">
                <h2>Exposiciones arte Europeo S.XVIII</h2>
                <p>Exposicion de arte abstracto</p>
                <p><a class="btn btn-lg btn-light" href="#">Entradas</a></p>
            </div>
        </div>
        <div class="carousel-item fondo" style="background-image: url('{{ asset('img/imagen4.jpg') }}')">
            <div class="carousel-caption">
                <h2>Exposiciones arte abstracto</h2>
                <p>Exposicion de arte abstracto</p>
                <p><a class="btn btn-lg btn-light" href="#">Entradas</a></p>
            </div>
        </div>
        <div class="carousel-item fondo" style="background-image: url('{{ asset('img/imagen7.jpg') }}')">
            <div class="carousel-caption">
                <h2>Exposiciones renacimiento</h2>
                <p>Exposicion de arte abstracto</p>
                <p><a class="btn btn-lg btn-light" href="#">Entradas</a></p>
            </div>
        </div>
    </div>
</div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<br /><br />
<div class="contenido">
    <h1>Nuestras exposiciones de Arte</h1>
    <br />


    <div class="shadow-sm p-3 mb-5 bg-body rounded" id="contenido">
        <h5>Exposiciones disponibles</h5>

    </div>


</div>


<div class="mb-3 bg-light" style="text-align:center;color:#818963 ">
    <div class="mb-4">
        <h2>Sobre Nosotros</h2>
    </div>


</div>




<!-- Footer-->
<div class="container my-5">

    <footer style="background-color: #deded5;">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">¿Dónde estamos?</h5>
                    <p>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">

                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        C/ Rota de Calatañazor nº3
                        <br />

                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1" style="letter-spacing: 2px; color: #818963;">Nuestro horario</h5>
                    <table class="table" style="color: #4f4f4f; border-color: #666;">
                        <tbody>
                        <tr>
                            <td>Lunes - Viernes</td>
                            <td>10:00 - 19:30 </td>
                        </tr>
                        <tr>
                            <td>Sabados</td>
                            <td>10:00 - 17:00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="#">Rafael Mateo</a>
        </div>

    </footer>

</div>




<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
