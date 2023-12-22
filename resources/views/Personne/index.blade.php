@extends('layouts.app')

@section('title', "Page d'acceuil Personne")

@section('contenu')

@role('enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole

<br><br>
@role('admin','normal')
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
        @if($film->realisateur != null)
        <a href="{{route('personne.show', [$film->realisateur])}}">
          <img src="{{$film->realisateur->photo}}" alt="" width="250px">
        </a>
        @endif
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
        @if($film->producteur != null)
        <a href="{{route('personne.show', [$film->producteur])}}">
          <img src="{{$film->producteur->photo}}" alt="" width="250px">
        </a> 
        @endif
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
          @if($acteur != null)
            <a href="{{route('personne.show', [$acteur])}}">
              <img src="{{$acteur->photo}}" alt="" width="250px">
            </a>
          @endif
          @endforeach
        @endforeach
      @else
        <p>Il n'y a pas de Personne</p>
      @endif   
    </div>
  </section>


  <section class="main-container" >
    <div class="location" id="acteur">
      <h1 id="acteur">Image</h1>
      <div class="box">
      @if(count($personnes))
        @foreach($personnes as $personne)
        <a href="{{route('personne.show', [$personne])}}">
          <img src="{{ asset('img/personnes/' . $personne->photo) }}" alt="" width="300px" height="300px">
        </a>
        @endforeach
      @else
        <p>Il n'y a pas de Personne</p>
      @endif   
    </div>
  </section>
</div>

@endrole
@endsection