@extends('layouts.app')

@section('body')
    <section class="hero-section set-bg" data-setbg="img/hero-bg.png">
        <div class="hero-content-warp">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-8">
                        <section class="tabs">
                            <form method="post">
                                <ul class="tabs__header">
                                    <li class="tabs__header--title js-tabs-title active" data-tab="#tab-1">Général</li>
                                    <li class="tabs__header--title js-tabs-title" data-tab="#tab-2">Services</li>
                                    <li class="tabs__header--title js-tabs-title" data-tab="#tab-3">Contact</li>
                                </ul>
                                <div class="tabs__underline js-tabs-underline"></div>
                                <article class="tabs__content js-tabs-content active" id="tab-1">
                                    <div class="form-group row">
                                        <label for="websiteTitle" class="col-sm-3 col-form-label">Titre du site</label>
                                        <div class="col-sm-9">
                                            <input value="{{$settings->websiteTitle}}" type="email" class="form-control" id="websiteTitle" placeholder="La Halte Bien-être" name="websiteTitle">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slogan" class="col-sm-3 col-form-label">Slogan</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="slogan" placeholder="Votre slogan" name="slogan">{{$settings->slogan}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="logoPath" class="col-sm-3 col-form-label">Logo</label>
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-6">
                                            <input type="file" class="form-control-file" id="logoPath" name="logoPath">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 my-3">
                                            <h3>Horaires d'ouverture</h3>
                                        </div>
                                    </div>

                                    <div class="form-group row justify-content-around my-1 text-center font-weight-bold text-uppercase bg-dark text-white p-2">
                                        <div class="col-sm-2">Jour</div>
                                        <div class="col-sm-4">Disponible ?</div>
                                        <div class="col-sm-4">Horaires</div>
                                    </div>
                                    @foreach($openHours as $day)
                                    <div class="form-group row justify-content-around my-1 text-center">
                                        <label class="col-sm-3 font-weight-bold">{{$day->day}}</label>
                                        <div class="col-sm-3">
                                            <input type="checkbox" class="mx-5" name="{{$day->day}}[]" {{$day->open ? 'checked' : ''}}>
                                        </div>
                                        <input class="form-control col-sm-3" name="{{$day->day}}[]" type="text" value="{{$day->openTime}}"/>
                                        <input class="form-control col-sm-3" name="{{$day->day}}[]" type="text" value="{{$day->closeTime}}"/>
                                    </div>
                                    @endforeach
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button class="btn btn-success" type="submit">Valider les changements</button>
                                </article>
                                <article class="tabs__content js-tabs-content" id="tab-2">
                                    <h2 class="tabs__content--title">Title for tab 2</h2>
                                    <p class="tabs__content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis vel justo condimentum finibus. Praesent vitae nisl sed sem euismod rhoncus nec eu augue. Maecenas et diam quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis vel justo condimentum finibus. Praesent vitae nisl sed sem euismod rhoncus nec eu augue. Maecenas et diam quam</p>
                                </article>
                                <article class="tabs__content js-tabs-content" id="tab-3">
                                    <h2 class="tabs__content--title">Title for tab 3</h2>
                                    <p class="tabs__content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis vel justo condimentum finibus. Praesent vitae nisl sed sem euismod rhoncus nec eu augue. Maecenas et diam quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis vel justo condimentum finibus. Praesent vitae nisl sed sem euismod rhoncus nec eu augue. Maecenas et diam quam</p>
                                </article>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
