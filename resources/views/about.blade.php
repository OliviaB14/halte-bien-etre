@extends('layouts.app')

@section('body')
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
                    <div>{!! $monParcours->body !!}</div>
                </div>
                <div class="col-lg-6  order-1 order-lg-2">
                    <img src="{{ asset('img/qui-sommes-nous/parcours.jpg') }}" alt="Cécile massothérapeuthe">
                </div>
            </div>
        </div>
    </section>
@endsection
