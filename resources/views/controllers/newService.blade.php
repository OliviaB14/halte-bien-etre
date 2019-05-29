@extends('layouts.admin')

@section('body')
    <div class="container mt-5 dashboard-bg">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5">
                <form method="post" action="{{ route('service.post') }}" class="p-5 text-center">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Titre</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="title" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Prix</label>
                        <div class="input-group col-sm-8">
                            <input type="number" class="form-control" step="0.5" required id="price" name="price">
                            <div class="input-group-append">
                                <span class="input-group-text">€</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 font-weight-bold">Durée</label>
                        <div class="input-group col-sm-8">
                            <input type="text" class="form-control" required id="length" name="length">
                            <div class="input-group-append">
                                <span class="input-group-text">minutes</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <label class="col-form-label col-sm-4 font-weight-bold">Description</label>
                        <textarea class="col-sm-8 form-control pageEditor" name="description" required>
                        </textarea>
                    </div>

                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
