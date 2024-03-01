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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('login')}}"><i class="fa fa-lock"></i> Login</a></li>
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
            <h2 class="page-section-heading text-center text-uppercase text-white">Perfil Profesional</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-user-shield"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="text-justify mt-4">
                    <p class="lead">Soy un apasionado desarrollador Backend con una sólida experiencia en el framework Laravel. Mi enfoque principal es la creación de soluciones eficientes y escalables para satisfacer las necesidades específicas de los proyectos. Con un profundo conocimiento de las mejores prácticas de desarrollo, me esfuerzo por garantizar la calidad del código, la seguridad y la optimización del rendimiento.</p>
                </div>
            </div>
            <!-- About Section Button-->
            <!--<div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="https://futurodelweb.com">
                    <i class="fas fa-globe"></i>
                    Ver sitio web ahora!
                </a>
            </div>-->
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <!-- Client Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contacto</h2>
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
                            <div class="box-header box-header-whatsapp">
                                <i class="fab fa-whatsapp fa-3x" aria-hidden="true"></i>

                            </div>
                            <div class="box-bottom">
                                <div class="box-title whatsapp-title">
                                    Whatsapp
                                </div>
                                <div class="box-text">
                                    Comunicate conmigo desde Whatsapp.
                                </div>
                                <a href="https://wa.me/573013907024" target="_blank">Contactame</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 text-center">
                        <div class="box-column">
                            <div class="box-header box-header-telegram">
                                <i class="fab fa-telegram fa-3x" aria-hidden="true"></i>

                            </div>
                            <div class="box-bottom">
                                <div class="box-title telegram-title">
                                    Telegram
                                </div>
                                <div class="box-text">
                                    Comunicate conmigo desde Telegram
                                </div>
                                <a href="#" target="_blank">Contactame</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 text-center">
                        <div class="box-column">
                            <div class="box-header box-header-linkedin">
                                <i class="fab fa-linkedin fa-3x" aria-hidden="true"></i>

                            </div>
                            <div class="box-bottom">
                                <div class="box-title linkedin-title">
                                    LinkedIn
                                </div>
                                <div class="box-text">
                                    Conoce mi perfil de LinkedIn
                                </div>
                                <a href="#" target="_blank">Contactame</a>
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
                        Barranquilla, Colombia
                    </p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h6 class="text-uppercase mb-4">Correo Electronico</h6>
                    <p class="lead mb-0">
                        rslopez0611@gmail.com
                    </p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h6 class="text-uppercase mb-4">Curriculum</h6>
                    <a class="btn btn-xl btn-outline-light" href="{{ asset('storage/images/cv/CVRhadyLopez.pdf') }}">
                        <i class="fas fa-file"></i>
                        Descargalo
                    </a>
                </div>
                <!-- Footer Social Icons
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h6 class="text-uppercase mb-4">Redes sociales</h6>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>-->
                <!-- Footer About Text-->
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Rhady Lopez 2024</small></div>
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