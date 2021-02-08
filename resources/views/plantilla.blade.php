<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
        <meta name="description" content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
        <meta name="robots" content="noindex,nofollow">
        <title>PROYECTO HOPFIELD</title>
        <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <link href="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/dist/css/style.css" rel="stylesheet">
    </head>
    
    <body>
        <div id="main-wrapper">
            <header class="py-3 bg-white">
                <div class="container">
                    <!-- Header -->
                    <div class="header">
                        <nav class="navbar navbar-expand-md navbar-light px-0">
                            <a class="navbar-brand" href="#">
                                <img src="https://unitru.edu.pe/Recursos/img-unt/logo-unt1.png" style="" width="17%" alt="logo">                                
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item pr-3">
                                        <a href="#inicio" class="btn btn-custom btn-outline-info btn-md" style="border-radius: 5px;">Inicio</a>
                                    </li>
                                    <li class="nav-item pr-3">
                                        <a href="#objetivos" class="btn btn-custom btn-outline-info btn-md" style="border-radius: 5px;">Objetivo</a>
                                    <li class="nav-item">
                                        <a href="#ajugar" class="btn btn-custom btn-info btn-md" style="border-radius: 5px;">A JUGAR</a>
                                    </li>                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- End Header -->
                </div>
            </header>
            <!-- Contenido -->
            <div class="content-wrapper" style="background-image: url(img/2.jpg); background-repeat:no-repeat; background-size:cover;">
                <section class="spacer bg-light" style="background-image: url(img/2.jpg); background-repeat:no-repeat; background-size:cover;">
                    <div class="container" >
                        {{-- TITULO --}}
                        <div class="row justify-content-md-center pt-2">
                            <div class="col-md-9 text-center">                         
                                <h1 class="text-dark">APRENDE <span class="font-weight-bold">JUGANDO</span> <span class="border-bottom border-dark"> </span></h1>
                                <h3 class="text-info">Identificación de caracteres para el aprendizaje preescolar</h3>
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
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                                    </ol>
                                                    <div class="carousel-inner" aling="center">
                                                      <div class="carousel-item active">
                                                        <img class="d-block w-100 h-50" src="img/4.jpg" alt="First slide" style="height: 50px;">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img class="d-block w-100 h-50" src="img/5.jpg" alt="Second slide" style="height: 50px;">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img class="d-block w-100 h-50" src="img/6.jpg" alt="Third slide" style="height: 50px;">
                                                      </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
                                            El grupo 4 les da bienvenida a nuestro proyecto titulado "Identificación de caracteres 
                                            para el Aprendizaje preescolar", donde los niños de manera didáctica podrán Aprender Jugando.
                                            Para la dinámica, se necesitará de la ayuda de un supervisor que ingrese el caracter 
                                            que el niño aprenderá, ya sea una vocal, letra, o número; de acuerdo a ello, 
                                            el niño podrá dibujar dicho caracter y el juego identificará si se parecen.
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
                                        <div class="text-center" >
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
                                                    promover el aprendizaje en entornos dinámicos, atractivos y divertidos;
                                                    con la finalidad de ayudar a niños entre 3 a 5 años a reconocer y 
                                                    aprender caracteres básicos a través de una página web interactiva, 
                                                    logrando un impacto en dichos niños y motivandolos a seguir aprendiendo.
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
                                        <div class="text-center" >
                                            <h2 class="text-info font-weight-medium">A JUGAR</h2>
                                            <h4 class="text-dark">¿Estás listo?</h4>
                                        </div>
                                        <div class="text-center mt-1"  >
                                        </div>
                                        <div class="text-center mt-3" style="background-image: url(img/3_.jpg); background-repeat:no-repeat; background-size:cover;" >
                                            <div class="col-md-12">
                                                <ul class="list-unstyled listing">
                                                    <div class="row">
                                                        <div class="col-md-7" >
                                                            <div class="text-center">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <br><a style="font-size: 20px; ">Ingrese el caracter: </a><br>
                                                                <input type="" id="" class="form-control" style="border-radius: 5px; "><br>
                                                                <a style="font-size: 20px;">Ingrese el tipo: </a><br>
                                                                <select class="form-control" style="border-radius: 5px;">
                                                                    <option selected hidden>Selecciona</option>
                                                                    <option value="1">Vocal</option>
                                                                    <option value="2">Número</option>
                                                                    <option value="3">Letra</option>
                                                                </select><br>
                                                            </div>
                                                            <div class="text-center" style="border-radius: ">
                                                                <a href="" type="button" class="btn btn-custom btn-outline-info btn-md" style="border-radius: 5px;">Agregar</a>
                                                            </div><br>
                                                        </div>
                                                        
                                                    </div><br><br>
                                                    <div class="row">
                                                        <div class="col-md-7" >
                                                            <div class="text-center">
                                                                <a href="" type="button" class="btn btn-custom btn-outline-info btn-md" style="border-radius: 5px;">Limpiar</a>&nbsp&nbsp&nbsp
                                                                <a href="" type="button" class="btn btn-custom btn-outline-info btn-md" style="border-radius: 5px;">Buscar</a>
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
                </section>
            </div>
            <!-- ============================================================== -->
            <!-- PIE DE PAGINA -->
            <!-- ============================================================== -->
            <footer id="nosotros" class="text-center p-4" style="background-color: peru;"> 
                <p style="color: black;">  Derechos reservador por el Autor. Diseñado y Desarrollado por Grupo 4. </p>
                <p style="font-size: 12px; color: black;" > - Huertas Franco Alec <br>
                    - Paulino Vigo Arturo <br>
                    - Roncal Sánchez Geraldine <br>
                    - Salvador Llaro Ericka <br>
                    - Zavaleta Taucett Jhanpoul   </p>

            </footer>
        </div>
    </body>
    <!-- All Jquery -->
    <script src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
</html>