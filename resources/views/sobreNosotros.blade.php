<!DOCTYPE html>
<html lang="es">
@include('head');
<body>
@include('nav');
<br><br><br>

<div class="contenido">
    <h2 class="purple">Sobre nosotros</h2>


    <br />

    <!-- Parte de experiencia 1-->
    <div class="shadow-sm p-3 mb-5 bg-body rounded" id="experiencia">
        <h3>Experiencia</h3>

        <div class="row">
            <div class="col-lg-4">
                <!-- Imagen izquierda -->
                <img src="{{ asset('img/about1.jpg') }}" class="img-fluid mb-3" alt="Descripción imagen izquierda">
                <!-- Texto para la imagen izquierda -->
                <p class="text-black-50"><span>Gran experiencia en el sector de las exposiciones</span> nos avalan años siendo líderes a nivel europeo en el sector de las exposiciones artísticas en Europa.</p>
            </div>
            <div class="col-lg-4">
                <!-- Contenido del centro, puede estar vacío o contener más información -->
            </div>

            <div class="col-lg-4">
                <!-- Imagen derecha -->
                <img src="{{ asset('img/about3.jpg') }}" class="img-fluid mb-3" alt="Descripción imagen derecha">
                <!-- Texto para la imagen derecha -->
                <p class="secondText text-black-50">Contamos con opciones de audio guía que ofrecen una narración profesional sobre las obras y la galería, similar a lo que se encontraría en una visita física.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Contenido adicional o pie de página -->
            </div>
        </div>
    </div>

    <!-- Parte de reconocimientos-->
    <div class="contenido">
        <div class="shadow-sm p-3 mb-5 bg-body rounded" id="reconocimientos">
            <br>
            <div class="container">
                <h1>Reconocimientos de nuestras obras más destacadas</h1>
                <div class="row">
                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-bottom" src="{{ asset('img/nosotros1.jpg') }}" alt="Mejor Galería de arte en Zaragoza 2024">
                            <div class="card-body">
                                <h4 class="card-title">Mejor Galería de arte en Zaragoza 2024</h4>
                                <p class="card-text">Elegidos por la crítica como mejor galería de arte de Zaragoza</p>
                                <a class="btn btn-ligth2" href="{{ url('/') }}">Eventos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Diversidad en nuestras exposiciones</h4>
                                <p class="card-text">Nos esforzamos por tener una gran variedad de exposiciones para dar variada experiencia a nuestros usuarios.</p>
                                <a class="btn btn-ligth2" href="{{ url('/') }}">Eventos</a>
                            </div>
                            <img class="card-img-bottom" src="{{ asset('img/nosotros4.jpg') }}" alt="Diversidad en nuestras exposiciones">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="mb-3 bg-light" style="text-align:center;color:#818963 ">
    <div class="mb-4">
        <h2>Contacto</h2>
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
                        C/ Rota de Calatañazor nº3 ,Zaragoza
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



</body>
</html>
