@extends('layouts.app')

@section('body')
    <!-- Page Info section -->
    <section class="page-info-section set-bg" data-setbg="img/page-top-bg/1.png">
        <img src="img/page-top-bg/page-info-img.png" alt="" class="page-info-img">
        <div class="container">
            <h2>Qui sommes-nous ?</h2>
            <div class="site-breadcrumb">
                <a href="/">Accueil</a> /
                <span>Qui sommes-nous ?</span>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 about-text">
                    <div class="sp-title">
                        <h4>Mon Parcours</h4>
                    </div>
                    <p>
                        Formée à l’Institut de Formation en Médecines Douces de Petit-Quevilly,
                        j’ai étudié ces médecines alternatives et complémentaires avec une grande passion.
                        J’ai notamment été certifiée en :
                    </p>
                    <ul>
                        <li>Phytothérapie</li>
                        <li>Aromathérapie</li>
                        <li>Fleurs de Bach</li>
                        <li>Apithérapie</li>
                        <li>Massages bien-être (sur table & massage AMMA assis)</li>
                    </ul>
                    <p></p>
                    <p>
                        C’est donc avec plaisir et honneur que je vous accueille à mon domicile de Berneval-Le-Grand jusqu’au printemps 2019,
                        car ensuite, un projet immobilier m’attend, vous offrant ainsi une pièce plus grande et plus confortable pour vous servir.
                    </p>
                </div>
                <div class="col-lg-6  order-1 order-lg-2">
                    <img src="{{ asset('img/qui-sommes-nous/parcours.jpg') }}" alt="Cécile massothérapeuthe">
                </div>
            </div>
        </div>
    </section>
    <section class="ap-course-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="ap-course-item">
                        <div class="ci-icon">
                            <i class="flaticon-002-yin-yang"></i>
                        </div>
                        <div class="ci-content">
                            <span>Begginer & Advanced</span>
                            <h4>Yoga</h4>
                            <p>Etiam pretium, nibh vitae varius ultr icies, tellus diam gravida elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ap-course-item">
                        <div class="ci-icon">
                            <i class="flaticon-001-meditation"></i>
                        </div>
                        <div class="ci-content">
                            <span>Begginer & Advanced</span>
                            <h4>Hatha</h4>
                            <p>Etiam pretium, nibh vitae varius ultr icies, tellus diam gravida elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ap-course-item">
                        <div class="ci-icon">
                            <i class="flaticon-021-yoga-mat"></i>
                        </div>
                        <div class="ci-content">
                            <span>Begginer & Advanced</span>
                            <h4>Pilates</h4>
                            <p>Etiam pretium, nibh vitae varius ultr icies, tellus diam gravida elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About page section end -->


    <!-- Appointment section -->
    <section class="appointment-section set-bg" data-setbg="img/appointment-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="appointment-img">
                        <img src="img/appointment-icon.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="appointment-text text-white">
                        <span>Begginer & Advanced</span>
                        <h2>Make an appointment</h2>
                        <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elementum dui. Curabitur et mattis ex, a ultrices lorem.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment section -->


    <!-- About page timetable section -->
    <section class="ap-timetable-section">
        <div class="ap-timetable-title">
            <h4>Today’s Timetable</h4>
        </div>
        <div class="timetable-item">
            <i class="flaticon-019-chakra-1"></i>
            <span>12:30 am - 02:00 PM</span>
            <h5>Meditation</h5>
            <p>With : Maria Smith & James Brown</p>
        </div>
        <div class="timetable-item">
            <i class="flaticon-021-yoga-mat"></i>
            <span>02:30 pm - 04:00 PM</span>
            <h5>Yoga</h5>
            <p>With : Maria Smith & James Brown</p>
        </div>
        <div class="timetable-item">
            <i class="flaticon-001-meditation"></i>
            <span>12:30 am - 02:00 PM</span>
            <h5>Pilates</h5>
            <p>With : Maria Smith & James Brown</p>
        </div>
        <div class="timetable-item">
            <i class="flaticon-044-aromatherapy"></i>
            <span>02:30 pm - 04:00 PM</span>
            <h5>Hatha</h5>
            <p>With : Maria Smith & James Brown</p>
        </div>
    </section>
    <!-- About page timetable section end -->

@endsection
