@extends('layouts.app')

@section('title', "Zoom sur le film")
@section('contenu')

@role('admin','normal','enfant')
<div id="bg" class="wrapper black">
    <section class="main-container" >
      <div class="location" id="home">
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-5">
                <br>
                <br>
                <img src="{{$film->pochetteURL}}" alt="" width="500px">
            </div>
            <div class="col-xl-5">
                    <h1>{{$film->titre}}</h1>
                    <p>Année de parition : {{$film->annee}}</p>
                    <p>{{$film->resumer}}</p>
                    <h5>Durée : {{$film->duree}}</h5>
                    <h5>RottenTomato: {{$film->rating}}</h5>
                    @role('admin')
                    <div>
                        <a href="{{route('films.edit', [$film])}}" class="btn btn-danger">
                            Editer le film
                        </a>
                    </div>
                    @endrole
            </div>
            <div class="col-xl-1"></div>
        </div>
        <div class="row">
            <div class="col-xl-6 text-center">
                <br>
                <iframe width="450" height="250" src="{{$film->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-xl-6 text-center">
            <h1>Personnes</h1>
                <a href="{{route('personne.show', [$film->realisateur])}}">
                    <img src="{{$film->realisateur->photo}}" alt="" width="150px" height="150px">
                </a>
                <a href="{{route('personne.show', [$film->producteur])}}">
                    <img src="{{$film->producteur->photo}}" alt="" width="150px" height="150px">
                </a>
                @foreach($film->personnes as $acteur)
                <a href="{{route('personne.show', [$acteur])}}">
                    <img src="{{$acteur->photo}}" alt="" width="150px" height="150px">
                </a>
                @endforeach
            </div>
        </div>
      </div>
    </section>
</div>

@endrole
@endsection