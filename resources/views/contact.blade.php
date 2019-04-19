@extends('layouts.app')

@section('body')

    <!-- Page Info section -->
    <section class="page-info-section set-bg" data-setbg="img/page-top-bg/4.png">
        <div class="container">
            <h2>Blog</h2>
            <div class="site-breadcrumb">
                <a href="">Home</a> /
                <span>Blog</span>
            </div>
        </div>
    </section>
    <!-- Page Info end -->


    <!-- Contact page section -->
    <section class="contact-page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <div class="sp-title">
                            <span>Contact info</span>
                            <h4>About us</h4>
                        </div>
                        <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada.</p>
                        <h6>Information</h6>
                        <ul>
                            <li>Main Str, no 23, New York</li>
                            <li>+546 990221 123</li>
                            <li>hosting@contact.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sp-title mb-0">
                        <span>Contact info</span>
                        <h4>Get in touch</h4>
                    </div>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Your email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Subject">
                                <textarea placeholder="Message"></textarea>
                                <button class="site-btn">send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact page section end -->


    <!-- Map section -->
    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-7">
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
            </div>
        </div>
    </div>
    <!-- Map section end -->

@endsection