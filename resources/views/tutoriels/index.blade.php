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
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                <label class="custom-control-label" for="customCheck1">Audiovisuel</label>
                            </div>
                            
                            
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3" >
                                <label class="custom-control-label" for="customCheck3">Web</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4" >
                                <label class="custom-control-label" for="customCheck4">Photo</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5" >
                                <label class="custom-control-label" for="customCheck5">Illustration</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6" >
                                <label class="custom-control-label" for="customCheck6">Communication</label>
                            </div>
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
    <div class="row  col-md-8 col-sm-10 col-lg-9 col-xl-7" >
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Les Tutoriels</div>
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-around">
                        <div class="card mb-4" style="width: 22rem;">
                            <div class="card-header">
                                <p class="" ><b>Fanzine #7 : Hatik reprend Maes, Diam’s, Soprano... avec Waxx et C.Cole #LeLive</b></p>
                               
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                    <iframe  src="https://www.youtube.com/embed/aNklaOLQOK4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                            <div class="card-text">
                                <p>Outils nécessaires pour ce tutoriel :</p>
                                <p class="badge badge-secondary">Premiere pro</p>
                                <p class="badge badge-secondary">Ordinateur</p>
                            </div>

                            </div>
                        </div>
                        <div class="card mb-4" style="width: 22rem;">
                                <div class="card-header">
                                    <p class="" ><b>Fanzine #7 : Hatik reprend Maes, Diam’s, Soprano... avec Waxx et C.Cole #LeLive</b></p>
                                    
                                </div>
                                <div class="embed-responsive embed-responsive-16by9">
                                        <iframe  src="https://www.youtube.com/embed/aNklaOLQOK4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                <div class="card-text">
                                    <p>Outils nécessaires pour ce tutoriel :</p>
                                    <p class="badge badge-secondary">Premiere pro</p>
                                    <p class="badge badge-secondary">Ordinateur</p>
                                </div>
    
                                </div>
                            </div>

                        <div class="card mb-4" style="width: 22rem;">
                                <div class="card-header">
                                    <p>Fanzine #7 : Hatik reprend Maes, Diam’s, Soprano... avec Waxx et C.Cole #LeLive</p>
                                </div>
                                <div class="embed-responsive embed-responsive-16by9">
                                        <iframe  src="https://www.youtube.com/embed/aNklaOLQOK4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card mb-4" style="width: 22rem;">
                                    <div class="card-header">
                                        <p>Fanzine #7 : Hatik reprend Maes, Diam’s, Soprano... avec Waxx et C.Cole #LeLive</p>
                                    </div>
                                    <div class="embed-responsive embed-responsive-16by9">
                                            <iframe  src="https://www.youtube.com/embed/aNklaOLQOK4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                    </div>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
