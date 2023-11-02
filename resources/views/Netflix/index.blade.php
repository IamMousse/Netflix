@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

<div class="wrapper">
  <section class="main-container" >
    <div class="location" id="home">
      <h1 id="home">Popular on Netflix</h1>
      <div class="box">
        @if(count($films))
          @foreach($films as $film)
          <a href="{{route('film.show', [$film])}}">
            <img src="{{$film->pochetteURL}}" alt="" width="250px">
          </a>
          @endforeach
        @else
          <h3>Il n'y a pas de films</h3>
        @endif  
      </div>
    </div>
  </section>

  <section class="main-container" >
    <div class="location" id="movies">
      <h1 id="movies">Action</h1>
      <div class="box">
        @if(count($actions))
          @foreach($actions as $action)
          <a href="{{route('film.show', [$action])}}">
            <img src="{{$action->pochetteURL}}" alt="" width="250px">
          </a>
          @endforeach
        @else
          <h3>Il n'y a pas de films</h3>
        @endif 
      </div>  
    </div>
  </section>

  <section class="main-container" >
    <div class="location" id="TvShows">
      <h1 id="TvShows">Horreur</h1>
      <div class="box">
        @if(count($horreurs))
          @foreach($horreurs as $horreur)
          <a href="{{route('film.show', [$horreur])}}">
            <img src="{{$horreur->pochetteURL}}" alt="" width="250px">
          </a>
          @endforeach
        @else
          <h3>Il n'y a pas de films</h3>
        @endif
      </div>  
    </div>
  </section>

  <section class="main-container" >
    <div class="location" id="myList">
      <h1 id="myList">Autres</h1>
      <div class="box">
        @if(count($documentaires))
          @foreach($documentaires as $documentaire)
          <a href="{{route('film.show', [$documentaire])}}">
            <img src="{{$documentaire->pochetteURL}}" alt="" width="250px">
          </a>
          @endforeach
        @else
          <h3>Il n'y a pas de films</h3>
        @endif  
        @if(count($animes))
          @foreach($animes as $anime)
          <a href="{{route('film.show', [$anime])}}">
            <img src="{{$anime->pochetteURL}}" alt="" width="250px">
          </a>
          @endforeach
        @else
          <h3>Il n'y a pas de films</h3>
        @endif
        @if(count($comedies))
          @foreach($comedies as $comedie)
          <a href="{{route('film.show', [$comedie])}}">
            <img src="{{$comedie->pochetteURL}}" alt="" width="250px">
          </a>
          @endforeach
        @else
          <h3>Il n'y a pas de films</h3>
        @endif
      </div>   
    </div>
  </section>
</div>

@endsection