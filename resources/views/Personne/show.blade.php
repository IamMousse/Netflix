@extends('layouts.app')

@section('title', "Zoom sur la personne")

@section('contenu')

<br><br>
@role('admin','normal','enfant')
<div id="bg" class="wrapper black">
  <section class="main-container" >
    <div class="location" id="home">
    <br>
    <br>
      <div class="row">
        <div class="col-xl-2"></div>
          <div class="col-xl-4">
            <img src="{{ asset('img/personnes/' . $personne->photo) }}" alt="" height="500px">
            <img src="{{$personne->photo}}" alt="" width="500px">
          </div>
          <div class="col-xl-4">
            <div class="row">
              <h1 class="text-center">{{$personne->nom}}</h1>
              
              <div class="col-xl-7 text-left">
              <br>
                <h4>Date naissance: {{$personne->dateN}}</h4>
                <h4>Date de décès: {{$personne->dateDece}}</h4>
                <br><br>
              </div>
              <div class="col-xl-5 text-left">
              <br>
                <h4>Sexe: {{$personne->sexe}}</h4>
                <h4>Métier: {{$personne->metier}}</h4>
                <br><br>
              </div>
              
            </div>
            @role('admin')
            <div class="row">
              <a href="{{route('personnes.edit', [$personne])}}" class="btn btn-danger">
                Editer le film
              </a>
            </div>
            @endrole
            <div class="row">
              @foreach ($personne->filmsRealises as $film)
                <h1>Films réalisés</h1>
                <a href="{{route('film.show', [$film])}}">
                  <img src="{{ asset('img/films/' . $film->pochetteURL) }}" alt="" width="300px" height="300px">
                </a>
                @endforeach

                @foreach($personne->filmsProduits as $film)
                <h1>Films produits</h1>
                <a href="{{route('film.show', [$film])}}">
                  <img src="{{ asset('img/films/' . $film->pochetteURL) }}" alt="" width="300px" height="300px">
                </a>
                @endforeach

                @foreach($personne->filmsActeurs as $film)
                <h1>Films jouer</h1>
                <a href="{{route('film.show', [$film])}}">
                  <img src="{{ asset('img/films/' . $film->pochetteURL) }}" alt="" width="300px" height="300px">
                </a>
                @endforeach
            </div>
            <div class="col-xl-2"></div>
        </div>

      </div>
      
    </section>
</div>

@endrole
@endsection