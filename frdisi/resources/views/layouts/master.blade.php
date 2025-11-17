<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FRDISI - Fondation de Recherche, de Développement et d’Innovation en Sciences et Ingénierie</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/logoS.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary top-bar wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center h-100">
            <div class="col-lg-4 text-center text-lg-start">
                <a href="{{ route('home') }}">
                    <img src="{{ 'img/logoFrdisi.png' }}" class="display-5 text-primary m-0 imglogo" alt="frdisi"
                        style="height:97px;">
                </a>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-phone-alt text-dark"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0">Call Us</h6>
                                <span class="text-white">+012 345 6789</span>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-envelope-open text-dark"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0" style="color: #627b2b !important;">Envoyez-nous un e-mail
                                </h6>
                                <span class="text-white" style="color: black !important;">contact@frdisi.ma</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-map-marker-alt text-dark"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0" style="color: #627b2b !important;">Addresse</h6>
                                <span class="text-white" style="color: black !important;">Zone Industrielle,
                                    Mohammedia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-secondary px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4 py-lg-0">
                <a class="navbar-brand d-lg-none" href="{{ route('home') }}">
                    <img src="{{ asset('img/logoFrdisi.png') }}" alt="FRDISI" style="height:50px;">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav me-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
                        <a href="#about" class="nav-item nav-link">À propos</a>
                        <a href="#brevets" class="nav-item nav-link">Brevets</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Candidature</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="" class="dropdown-item">Doctorat</a>
                                <a href="{{route('incubation')}}" class="dropdown-item">Incubation</a>
                            </div>
                        </div>
                        <a href="{{ route('contactUs') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="d-none d-lg-flex ms-auto">
                        <a class="btn btn-square btn-dark ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-dark ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-dark ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    @yield('content')
    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4 py-5 justify-content-center text-center">
                <div class="col-lg-4 col-md-8" style="margin-top: -2%;">
                    <img src="{{ asset('img/logoFrdisiWhite.png') }}" alt="" class="img-fluid mx-auto d-block">
                    <p class="mb-2 text-light">La Fondation de Recherche, de Développement et d’Innovation en Sciences et
                        Ingénierie à utilité
                        publique dont le président est le Conseiller de Sa
                        Majesté Mohammed VI Monsieur David André Azoulay</p>
                </div>

                <div class="col-lg-4 col-md-8 mb-4">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <div class="d-flex flex-column align-items-center">
                        <a class="btn btn-link text-light" href="/">Acceuil</a>
                        <a class="btn btn-link text-light" href="#about">À propos</a>
                        <a class="btn btn-link text-light" href="#brevets">Brevets</a>
                        <a class="btn btn-link text-light" href="{{ route('contactUs') }}">Contact Us</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 mb-4">
                    <h4 class="text-light mb-4">Infos contact</h4>
                    <p class="mb-2 text-light"><i class="fa fa-map-marker-alt me-3"></i>Zone Industrielle, Mohammedia</p>
                    <p class="mb-2 text-light"><i class="fa fa-envelope me-3"></i>contact@frdisi.ma</p>
                </div>
            </div>
            <div class="copyright pt-5">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-light">
                        &copy; <a class="fw-semi-bold text-light" href="/">frdisi</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
