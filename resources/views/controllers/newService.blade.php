@extends('layouts.admin')

@section('body')
    <div class="container mt-5 dashboard-bg">
        <div class="row justify-content-center">
            <div class="col-md-12 p-5">
                <form method="post" action="{{ route('service.post') }}" class="p-5 text-center">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Titre</label>
                        <div class="col-sm-8">
                            @isset($service)
                            <input class="form-control" name="title" required value="{{$service->title}}">
                            @else
                            <input class="form-control" name="title" required>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Prix</label>
                        <div class="input-group col-sm-8">
                            @isset($service)
                            <input type="number" class="form-control" value="{{$service->price}}" step="0.5" required id="price" name="price">
                            @else
                            <input type="number" class="form-control" step="0.5" required id="price" name="price">
                            @endisset
                            <div class="input-group-append">
                                <span class="input-group-text">€</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Durée</label>
                        <div class="input-group col-sm-8">
                            @isset($service)
                            <input type="text" value="{{$service->length}}" class="form-control" required id="length" name="length">
                            @else
                            <input type="text" class="form-control" required id="length" name="length">
                            @endisset
                            <div class="input-group-append">
                                <span class="input-group-text">minutes</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Icône</label>
                        <div class="col-sm-8">
                            @foreach($icons as $icon)
                                <div class="form-check form-check-inline">
                                    @isset($service)
                                    <input class="form-check-input" {{$service->imagePath == $icon ? 'checked' : ''}}  type="radio" name="imagePath" id="imagePath" value="{{$icon}}">
                                    @else
                                    <input class="form-check-input"  type="radio" name="imagePath" id="imagePath" value="{{$icon}}">
                                    @endisset
                                    <label class="form-check-label" for="imagePath">
                                        <div class="ci-icon bg-white text-black-50 p-3">
                                            <i class="{{$icon}}"></i>
                                        </div>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <label class="col-form-label col-sm-4 font-weight-bold">Description</label>
                        <textarea class="col-sm-8 form-control pageEditor" name="description" required>
                             @isset($service){{$service->description}}@endisset
                        </textarea>
                    </div>
                    @isset($service)
                    <input type="hidden" value="{{$service->id}}" name="serviceId">
                    @endisset
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
                    <button type="submit" class="btn btn-success"> @isset($service)Modifier @else Ajouter @endisset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
