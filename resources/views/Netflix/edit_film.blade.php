@extends('layouts.app')

@section('title', "Page de modification d'un film Netflix")

@section('contenu')

<br><br>
<div class="row">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
        <h1>Formulaire pour modifier un film {{$film->nom}}</h1>
    </div>
    <div class="col-xl-2"></div>
</div>
@if (isset($film))
<form method="post" action="{{route('films.update', [$film])}}">
    @csrf 
    @method('PATCH')
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="titreFilm">Titre du film</label>
                <input type="text" class="form-control" id="titreFilm" placeholder="Titre du film" name="titre" value="{{old('titre', $film->titre)}}">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="duree">Durée du film en minute</label>
                <input type="number" class="form-control" id="duree" name="duree" value="{{old('duree', $film->duree)}}">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="annee">Annee de présentation du film</label>
                <input type="year" class="form-control" id="annee" name="annee" value="{{old('annee', $film->annee)}}">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="rating">Rating du film</label>
                <input type="text" class="form-control" id="rating" placeholder="Résumer du film" name="rating" value="{{old('rating', $film->rating)}}">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="genre">Catégories du film</label>
                <input type="text" class="form-control" id="genre" placeholder="Comedie, Horreur, etc" name="genre" value="{{old('genre', $film->genre)}}">
            </div>

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="resumer">Résumer du film</label>
                <input type="text" class="form-control" id="resumer" placeholder="Résumer du film" name="resumer" value="{{old('resumer', $film->resumer)}}">
                <br>
                <label class="form-label" for="trailer">Trailer du film</label>
                <input type="text" class="form-control" id="trailer" placeholder="Trailer du film" name="trailer" value="{{old('trailer', $film->trailer)}}">
                <br>
                <label class="form-label" for="pochetteURL">Pochette URL du film</label>
                <input type="text" class="form-control" id="pochetteURL" placeholder="lien de l'image" name="pochetteURL" value="{{old('pochetteURL', $film->pochetteURL)}}">
                <br>
                <button  type="submit" class="btn btn-success">Modifier</button>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>
</form>

@endif
@endsection