@extends('layouts.master')

@section('content')
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="carousel-text">
                            <h1 class="display-1 text-uppercase mb-3">Appel à condidature 2025/2026</h1>
                            <div class="d-flex">
                                <a class="btn btn-primary py-3 px-4 me-3" href="">Inscription</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100" src="{{ asset('img/concours_doctorat2025.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="carousel-text">
                            <h1 class="display-1 text-uppercase mb-3">Appel à projets Février 2024</h1>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary py-3 px-4 me-3" href="">Inscription</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100" src="{{ asset('img/Appel_à_projets_Incubation.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="about-img">
                        <img class="img-fluid w-100" src="{{ asset('img/frdisi.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="section-title bg-white text-start text-primary pe-3">FRDISI</p>
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">La Fondation de Recherche, de Développement
                        et d’Innovation en Sciences et Ingénierie</h1>
                    <p class="mb-4 wow fadeIn text-dark" data-wow-delay="0.3s">La Fondation de Recherche, de Développement
                        et
                        d’Innovation en Sciences et Ingénierie à utilité publique dont le président est le Conseiller de Sa
                        Majesté Mohammed VI Monsieur David André Azoulay :</p>
                    <div class="row g-4 pt-2 mb-4">
                        <div class="col-sm-12 wow fadeIn" data-wow-delay="0.4s">
                            <div class="h-100">
                                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Plateforme de recherche,
                                    de formation, d’innovation, de valorisation industrielle et de transfert de technologies
                                </p>
                                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Plateforme
                                    d’accompagnement du processus d'innovation dans la conduite des projets collaboratifs
                                </p>
                                <p class="text-dark mb-0"><i class="fa fa-check text-primary me-2"></i>Plateforme
                                    d’incubation et de création des petites entreprises et des startups</p>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4 wow fadeIn text-dark" data-wow-delay="0.3s">Au fil des années, la fondation a acquis une
                        expérience
                        dans les domaines de formation de recherche scientifique d’accompagnement des projets, de
                        l’entreprenariat et de la création des startups</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Figuers Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <p class="section-title bg-white text-start text-primary pe-3">Statistiques</p>
            <div class="row g-4 justify-content-center align-items-center">
                <!-- Professeurs chercheurs -->
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center bg-primary py-5 px-4 h-100 rounded">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">48</h1>
                        <span class="text-white" style="font-weight: 800;">Professeurs chercheurs</span>
                    </div>
                </div>
                <!-- Doctorants -->
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center bg-primary py-5 px-4 h-100 rounded">
                        <i class="fa fa-graduation-cap fa-3x text-secondary mb-3"></i>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">68</h1>
                        <span class="text-white" style="font-weight: 800;">Doctorants</span>
                    </div>
                </div>
                <!-- Écoles supérieures -->
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center bg-primary py-5 px-4 h-100 rounded">
                        <i class="fa fa-graduation-cap fa-3x text-secondary mb-3"></i>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">3</h1>
                        <span class="text-white" style="font-weight: 800;">Écoles supérieures</span>
                    </div>
                </div>
                <!-- Brevets -->
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center bg-primary py-5 px-4 h-100 rounded">
                        <i class="fa fa-flask fa-3x text-secondary mb-3"></i>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">10</h1>
                        <span class="text-white" style="font-weight: 800;">Brevets</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Figuers End -->

    <!-- Brevets Strat -->
    <div class="container-fluid py-5" id="brevets">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.2s">
                    <p class="section-title bg-white text-start text-primary pe-3">Brevets</p>
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">liste des brevets et des projets en cours
                    </h1>
                    <div class="row g-4 pt-2 mb-4"></div>
                    <a class="btn btn-primary py-3 px-4" href="{{route('brevets')}}">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brevets End -->

    <div class="container-fluid py-5">
        <div class="container">
            <p class="section-title bg-white text-start text-primary pe-3">Nos partenaires</p>
            <section class="customer-logos slider">
                <div class="slide"><img src="{{ asset('img/partenaires/Academie_hasaan.png') }}"
                        alt="Académie Hassan II des Sciences et Techniques"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/ALTRAN.png') }}" alt="ALTRAN"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/Ambassade_France.png') }}"
                        alt="Ambassade de France"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/BDA _FRICA.png') }}"
                        alt="Bio-Cellular Design Aeronautics"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/CNRST.png') }}" alt="CNRST"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/COSUMAR.png') }}" alt="COSUMAR"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/DNA.jpg') }}" alt="Delta Nord Afrique"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/ECOFUND.png') }}" alt="Ecofund"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/EIGSI.png') }}" alt="EIGSI"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/EMSI.png') }}" alt="EMSI"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/EUROMED_de_FES.png') }}"
                        alt="Université Euromed de Fès"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/GIMAS_2.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/GIMAS.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/HUAWEI.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/INDH.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/INNOVATECH.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/IRESEN.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/LINA_HOLDING.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/MANICATEC.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/MASCIR.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img
                        src="{{ asset('img/partenaires/Minist╨Ъre_de_industrie_et_du_commerce2.png') }}"></div>
                <div class="slide"><img src="{{ asset('img/partenaires/Ministere_de_industrie_et_du_commerce.png') }}">
                </div>
                <div class="slide"><img src="{{ asset('img/partenaires/Ministre_de_Enseignement_Sup╨Тrieur.png') }}">
                </div>
                <div class="slide"><img src="{{ asset('img/partenaires/NEXEYA_Maroc.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/OMPIC.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/ONEE.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/SAFRAN.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/SONASAID.png') }}" class="img-fluid"
                        alt=""></div>
                <div class="slide"><img src="{{ asset('img/partenaires/TELEPAC_Technologie.png') }}" class="img-fluid">
                </div>
                <div class="slide"><img src="{{ asset('img/partenaires/UM6P.png') }}" class="img-fluid"
                        alt=""></div>
            </section>
        </div>
    </div><!-- End Partenaires Section -->
    <script>
        $(document).ready(function() {
            $(".customer-logos").slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }
                ]
            });
        });
    </script>
@endsection
