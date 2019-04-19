@extends('layouts.app')


@section('body')
<div w3-include-html="navbar.html"></div>
<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="img/hero-bg.png">
    <div class="hero-content-warp">
        <div class="container">
            <div class="hero-content">
                <img src="img/hero-icon.png" alt="">
                <h2>Find your inner <span>CHI</span></h2>
                <p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor, sit amet elementum lorem. Ut cursus tempor turpis.</p>
                <a href="#" class="site-btn">discover</a>
            </div>
        </div>
        <img src="img/hero-img.png" class="hero-img" alt="">
    </div>
</section>
<!-- Hero section end -->


<!-- Courses section -->
<section class="courses-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="course-item">
                    <div class="ci-icon">
                        <i class="flaticon-002-yin-yang"></i>
                    </div>
                    <span>Begginer & Advanced</span>
                    <h4>Yoga</h4>
                    <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="course-item">
                    <div class="ci-icon">
                        <i class="flaticon-001-meditation i-fix"></i>
                    </div>
                    <span>Begginer & Advanced</span>
                    <h4>Hatha</h4>
                    <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="course-item">
                    <div class="ci-icon">
                        <i class="flaticon-021-yoga-mat"></i>
                    </div>
                    <span>Begginer & Advanced</span>
                    <h4>Pilates</h4>
                    <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor</p>
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
<!-- Testimonial section end -->



<!-- Contact section -->
<div class="contact-section">
    <div class="map-warp"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="contact-box contact-text">
                    <div class="sp-title">
                        <span>Begginer & Advanced</span>
                        <h4>Meditation Sessions</h4>
                    </div>
                    <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                    <h6>Information</h6>
                    <ul>
                        <li>Main Str, no 23, New York</li>
                        <li>+546 990221 123</li>
                        <li>hosting@contact.com</li>
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

