@extends('layouts.app')

@section('title', "Page d'acceuil Personne")

@section('contenu')

<div class="wrapper">
  <section class="main-container" >
    <div class="location" id="tous">
      <h1 id="tous">Tous</h1>
      <div class="box">
      @if(count($personnes))
        @foreach($personnes as $personne)
        <a href="{{route('personne.show', [$personne])}}">
          <img src="{{$personne->photo}}" alt="" width="250px">
        </a>
        @endforeach
      @else
        <p>Il n'y a pas de Personne</p>
      @endif    
    </div>
  </section>

  <section class="main-container" >
    <div class="location" id="realisateur">
      <h1 id="realisateur">Realisateur</h1>
      <div class="box">
      @if(count($films))
        @foreach($films as $film)
        <a href="{{route('personne.show', [$film->realisateur])}}">
          <img src="{{$film->realisateur->photo}}" alt="" width="250px">
        </a>
        @endforeach
      @else
        <p>Il n'y a pas de Personne</p>
      @endif    
    </div>
  </section>

  <section class="main-container" >
    <div class="location" id="producteur">
      <h1 id="producteur">Producteur</h1>
      <div class="box">
        @if(count($films))
        @foreach($films as $film)
        <a href="{{route('personne.show', [$film->producteur])}}">
          <img src="{{$film->producteur->photo}}" alt="" width="250px">
        </a>
        @endforeach
      @else
        <p>Il n'y a pas de Personne</p>
      @endif   
    </div>
  </section>

  <section class="main-container" >
    <div class="location" id="acteur">
      <h1 id="acteur">Acteur</h1>
      <div class="box">
      @if(count($films))
        @foreach($films as $film)
          @foreach($film->personnes as $acteur)
            <a href="{{route('personne.show', [$acteur])}}">
              <img src="{{$acteur->photo}}" alt="" width="250px">
            </a>
          @endforeach
        @endforeach
      @else
        <p>Il n'y a pas de Personne</p>
      @endif   
    </div>
  </section>

</div>
@endsection