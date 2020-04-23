@extends('layouts.app')

@section('title')
    <title>Ajouter un tutoriel</title>
@show

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Créer un tutoriel</div>
                <div class="card-body">
                    <a href="/tutoriels" class="btn btn-secondary">Retour aux tutoriels</a>
                    <form class="form-horizontal" method="POST" action="{{ route('tutoriels.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titre" class="col-md-4 control-label">Titre</label>
                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control" name="titre"  required autofocus>
                            </div>
                        </div>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="categorie_id">Catégories</label>
                            </div>
                            <select class="custom-select" id="categorie_id">
                                <option selected>Choix de la catégorie...</option>
                                @foreach ( $tutocats as $cat)
                                    <option value="{{ $cat -> id }}">{{ $cat -> titre }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lien" class="col-md-4 control-label">Lien Youtube</label>
                            <div class="col-md-6">
                                <input id="lien" type="text" class="form-control" name="lien">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
