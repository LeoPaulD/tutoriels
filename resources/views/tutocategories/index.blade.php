@extends('layouts.app')

@section('title')
    <title>Liste des catégorie</title>
@show

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Les catégories</div>
                <div class="card-body">
                    @foreach ($tutocats as $cat)
                        <ul>
                        <li><a href="{{route('tutocategories.edit', $cat->id)}}">{{ $cat->titre}}</a> </li>
                        </ul>
                        
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
