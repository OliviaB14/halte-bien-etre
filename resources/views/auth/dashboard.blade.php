@extends('layouts.admin')

@section('body')
    <div class="container mt-5 dashboard-bg">
        <div class="row">
            <div class="col-md-12">
                <section class="tabs mt-5">
                    <ul class="tabs__header">
                        <li class="tabs__header--title js-tabs-title active" data-tab="#tab-1">Général</li>
                        <li class="tabs__header--title js-tabs-title" data-tab="#tab-2">Pages</li>
                        <li class="tabs__header--title js-tabs-title" data-tab="#tab-3">Services</li>
                        <li class="tabs__header--title js-tabs-title" data-tab="#tab-4">Partenaires</li>
                    </ul>
                    <div class="tabs__underline js-tabs-underline"></div>
                    <article class="tabs__content js-tabs-content active" id="tab-1">
                        <form id="generalSettings" method="post">
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
                            <button class="btn btn-success mt-3" type="submit">Valider les changements</button>
                        </form>
                    </article>
                    <article class="tabs__content js-tabs-content" id="tab-2">
                        <form id="pagesSettings" method="post">
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <h3>Qui sommes-nous ?</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                @foreach($quiSommesNous as $section)
                                    <label class="col-sm-3 col-form-label">{{$section->section}}</label>
                                    <div class="col-sm-9">
                                        <div id="monParcours">{!! $section->body !!}</div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <h3>Mes prestations</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                @foreach($mesPrestations as $section)
                                    <label class="col-sm-3 col-form-label">{{$section->section}}</label>
                                    <div class="col-sm-9">
                                        <div id="mesPrestationsDescription">{!! $section->body !!}</div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <h3>Contact</h3>
                                </div>
                            </div>
                            @foreach($contactSettings as $info)
                                <div class="form-group row justify-content-around my-1 text-center">
                                    <label class="col-sm-3 col-form-label text-capitalize">{{$info->label}}</label>
                                    <input class="form-control col-sm-9" name="{{$info->label}}" type="text" value="{{$info->value}}"/>
                                </div>
                            @endforeach
                            <button class="btn btn-success mt-3" type="submit">Valider les changements</button>
                        </form>
                    </article>
                    <article class="tabs__content js-tabs-content" id="tab-3">
                        <div class="row justify-content-center">
                            <div class="col-sm-6 my-4">
                                <a href="{{ route('newService') }}" class="btn btn-block btn-outline-secondary">
                                    Ajouter un service
                                </a>
                            </div>
                        </div>
                        <form id="servicesSettings" method="post">
                            @foreach($services as $service)
                            <div class="form-group row">
                                <div class="col-sm-1 font-weight-bold text-center py-4">{{ $loop->index }}.</div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input class="form-control" value="{{$service->title}}"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group col-sm-6">
                                            <input type="number" class="form-control" value="{{$service->price}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">€</span>
                                            </div>
                                        </div>
                                        <div class="input-group col-sm-6">
                                            <input type="number" step="1" min="5" class="form-control" value="{{$service->length}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="serviceEditor[]">{{$service->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </article>
                    <article class="tabs__content js-tabs-content" id="tab-4">
                        <h2 class="tabs__content--title">Title for tab 3</h2>
                        <p class="tabs__content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis vel justo condimentum finibus. Praesent vitae nisl sed sem euismod rhoncus nec eu augue. Maecenas et diam quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis vel justo condimentum finibus. Praesent vitae nisl sed sem euismod rhoncus nec eu augue. Maecenas et diam quam</p>
                    </article>
                </section>
            </div>
        </div><!-- Initialize Quill editor -->
    </div>
@endsection
