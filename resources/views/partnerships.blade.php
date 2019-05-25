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
                    <h3>{{$infos->body}}</h3>
                    <div class="row">
                        @foreach($partners as $partner)
                        <div class="col">
                            <img src="{{ $partner->logoPath }}" alt="" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
