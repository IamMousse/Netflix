@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

@role('normal', 'enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole


<br><br><br><br>
@role('admin')
<form method="post" action="{{route('films.store_film_personne')}}">
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
                    <option value="">Veuillez choisir...</option>
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
                    <option value="">Veuillez choisir...</option>
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
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </div>
            <div class="col-xl-2"></div>
        </div>
        
</form>
@endrole
@endsection