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
                        <form id="generalSettings" method="post" action="{{route('settings.post')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="websiteTitle" class="col-sm-3 col-form-label">Titre du site</label>
                                <div class="col-sm-9">
                                    <input value="{{$settings->websiteTitle}}" required type="text" class="form-control" id="websiteTitle" placeholder="La Halte Bien-être" name="websiteTitle">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slogan" class="col-sm-3 col-form-label">Slogan</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" required id="slogan" placeholder="Votre slogan" name="slogan">{{$settings->slogan}}</textarea>
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
                                    <input type="checkbox" class="mx-5" name="{{$day->day}}[open]" {{$day->open ? 'checked' : ''}}>
                                </div>
                                <input class="form-control col-sm-3" name="{{$day->day}}[openTime]" type="text" value="{{$day->openTime}}"/>
                                <input class="form-control col-sm-3" name="{{$day->day}}[closeTime]" type="text" value="{{$day->closeTime}}"/>
                            </div>
                            @endforeach
                            <button class="btn btn-success mt-3" type="submit">Valider les changements</button>
                        </form>
                    </article>
                    <article class="tabs__content js-tabs-content" id="tab-2">
                        <form id="pagesSettings" method="post" action="{{ route('pages.post') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <h3>Qui sommes-nous ?</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                @foreach($quiSommesNous as $section)
                                    <label class="col-sm-3 col-form-label">{{$section->section}}</label>
                                    <div class="col-sm-9">
                                       {{-- <div id="monParcours"></div>--}}
                                        <textarea id="monParcours" class="pageEditor" name="monParcours">
                                            {!! $section->body !!}
                                        </textarea>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <h3>Mes prestations</h3>
                                </div>
                            </div>
                            <div class="form-group row text-center">
                                @foreach($mesPrestations as $section)
                                    <label class="col-sm-3 col-form-label text-capitalize">{{$section->section}}</label>
                                    <div class="col-sm-9">
                                        <textarea id="mesPrestationsDescription" class="pageEditor" name="mesPrestationsDescription">
                                            {!! $section->body !!}
                                        </textarea>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <h3>Partenariats</h3>
                                </div>
                            </div>
                            @foreach($partenariats as $info)
                                <div class="form-group row justify-content-around my-1 text-center">
                                    <label class="col-sm-3 col-form-label text-capitalize">{{$info->section}}</label>
                                    <textarea class="form-control col-sm-9 pageEditor" name="{{$info->section}}" type="text">{{$info->body}}</textarea>
                                </div>
                            @endforeach
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
                        <form id="servicesSettings" method="post" action="{{ route('services.post') }}">
                            @csrf
                            @foreach($services as $service)
                            <div class="form-group row">
                                <div class="col-sm-1 font-weight-bold text-center py-4">{{ $loop->index }}.</div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input class="form-control" name="serviceTitle{{$service->id}}" value="{{$service->title}}"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group col-sm-6">
                                            <input type="number" class="form-control" name="servicePrice{{$service->id}}" value="{{$service->price}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">€</span>
                                            </div>
                                        </div>
                                        <div class="input-group col-sm-6">
                                            <input type="number" step="1" min="5" class="form-control" value="{{$service->length}}" name="serviceLength{{$service->id}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="serviceDescription{{$service->id}}">{{$service->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <button class="btn btn-success mt-3" type="submit">Valider les changements</button>
                        </form>
                    </article>
                    <article class="tabs__content js-tabs-content" id="tab-4">
                        <form id="partnersSettings" method="post">
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <h3>Partenaires</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-6 my-4">
                                    <a href="{{ route('newPartner') }}" class="btn btn-block btn-outline-secondary">
                                        Ajouter un partenaire
                                    </a>
                                </div>
                            </div>
                            @foreach($partners as $partner)
                                <div class="row">
                                    <div class="col-sm-4">
                                        @isset($partner->logoPath)
                                            <img src="{{$partner->logoPath}}" alt="{{$partner->name}}" class="img-fluid">
                                        @endisset
                                    </div>
                                    <div class="col-sm-8">
                                        <p>{{$partner->name}}</p>
                                        @isset($partner->link) <p>{{$partner->link}}</p>@endisset
                                        <a href="{{ route('newPartner', ['id' => $partner->id]) }}" class="btn btn-primary"><i class="fa fa-edit mr-4"></i>Modifier le partenaire</a>
                                    </div>
                                </div>
                            @endforeach
                            <button class="btn btn-success mt-3" type="submit">Valider les changements</button>
                        </form>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection
