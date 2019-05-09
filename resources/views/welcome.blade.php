@extends('layouts.app')


@section('body')
<section class="hero-section set-bg" data-setbg="img/hero-bg.png">
    <div class="hero-content-warp">
        <div class="container">
            <div class="hero-content">
                <img src="img/hero-icon.png" alt="">
                <h2>La <span>Halte</span> au bien-être</h2>
                <p>Massages bien-être relaxant, décontractant et énergisant.</p>
                <a href="#" class="site-btn">discover</a>
            </div>
        </div>
        <img src="img/hero-img.png" class="hero-img" alt="">
    </div>
</section>

<!-- Courses section -->
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
<!-- Courses section end -->


<!-- Meditation section -->
<section class="meditation-section set-bg" data-setbg="img/meditation-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="meditation-content">
                    <div class="sp-title text-white">
                        <span>Begginer & Advanced</span>
                        <h4>Meditation Sessions</h4>
                    </div>
                    <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elementum dui. Curabitur et mattis ex, a ultrices lorem. </p>
                    <a href="#" class="site-btn">discover</a>
                </div>
            </div>
        </div>
    </div>
    <img src="img/meditation-img.png" class="meditation-img" alt="">
</section>
<!-- Meditation section end -->


<!-- Timetable section -->
<section class="timetable-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-9">
                <div class="timetable-box">
                    <div class="sp-title">
                        <span>Begginer & Advanced</span>
                        <h4>Working Hours</h4>
                    </div>
                    <ul>
                        <li><span>Monday</span>09:30 AM -19:30 PM</li>
                        <li><span>Tuesday</span>09:30 AM -19:30 PM</li>
                        <li><span>Wednesday</span>09:30 AM -19:30 PM</li>
                        <li><span>Thursday</span>09:30 AM -19:30 PM</li>
                        <li><span>Friday</span>09:30 AM -19:30 PM</li>
                        <li><span>Saturday</span>09:30 AM -16:30 PM</li>
                        <li><span>Sunday</span>Closed</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="timetable-text">
                    <div class="sp-title">
                        <span>Begginer & Advanced</span>
                        <h4>Meditation Sessions</h4>
                    </div>
                    <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elementum dui. Curabitur et mattis ex, a ultrices lorem. </p>
                    <div class="site-progress-bars">
                        <div class="progress-item">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><span>60%</span></div>
                            </div>
                            <p>Breathing</p>
                        </div>
                        <div class="progress-item">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"><span>87%</span></div>
                            </div>
                            <p>Meditation</p>
                        </div>
                        <div class="progress-item">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span>70%</span></div>
                            </div>
                            <p>Flexibility</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Timetable section end -->


<!-- Testimonial section -->
<section class="testimonial-section spad set-bg" data-setbg="img/testimonial-bg.jpg">
    <img src="img/testimonial-img-1.png" class="testimonial-img-1" alt="">
    <img src="img/testimonial-img-2.png" class="testimonial-img-2" alt="">
    <div class="container">
        <div class="sp-title text-white text-center">
            <img src="img/quota.png" alt="">
            <span>Begginer & Advanced</span>
            <h4>Meditation Sessions</h4>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimonial-content">
                    <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in fauci-bus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elementum dui. Curabitur et mattis ex, a ultrices lorem. </p>
                    <h6>Maria Smith</h6>
                    <span>Customer</span>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="contact-section">
    <div class="map-warp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20536.469437823635!2d1.1709809252100172!3d49.954001732221485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0a6c1061b26a9%3A0x40c14484fb68f70!2s76370+Berneval-le-Grand!5e0!3m2!1sfr!2sfr!4v1557431309096!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="contact-box contact-text">
                    <div class="sp-title">
                        <span>Begginer & Advanced</span>
                        <h4>Meditation Sessions</h4>
                    </div>
                    <h6>Information</h6>
                    <ul>
                        <li><a href="http://www.facebook.com/lahaltebienetre">La Halte au Bien-Être sur Facebook</a></li>
                        <li><a href="tel:0664054024">06.64.05.40.24</a></li>
                        <li><a href="mailto:lahaltebienetre@gmail.com">lahaltebienetre@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->


<!-- Gallery section -->
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
<!-- Gallery section end -->

@endsection

