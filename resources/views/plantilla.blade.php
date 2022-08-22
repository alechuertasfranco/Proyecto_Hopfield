<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Aprende Jugando</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
    <link rel="shortcut icon" href="img/loguito1.png">
    <link href="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/dist/css/style.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/brands.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/regular.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/solid.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/svg-with-js.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/v4-shims.min.css" />
    <link rel="stylesheet" href="/css/balloons.css" />

    <style type="css">
        .container{
                display: static
            }
        </style>
</head>

<body>
    <div id="main-wrapper">
        <header class="py-3 bg-ligth">
            <div class="container">
                <!-- Header -->
                <div class="header">
                    <nav class="navbar navbar-expand-md navbar-light px-0">
                        <a class="navbar-brand" href="#">
                            <img src="img/logo1.png" style="" width="20%"
                                alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item pr-3">
                                    <button onclick="toInicio()" class="btn btn-custom btn-info btn-md"
                                        style="border-radius: 5px;">Inicio</button>
                                </li>
                                <li class="nav-item pr-3">
                                    <button onclick="toObjetivo()" class="btn btn-custom btn-outline-info btn-md"
                                        style="border-radius: 5px;">Objetivo</button>
                                <li class="nav-item pr-3">
                                    <button onclick="toJuego()" class="btn btn-custom btn-outline-info btn-md"
                                        style="border-radius: 5px;">A jugar</button>
                                </li>
                                <li class="nav-item">
                                    <button onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="btn btn-custom btn-outline-info btn-md"
                                        style="border-radius: 5px;">Salir</button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End Header -->
            </div>
        </header>
        <!-- Contenido -->
        <div class="content-wrapper" style="background-color: white;">
            <section style="background-color: white;">
                <div class="container">
                    {{-- TITULO --}}
                    <div class="row justify-content-md-center pt-2">
                        <div class="col-md-9 text-center">
                            <h1 class="text-dark" style="padding-top: 20px;">APRENDE JUGANDO <span
                                    class="border-bottom border-dark"> </span></h1>
                            <h3 tyle="color: gray;">Identificación de caracteres para el aprendizaje preescolar</h3>
                        </div>
                    </div>
                    <div class="row py-5">
                        <!-- ============================================================== -->
                        <!-- INICIO -->
                        <!-- ============================================================== -->
                        <div class="col-md-12" id="inicio">
                            <div class="card pro-demo p-2 mr-1">
                                <div class="card-body p-4" style="background-color: rgb(173, 226, 169);">
                                    <div class="text-center">
                                        <h2 class="text-success font-weight-medium">¡BIENVENIDOS!</h2>
                                    </div>
                                    {{-- CARRUSEL --}}
                                    <div class="text-center mt-4">
                                        <div class="card-body">
                                            <div id="carouselExampleIndicators" class="carousel slide"
                                                data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                        class="active" hidden></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" hidden></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" hidden></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" hidden></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="4" hidden></li>
                                                </ol>
                                                <div class="carousel-inner" aling="center">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100 h-50" src="img/4.png"
                                                            alt="First slide" style="height: 50px;">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100 h-50" src="img/5.png"
                                                            alt="Second slide" style="height: 50px;">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100 h-50" src="img/6.png"
                                                            alt="Third slide" style="height: 50px;">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                    role="button" data-slide="prev" hidden>
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                    role="button" data-slide="next" hidden>
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- FIN DE CARRUSEL --}}
                                    <div class="row text-dark mt-5">
                                        <div class="col-md-12">
                                            <ul class="list-unstyled listing">
                                                <p class="line-h33 font-16">
                                                    El grupo 4 les da bienvenida a nuestro proyecto titulado
                                                    "Identificación de caracteres
                                                    para el Aprendizaje preescolar", donde los niños de manera didáctica
                                                    podrán Aprender Jugando.
                                                    Para la dinámica, se necesitará de la ayuda de un supervisor que
                                                    ingrese el caracter
                                                    que el niño aprenderá, ya sea una vocal, letra, o número; de acuerdo
                                                    a ello,
                                                    el niño podrá dibujar dicho caracter y el juego identificará si se
                                                    parecen.
                                                </p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <!-- ============================================================== -->
                        <!-- OBJETIVOS -->
                        <!-- ============================================================== -->
                        <div class="col-md-12" id="objetivos">
                            <div class="card pro-demo p-2 ml-1">
                                <div class="card-body p-4" style="background-color: rgb(240, 233, 142);">
                                    <div class="text-center">
                                        <h2 class="text-warning font-weight-medium">OBJETIVOS</h2>
                                    </div><br>
                                    <div class=" text-center mt-2">
                                        <img class="img-fluid" src="img/8.png" alt="Pro version" style="height: 400px;">

                                    </div>
                                    <div class="row text-dark mt-5">
                                        <div class="col-md-12">
                                            <ul class="list-unstyled listing">
                                                <p class=" line-h33 font-16">
                                                    El objetivo que queremos desarrollar al aplicar este proyecto es
                                                    promover el aprendizaje en entornos dinámicos, atractivos y
                                                    divertidos;
                                                    con la finalidad de ayudar a niños entre 3 a 5 años a reconocer y
                                                    aprender caracteres básicos a través de una página web interactiva,
                                                    logrando un impacto en dichos niños y motivandolos a seguir
                                                    aprendiendo.
                                                </p>
                                                <p class=" line-h33 font-16">

                                                </p>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <!-- ============================================================== -->
                        <!-- A JUGAR -->
                        <!-- ============================================================== -->
                        <div class="col-md-12" id="ajugar">

                            <div class="card pro-demo p-2 ml-1">
                                <div class="card-body p-4" style="background-color: lightblue; ">
                                    <div class="text-center">
                                        <h1 id="lbl_felicitaciones" class="ml2" hidden>Felicitaciones !!</h1>
                                        <div id="lbl_ajugar">
                                            <h2 class="text-info font-weight-medium">A JUGAR</h2>
                                            <h4 class="text-dark">¿Estás listo?</h4>
                                        </div>
                                    </div>
                                    <div class="text-center mt-1">
                                    </div>
                                    <div class="text-center mt-3"
                                        style="background-image: url(img/3_.jpg); background-repeat:no-repeat; background-size:cover;">

                                        <div class="col-md-12">
                                            <ul class="list-unstyled listing">
                                                <form id="caracter-form">
                                                    @csrf
                                                    <!-- CSRF Token -->
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                    <div class="row mb-4">
                                                        <div class="col-md-7 ">
                                                            <canvas id="lienzo" width="300" height="300"
                                                                style="margin-top: 5%;border: 1px solid black;"></canvas>
                                                        </div>
                                                        <div class="col-md-4 d-flex align-items-center">
                                                            <div class="text-center row">
                                                                <div class="col-12">
                                                                    <div id="agregar_form" hidden>
                                                                        <h1
                                                                            style="font-size: 20px; margin-bottom: 10px">
                                                                            Ingrese el caracter:
                                                                        </h1>
                                                                        <input style="font-size: 20px; "
                                                                            id="txt_caracter" name="txt_caracter"
                                                                            class="form-control text-center mb-2"
                                                                            style="border-radius: 5px; ">
                                                                    </div>
                                                                    <div>
                                                                        <h1 id="lbl_modo_juego"
                                                                            style="font-size: 20px; margin-bottom: 20px">
                                                                            Ingrese el modo de juego:
                                                                        </h1>
                                                                        <select id="cmb_tipo" class="form-control"
                                                                            name="cmb_tipo"
                                                                            style="border-radius: 5px; font-size: 20px;">
                                                                            <option selected hidden>Selecciona una
                                                                                opción</option>
                                                                            <option value="1">Vocal</option>
                                                                            <option value="2">Número</option>
                                                                            <option value="3">Letra</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center col-12 mt-4">
                                                                    <a id='btn_empezar' href="#ajugar"
                                                                        onclick="empezar()"
                                                                        class="btn btn-custom btn-outline-info btn-md"
                                                                        style="border-radius: 5px;">
                                                                        Empezar
                                                                    </a>
                                                                    <a href="#ajugar" id="buscar"
                                                                        class="btn btn-custom btn-outline-info btn-md"
                                                                        style="border-radius: 5px;">
                                                                        Confirmar
                                                                    </a>
                                                                    <button id="btn_agregar" type="submit" hidden
                                                                        class="btn btn-custom btn-outline-info btn-md"
                                                                        style="border-radius: 5px;">
                                                                        Agregar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="text-center">
                                                            <button class="btn btn-custom btn-outline-info btn-md"
                                                                id="clear" style="border-radius: 5px;">
                                                                Limpiar
                                                            </button>
                                                            <button id="btn_mostrar_agregar" onclick="mostrarAgregar()"
                                                                class="btn btn-custom btn-outline-info btn-md"
                                                                style="border-radius: 5px;">
                                                                Agregar
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img class="img-fluid" src="img/4.png" alt="Pro version">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <footer style="background-color: white;">
            <img src="img/footer1.png" alt="" class="img-fluid" width="110%" height="155px" >

        </footer>
        </section>
    </div>
    <!-- ============================================================== -->
    <!-- PIE DE PAGINA -->
    <!-- ============================================================== -->

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- All Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/brands.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/fontawesome.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/regular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/solid.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/v4-shims.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="/js/script.js"></script>
<script src="/js/diseño.js"></script>
<script src="/js/balloons.js"></script>
<script
    src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/jquery/dist/jquery.min.js">
</script>
<script
    src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/popper.js/dist/umd/popper.min.js">
</script>
<script
    src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/bootstrap/dist/js/bootstrap.min.js">
</script>
<script>
    function toInicio() {
        document.getElementById('').scrollIntoView({
            behavior: "smooth"
        });
    };

    function toObjetivo() {
        var elmnt = document.getElementById("objetivos");
        console.log(elmnt)
        elmnt.scrollIntoView({
            behavior: "smooth"
        });
    };

    function toJuego() {
        document.getElementById('ajugar').scrollIntoView({
            behavior: "smooth"
        });
    };

</script>

</html>
