@extends('layouts.admin')

@section('body')
    <div class="container mt-5 dashboard-bg">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5">
                <form method="post" action="{{ route('partner.post') }}" class="p-5" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row text-center">
                        <label class="col-form-label col-sm-4 font-weight-bold">Nom</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="partnerName">
                        </div>
                    </div>
                    <div class="form-group row text-center">
                        <label class="col-form-label col-sm-4 font-weight-bold">Lien</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="partnerLink">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Logo du partenaire</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control"
                                id="logoPath" name="logoPath"
                                accept="image/png, image/jpeg">
                        </div>
                    </div>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
