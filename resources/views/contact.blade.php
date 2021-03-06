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
                        <p>{{$presentation}}</p>
                        <h6>Information</h6>
                        <ul>
                            <li><a href="{{$facebook}}">La Halte Bien-Être sur Facebook</a></li>
                            <li><a href="tel:{{$telephone}}">{{$telephone}}</a></li>
                            <li><a href="mailto:{{$email}}">{{$email}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sp-title mb-0">
                        <span>Informations de contact</span>
                        <h4>N'attendez-plus !</h4>
                    </div>
                    <form class="contact-form" method="post" action="/send">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" required placeholder="Votre nom" name="name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" required placeholder="Votre e-mail ou téléphone" name="email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" required placeholder="Prestation choisie" name="service">
                                <textarea placeholder="Votre message" required name="txtmessage"></textarea>
                                <button class="site-btn" type="submit">envoyer</button>
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
                            @foreach($openHours as $day)
                            <li><span>{{$day->day}}</span>{{date('H:i',strtotime($day->openTime))}} - {{date('H:i',strtotime($day->closeTime))}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
