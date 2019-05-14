@extends('layouts.app')


@section('body')

    <section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.png">
        <div class="container">
            <h2>Partenariats</h2>
            <div class="site-breadcrumb">
                <a href="/">Accueil</a> /
                <span>Partenariats</span>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h5>Merci à eux!</h5>
                    <div class="carousel">
                        <div class="holder">
                            <img src="{{ asset('img/partners/florixir.jpg') }}" alt="" />
                            <img src="{{ asset('img/partners/fcn.jpg') }}" alt="" />
                            <img src="{{ asset('img/partners/orange-bleue.jpg') }}" alt="" />
                            <img src="{{ asset('img/partners/bragance.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->
@endsection
