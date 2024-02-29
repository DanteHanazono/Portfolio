<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>🧑‍🔧Portafolio de proyectos de Rhady Lopez</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" src="{{asset('storage/images/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    @vite((['resources/css/styles.css']))
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><i class="fa fa-code"></i> Portafolio</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">
                            <i class="fa fa-list"></i> Proyectos</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about"><i class="fa fa-user"></i> Acerca de</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact"><i class="fa fa-lock"></i> Clientes</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->


            <div class="container">
                <div class="content-center">
                    <div class="cc-profile-image"><a href="#"><img src="{{asset('storage/images/img/Rhady.jpg')}}" alt="Image" /></a></div>

                </div>
            </div>
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Rhady Lopez Meneses</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Programador Web - BackEnd Laravel</p>

        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Proyectos</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-tasks"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-user-shield"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">La filosofía que nos motiva en nuestro trabajo es ayudar a las empresas a solucionar sus problemas a través del Diseño Web, Desarrollo Web, Materiales Didácticos Multimedia, Soporte Técnico, Publicidad Empresarial y Marketing.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">En el mundo de la informática los cambios son contantes, acelerados y con mucho enfoque innovador, por tal razón nuestro primer paso es cambiar nosotros mismos para luego convencer a otro de que los cambios son favorables partimos de experiencias vividas.</p>
                </div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="https://futurodelweb.com">
                    <i class="fas fa-globe"></i>
                    Ver sitio web ahora!
                </a>
            </div>
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <!-- Client Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Clientes</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-users"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 text-center">
                        <div class="box-column">
                            <div class="box-header box-header-twitter">
                                <i class="fab fa-twitter-square fa-3x" aria-hidden="true"></i>

                            </div>
                            <div class="box-bottom">
                                <div class="box-title twitter-title">
                                    Twitter
                                </div>
                                <div class="box-text">
                                    Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.
                                </div>
                                <a href="#" target="_blank">GO NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 text-center">
                        <div class="box-column">
                            <div class="box-header box-header-instagram">
                                <i class="fab fa-instagram-square fa-3x" aria-hidden="true"></i>

                            </div>
                            <div class="box-bottom">
                                <div class="box-title instagram-title">
                                    Instagram
                                </div>
                                <div class="box-text">
                                    Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.
                                </div>
                                <a href="#" target="_blank">GO NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 text-center">
                        <div class="box-column">
                            <div class="box-header box-header-facebook">
                                <i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i>

                            </div>
                            <div class="box-bottom">
                                <div class="box-title facebook-title">
                                    Facebook
                                </div>
                                <div class="box-text">
                                    Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.
                                </div>
                                <a href="#" target="_blank">GO NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h6 class="text-uppercase mb-4">Dirección</h6>
                    <p class="lead mb-0">
                        San Salvador, El Salvador
                        <br />
                        Clark, MO 65243
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h6 class="text-uppercase mb-4">Redes sociales</h6>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h6 class="text-uppercase mb-4">acerca de futurodelweb</h6>
                    <p class="lead mb-0">
                        Futuro del Web es una web comprometida con sus clientes brindando un servicio de calidad
                        <a href="https://futurodelweb.com/">futurodelweb.com</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; futurodelweb 2023</small></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    @vite(['resources/js/scripts.js'])
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
