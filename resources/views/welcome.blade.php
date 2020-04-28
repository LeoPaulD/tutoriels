<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cartable : Le catalogue libre d'accès de formations</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                
                margin: 0;
            }

           

           

            .position-ref {
                position: relative;
            }

            

            .content {
                text-align: center;
            }

            .title h1 {
                font-size: 84px;
                font-family: 'Bebas Neue', cursive;
            }

            h2 {
                font-size: 24px;
                font-family: 'Bebas Neue', cursive;
            }
            p {
                font-family: 'Roboto', sans-serif;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
            a {
                text-decoration: none;
            }
            .entrer {
                display: flex;
                flex-direction: column;
                
                
                
                

            }
            
            
            .entrer > p {
                
                
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                
            }
        </style>
    </head>
    <body> 
            <div class="content">
                <div style="height: 50vh;" class="d-flex  justify-content-center align-items-center" >
                    
                    <div class="">
                    <div class="title m-b-md">
                       <h1> Cartable </h1>
                    </div>
                    <div class="links">
                        
                        <a href="https://github.com/LeoPaulD/tutoriels" style="white-space: nowrap" >Github du projet</a>
                        <a href="http://leo-paul.fr" style="white-space: nowrap">Portfolio de Léo-Paul</a>
                        
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('tutoriels.index') }}">
                        <div class="entrer btn btn-light border-dark m-3 pt-3">
                            <p><i class="fas fa-lock-open"></i>
                                Accéder au contenu
                            </p>
                        </div>
                        </a>
                    </div>
                    </div>  
                </div>
            <div class="row bg-light" >
                          
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="col-10 col-lg-8 m-3">
                            <h2 class="text-left">Cartable, le catologue libre d'accès de formations en ligne</h2>
                            <p class="text-justify">Cette application web Cartable, dans sa première version permet à Léo-Paul, son créateur, de référencer des vidéos qui lui ont permis d'acquérir de nouvelles compétences téchniques dans différents dommaines (vidéo, photo, communication, développement web) ainsi qu'à enrichir sa culture sur ces sujets.
                                <br>
                                <br>
                                Le projet étant open source, vous pouvez le retrouver sur Github pour vous en servir et créer une application personnalisé qui correspond à vos centres d'intérêt ou pour l'enrichir et faire évoluer cette plateforme.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                
                      <img src="{{URL::asset('/images/multimedia.jpg')}}" alt="" class="img-fluid" />
                    </div>
                    
                  </div>
            
            </div>
    </body>
</html>
