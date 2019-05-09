@extends('layouts.app')

@section('body')
    <section class="page-info-section set-bg" data-setbg="{{ asset('img/contact.jpg') }}">
        <div class="container">
            <h2 class="text-black-50">Contact</h2>
            <div class="site-breadcrumb">
                <a href="/">Accueil</a> /
                <span>Contact</span>
            </div>
        </div>
    </section>
    <section class="contact-page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <div class="sp-title">
                            <h4>Votre bien-être est ma priorité</h4>
                        </div>
                        <p>
                            Formée à l’Institut de Formation en Médecines Douces de Petit-Quevilly, j’ai étudié ces médecines alternatives et complémentaires avec une grande passion.
                        </p>
                        <h6>Information</h6>
                        <ul>
                            <li><a href="http://www.facebook.com/lahaltebienetre">La Halte au Bien-Être sur Facebook</a></li>
                            <li><a href="tel:0664054024">06.64.05.40.24</a></li>
                            <li><a href="mailto:lahaltebienetre@gmail.com">lahaltebienetre@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sp-title mb-0">
                        <span>Informations de contact</span>
                        <h4>N'attendez-plus !</h4>
                    </div>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Votre nom">
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Votre adresse e-mail">
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Votre message">
                                <textarea placeholder="Votre message"></textarea>
                                <button class="site-btn">envoyer</button>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20536.469437823635!2d1.1709809252100172!3d49.954001732221485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0a6c1061b26a9%3A0x40c14484fb68f70!2s76370+Berneval-le-Grand!5e0!3m2!1sfr!2sfr!4v1557431309096!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-7">
                    <div class="timetable-box">
                        <div class="sp-title">
                            <h4>Horaires de disponibilité</h4>
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
@endsection
