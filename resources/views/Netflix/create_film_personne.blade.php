@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

<br><br><br><br>
<form method="post" action="{{route('personnes.store_film_personne')}}">
    @csrf 
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <h1>Formulaire pour lier les acteurs aux films</h1>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="film_id">Film ID</label>
                <select class="form-control" name="film_id" id="film_id">
                    @foreach ($titre_film as $film)
                        <option value="{{$film->id}}">{{$film->titre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="personne_id">Acteur ID</label>
                <select class="form-control" name="personne_id" id="personne_id">
                    @foreach ($nom_personne as $personne)
                        <option value="{{$personne->id}}">{{$personne->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <button  type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
            <div class="col-xl-2"></div>
        </div>
        
</from>

@endsection