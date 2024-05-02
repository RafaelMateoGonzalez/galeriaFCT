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
                            <h4 class="card-title">Titulo de la tarjeta 1</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
                                tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                                nec tortor sit amet, maximus mattis dui.
                            </p>
                            <a href="#" class="btn btn-ligth2">Entrar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Titulo de la tarjeta 2</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
                                tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                                nec tortor sit amet, maximus mattis dui.
                            </p>
                            <a href="#" class="btn btn-light2">Entrar</a>
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
