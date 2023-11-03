@extends('layouts.app')

@section('title', "Zoom sur le film")
@section('contenu')

<div id="bg" class="wrapper black">
    <section class="main-container" >
      <div class="location" id="home">
        <br>
        <br>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <img src="{{$film->pochetteURL}}" alt="" width="500px">
            </div>
            <div class="col-xl-4">
                <h1>{{$film->titre}}</h1>
                <p>Année de parition : {{$film->annee}}</p>
                <p>{{$film->resumer}}</p>
                <h5>Durée : {{$film->duree}}</h5>
                <h5>RottenTomato: {{$film->rating}}</h5>
                <br>
                <div>
                    <a href="{{$film->trailer}}">Trailer</a>
                </div>
                <br>
                <div>
                    <a href="{{route('personne.show', [$film->realisateur])}}">
                        <img src="{{$film->realisateur->photo}}" alt="" width="250px">
                    </a>
                    <a href="{{route('personne.show', [$film->producteur])}}">
                        <img src="{{$film->producteur->photo}}" alt="" width="250px">
                    </a>
                    <!--    Acteur
                    <a href="{{route('personne.show', [$film->realisateur])}}">
                        <img src="{{$film->realisateur->photo}}" alt="" width="250px">
                    </a>
                    -->
                </div>
            </div>
            <div class="col-xl-2"></div>
        </div>
      </div>
    </section>
</div>


@endsection