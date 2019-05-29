@extends('layouts.app')

@section('body')
    <section class="page-info-section set-bg" data-setbg="{{ asset('img/prestations.jpg') }}">
        <div class="container">
            <h2>Prestations</h2>
            <div class="site-breadcrumb">
                <a href="/">Accueil</a> /
                <span>Prestations</span>
            </div>
        </div>
    </section>
    <section class="cl-courses-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <p>Vous trouverez ici mes prestations.</p>
                </div>
                @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="course-item">
                            <div class="ci-icon">
                                <i class="{{$service->imagePath}}"></i>
                            </div>
                            <span class="serviceLength">{{$service->length}} minutes - {{$service->price}} €</span>
                            <h4>{{$service->title}}</h4>
                            <div>
                                <p>{!! $service->description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
