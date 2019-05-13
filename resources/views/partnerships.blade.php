@extends('layouts.app')


@section('body')

    <section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.png">
        <div class="container">
            <h2>Blog</h2>
            <div class="site-breadcrumb">
                <a href="/">Accueil</a> /
                <span>Partenariats</span>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="carousel">
                        <div class="holder">
                            <img src="{{ asset('img/partners/florixir.jpg') }}" alt="" />
                            <img src="http://fakeimg.pl/300x200" alt="" />
                            <img src="http://fakeimg.pl/400x300" alt="" />
                            <img src="http://fakeimg.pl/200x100" alt="" />
                            <img src="http://fakeimg.pl/500x400" alt="" />
                            <img src="http://fakeimg.pl/210x105" alt="" />
                            <img src="http://fakeimg.pl/200x100" alt="" />
                            <img src="http://fakeimg.pl/250x150" alt="" />
                            <img src="http://fakeimg.pl/200x100" alt="" />
                            <img src="http://fakeimg.pl/200x100" alt="" />
                            <img src="http://fakeimg.pl/200x100" alt="" />
                            <img src="http://fakeimg.pl/200x100" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->
@endsection
