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
    </section>
</div>

@endsection