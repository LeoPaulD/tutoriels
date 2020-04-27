@extends('layouts.app')

@section('title')
    <title>Liste des Tutoriels</title>
@show

@section('content')
<div>
<div class="d-flex justify-content-center flex-wrap" >
    <div class="row col-md-4 col-sm-10 mb-3 col-lg-3 col-xl-3">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Filtres</div>
                        <div class="card-body">                              
                                <form name="search_something" action="/tutoriels" method="GET">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" onclick="toggle(this);">
                                        <label class="custom-control-label" for="customCheck">Toutes les catégories</label>
                                </div>
                                @foreach ($categories as $item)
                                   
                                   <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="{{$item->id}}" name="filtre[]" value="{{$item->titre}}" >
                                    <label class="custom-control-label" for="{{$item->id}}">{{$item->titre}}</label>
                                </div>
                               @endforeach
                            
                            <button type="submit" class="btn btn-primary mt-2" >Filtrer</button>
                            </form>
                            {{-- <br>
                            <ul>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck11" >
                                    <label class="custom-control-label" for="customCheck11">Culture</label>
                                </div> 
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck12" >
                                    <label class="custom-control-label" for="customCheck12">Tutoriels</label>
                                </div> 
                            </ul> --}}
                        </div>
                    </div>
            </div>

    </div>
    
    {{-- @if (isset($_GET['filtre']))
        @foreach ($_GET['filtre'] as filtre $)
            
        @endforeach
    @endif --}}
 
    <div class="row  col-md-8 col-sm-10 col-lg-9 col-xl-7" >
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Les Tutoriels</div>
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-around">
                        @foreach ($tutoriels as $tuto)
                        <div class="card mb-4" style="width: 22rem;">
                                <div class="card-header">
                                <p class="" ><b>{{$tuto->titre}}</b></p>
                                   
                                </div>
                                <div class="embed-responsive embed-responsive-16by9">
                                <iframe  src="https://www.youtube.com/embed/{{$tuto->lien}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                <div class="card-text">
                                    <p>Outils nécessaires pour ce tutoriel :</p>
                                    <p class="badge badge-secondary">Premiere pro</p>
                                    <p class="badge badge-secondary">Ordinateur</p>
                                </div>
    
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                    

                    ￼
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>
</div>
@endsection
