@extends('layouts.app')

@section('title')
<title>Cartable - Le catalogue</title>
@show

@section('content')
<div>
    <div class="d-flex justify-content-center flex-wrap">
        <div class="row col-md-4 col-sm-10 mb-3 col-lg-3 col-xl-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Filtres</div>
                    <div class="card-body">
                        <ul>
                            @foreach ($categories as $item)
                            <a href="{{route('tutocategories.tutoriels.index', $item->id)}}">
                                <li>{{$item->titre}}</li>
                            </a>
                            @endforeach
                            @guest
                                    @else
                                        <a href="{{route('tutocategories.tutoriels.create', 1)}}"> <button class="btn btn-primary m-2">Ajouter une formation</button></a>
                                        
                                        <a href="{{route('tutocategories.create')}}"> <button class="btn btn-secondary m-2">Ajouter une catégorie</button></a>
                                       
                                    @endguest 
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        {{-- @if (isset($_GET['filtre']))
        @foreach ($_GET['filtre'] as filtre $)
            
        @endforeach
    @endif --}}

        <div class="row  col-md-8 col-sm-10 col-lg-9 col-xl-7">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Les Tutoriels</div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-around">
                            @foreach ($tutoriels as $tuto)
                            <div class="card mb-4" style="width: 22rem;">
                                <div class="card-header">
                                    <p class=""><b>{{$tuto->titre}}</b></p>

                                </div>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/{{$tuto->lien}}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>{{$tuto->description}}</p>
                                    <p class="badge badge-secondary">{{$tuto->souscat}}</p> 
                                    @guest
                                    @else
                                        <a href="{{route('tutocategories.tutoriels.edit', [$tuto->categorie_id, $tuto->id])}}"> <button class="btn btn-danger">Modifier</button></a>
                                       
                                    @endguest  
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