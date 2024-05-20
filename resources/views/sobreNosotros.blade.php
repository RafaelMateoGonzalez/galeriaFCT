<!DOCTYPE html>
<html lang="es">
@include('head');
<body>
@include('nav');
<br><br><br>
<div class="contenido">
    <h2>Sobre nosotros</h2>

    <br />

    <!-- Parte de experiencia 1-->
    <div class="shadow-sm p-3 mb-5 bg-body rounded" id="contenido">
        <h3>Experiencia</h3>

        <div class="row">
            <div class="col-lg-4">
                <!-- Imagen izquierda -->


                <img src="{{ asset('img/about1.jpg') }}" class="img-fluid mb-3" alt="Descripción imagen izquierda">
                <!-- Texto para la imagen izquierda -->
                <p><span>Gran experiencia en el sectro de las exposiciones</span>,nos abalan años siendo lideres a nivel europeo en el sector de las exposiones artisiticas en Europea</p>
            </div>
            <div class="col-lg-4">
                <!-- Contenido del centro, puede estar vacío o contener más información -->
            </div>

            <div class="col-lg-4">
                <!-- Imagen derecha -->
                <img src="{{ asset('img/about3.jpg') }}" class="img-fluid mb-3" alt="Descripción imagen izquierda">
                <!-- Texto para la imagen derecha -->
                <p class="secondText">La diversidad en nuestras exposiciones es algo que nos enorgullece siendo esta una de nuestras principales caracteristicas </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Contenido adicional o pie de página -->
            </div>
        </div>


    </div>


</div>


<!-- Parte de reconocimientos-->
<div class="contenido">
    <div class="shadow-sm p-3 mb-5 bg-body rounded" id="contenido">



        <div class="container">
            <h1>Reconocimientos de nuestras obras mas destacadas</h1>
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="https://www.web2020/imagenes/cuadro1.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Mejor Galería de arte en Zaragoza 2024</h4>
                            <p class="card-text">
                                Elegidos por la crítica como mejor  galería de arte de Zaragoza
                            </p>

                            <a class="btn btn-ligth2" href="{{ url('/') }}" >Eventos</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Diversidad en nuestras exposiciones</h4>
                            <p class="card-text">
                               Nos esforzamos por tener una gran variedad de exposiciones para dar variada experiencia a nuestros usuarios.
                            </p>
                            <a class="btn btn-ligth2" href="{{ url('/') }}" >Eventos</a>
                        </div>
                        <img class="card-img-bottom" src="https://www.web2020/imagenes/cuadro2.jpg">
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

</body>
</html>
