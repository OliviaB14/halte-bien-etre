@extends('layouts.admin')

@section('body')
    <div class="container mt-5 dashboard-bg">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5">
                <form method="post" action="{{ route('service.post') }}" class="p-5" enctype="multipart/form-data">
                    @csrf
                    @isset($service)
                        <div class="row justify-content-center">
                            <div class="col-sm-4 text-center py-3">
                                <img src="{{$service->logoPath}}" alt="{{$service->name}}" class="img-fluid text-center mx-auto">
                            </div>
                        </div>
                    @endisset
                    <div class="form-group row text-center">
                        <label class="col-form-label col-sm-4 font-weight-bold">Nom</label>
                        <div class="col-sm-8">
                            @isset($service)
                                <input class="form-control" name="serviceName" required value="{{$service->name}}">
                            @else
                                <input class="form-control" name="serviceName" required>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row text-center">
                        <label class="col-form-label col-sm-4 font-weight-bold">Lien du site</label>
                        <div class="col-sm-8">
                            @isset($service)
                                <input class="form-control" name="serviceLink" value="{{$service->link}}">
                            @else
                                <input class="form-control" name="serviceLink">
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Logo du partenaire</label>
                        <div class="col-sm-8">
                            <input type="file" required class="form-control"
                                   id="logoPath" name="logoPath"
                                   accept="image/png, image/jpeg">
                        </div>
                    </div>
                    @isset($service)
                        <input type="hidden" value="{{$service->id}}" name="serviceId">
                    @endisset
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
