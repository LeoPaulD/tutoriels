@extends('layouts.app')

@section('title')
    <title>Modifer une catégorie</title>
@show

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Modifer une catégorie</div>
                <div class="card-body">
                    <a href="{{ route('tutocategories.index') }}" class="btn btn-secondary">Retour aux catégories</a>
                    <form class="form-horizontal" method="POST" action="{{ route('tutocategories.update', $tutocategorie->id) }}">
                            @method('PATCH')
                            @csrf
                
                        <div class="form-group">
                        <label for="titre" class="col-md-4 control-label" >Titre</label>
                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control" name="titre" value="{{$tutocategorie->titre}}" >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label" >Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{$tutocategorie->description}}">
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
