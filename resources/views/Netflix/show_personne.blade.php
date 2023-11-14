@extends('layouts.app')

@section('title', "Zoom sur la personne")

@section('contenu')

<div id="bg" class="wrapper black">
  <section class="main-container" >
    <div class="location" id="home">
    <br>
    <br>
      <div class="row">
        <div class="col-xl-2"></div>
          <div class="col-xl-4">
            <img src="{{$personne->photo}}" alt="" width="500px">
          </div>
          <div class="col-xl-4">
            <h1>{{$personne->nom}}</h1>
            <h3>{{$personne->dateN}}</h3>
          <div>
          
            <a href="{{route('personnes.edit', [$personne])}}" class="btn btn-danger">
                            Editer le film
                  </a>
          </div>
            </div>
            <div class="col-xl-2"></div>
        </div>

      </div>
      <div class="row">
        <div class="col-xl-6 text-center">
          
          @foreach ($personne->filmsRealises as $film)
          <h1>Films réalisés</h1>
          <a href="{{route('film.show', [$film])}}">
            <img src="{{$film->pochetteURL}}" alt="" width="300px" height="300px">
          </a>
          @endforeach

          
          @foreach($personne->filmsProduits as $film)
          <h1>Films produits</h1>
          <a href="{{route('film.show', [$film])}}">
            <img src="{{$film->pochetteURL}}" alt="" width="300px" height="300px">
          </a>
          @endforeach

          
          @foreach($personne->filmsActeurs as $film)
          <h1>Films jouer</h1>
          <a href="{{route('film.show', [$film])}}">
            <img src="{{$film->pochetteURL}}" alt="" width="300px" height="300px">
          </a>
          @endforeach
        </div>
      </div>
    </section>
</div>

@endsection