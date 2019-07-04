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
                    <p>{!! $presentation->body !!}</p>
                </div>
            </div>
            @foreach($services as $service)
            <div class="row">
                <div class="col-md-4">
                    <div class="course-item">
                        <div class="ci-icon">
                            <i class="{{$service->imagePath}}"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="serviceLength">
                        <h4><span class="text-white">{{$service->title}}</span>  <p class="float-right">{{$service->length}} minutes - {{$service->price}} €</p></h4>
                    </div>
                    <div>
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
