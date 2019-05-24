@extends('layouts.app')


@section('body')
<section class="hero-section set-bg" data-setbg="img/hero-bg.png">
    <div class="hero-content-warp">
        <div class="container">
            <div class="hero-content">
                <h2>La <span>Halte</span><br> Bien-être</h2>
                <p>Massages bien-être relaxant, décontractant et énergisant.</p>
                <a href="#" class="site-btn">discover</a>
            </div>
        </div>
        <img src="{{ asset('img/home-design.png') }}" class="hero-img" alt="">
    </div>
</section>

<section class="courses-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="course-item">
                    <div class="ci-icon">
                        <i class="flaticon-002-yin-yang"></i>
                    </div>
                    <h4>Massages</h4>
                    <p>Relaxant, suédois, ciblé. Je vous accueille à mon domicile.</p>
                    <a href="#" class="site-btn">en savoir plus</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="course-item">
                    <div class="ci-icon">
                        <i class="flaticon-001-meditation i-fix"></i>
                    </div>
                    <h4>Aromathérapie</h4>
                    <p>Je vous conseille et vous guide dans votre bien-être.</p>
                    <a href="#" class="site-btn">en savoir plus</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="course-item">
                    <div class="ci-icon">
                        <i class="flaticon-021-yoga-mat"></i>
                    </div>
                    <h4>Massage AMMA assis</h4>
                    <p>Je me déplace pour votre bien-être.</p>
                    <a href="#" class="site-btn">en savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="timetable-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-9">
                <div class="timetable-box">
                    <div class="sp-title">
                        <h4>Horaires de disponibilité</h4>
                    </div>
                    <ul>
                        <li><span>Lundi</span>10:00 - 19:00</li>
                        <li><span>Mercredi</span>10:00 - 19:00</li>
                        <li><span>Jeudi</span>10:00 - 19:00</li>
                        <li><span>Vendredi</span>10:00 - 19:00</li>
                        <li><span>Samedi</span>10:00 - 19:00</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="timetable-text" style="padding-top: 20px;">
                    <div class="sp-title">
                        <span>La boutique</span>
                        <h4>Des petits prix, pour vous</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-unstyled">
                                <a href="https://www.facebook.com/pg/lahaltebienetre/shop/?ref=page_internal" target="_blank">
                                    <li class="media">
                                        <img src="{{ asset('img/products/eau-micellaire-bio.jpg') }}" class="mr-3 shadow" width="150px" alt="...">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">Eau micellaire bio</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                </a>
                                <a href="https://www.facebook.com/pg/lahaltebienetre/shop/?ref=page_internal" target="_blank">
                                    <li class="media my-4">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">Stick inhalateur aux huiles essentielles</h5>
                                            <p>Confection d'un stick inhalateur selon votre problématique (fatigue, manque d'energie, stick hiver, détente...)</p><p>Envoi possible en lettre bulle dans toutes la France !</p>
                                        </div>
                                        <img src="{{ asset('img/products/default.png') }}" width="150px" class="ml-3 shadow" alt="...">
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-12">
                            <a href="https://www.facebook.com/pg/lahaltebienetre/shop/?ref=page_internal" class="btn btn-block text-uppercase" id="boutique-btn"><i class="fa fa-eye mr-3"></i>Voir les autres produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section spad set-bg" data-setbg="img/testimonial-bg.jpg">
    <img src="img/testimonial-img-1.png" class="testimonial-img-1" alt="">
    <img src="img/testimonial-img-2.png" class="testimonial-img-2" alt="">
    <div class="container">
        <div class="sp-title text-white text-center">
            <img src="img/quota.png" alt="">
            <span>Vos avis et vos retours</span>
            <h4>Vous en parlez le mieux</h4>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimonial-content">
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmarc.arnoult%2Fposts%2F2316417905045465&width=500" width="500" height="161" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    <a href="https://www.facebook.com/pg/lahaltebienetre/reviews/?ref=page_internal">
                        <h6>
                            <img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-512.png" alt="" width="34">
                            La Halte Bien-Être est sur Facebook
                        </h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="gallery-section">
    <div class="gallery-slider owl-carousel">
        <div class="gallery-item">
            <img src="img/gallery/1.jpg" alt="">
        </div>
        <div class="gallery-item">
            <img src="img/gallery/2.jpg" alt="">
        </div>
        <div class="gallery-item">
            <img src="img/gallery/3.jpg" alt="">
        </div>
        <div class="gallery-item">
            <img src="img/gallery/4.jpg" alt="">
        </div>
        <div class="gallery-item">
            <img src="img/gallery/5.jpg" alt="">
        </div>
    </div>
</div>

@endsection
