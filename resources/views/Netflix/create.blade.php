@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

@role('normal', 'enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole

@role('admin')
<form method="post" action="{{route('films.store')}}">
    @csrf 
    <div class="container-fluid text-center">
    <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <h1>Formulaire pour ajouter un film</h1>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="titreFilm">Titre du film</label>
                <input type="text" class="form-control" id="titreFilm" placeholder="Titre du film" name="titre">
            </div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="trailer">Trailer du film</label>
                <input type="text" class="form-control" id="trailer" placeholder="Trailer du film" name="trailer">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="rating">Rating du film</label>
                <input type="text" class="form-control" id="rating" placeholder="Résumer du film" name="rating">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="genre">Catégories du film</label>
                <input type="text" class="form-control" id="genre" placeholder="Comedie, Horreur, etc" name="genre">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="duree">Durée du film en minute</label>
                <input type="number" class="form-control" id="duree" name="duree">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="annee">Annee de présentation du film</label>
                <input type="year" class="form-control" id="annee" name="annee">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="realisateur_id">Réalisateur ID</label>
                <select class="form-control" name="realisateur_id" id="realisateur_id">
                    <option value="">Veuillez choisir...</option>
                    @foreach ($personnes_nom as $personne_nom)
                        <option value="{{$personne_nom->id}}">{{$personne_nom->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="producteur_id">Producteur ID</label>
                <select class="form-control" name="producteur_id" id="producteur_id">
                    <option value="">Veuillez choisir...</option>
                    @foreach ($personnes_nom as $personne_nom)
                        <option value="{{$personne_nom->id}}">{{$personne_nom->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="acteur">Acteur ID</label>
                <select class="form-control" name="acteur_id" id="acteur_id">
                    <option value="">Veuillez choisir...</option>
                    @foreach ($personnes_nom as $personne_nom)
                        <option value="{{$personne_nom->id}}">{{$personne_nom->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xl-3"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="resumer">Résumer du film</label>
                <input type="text" class="form-control" id="resumer" placeholder="Résumer du film" name="resumer">
                <br>
                <label class="form-label" for="pochetteURL">Pochette URL du film</label>
                <input type="text" class="form-control" id="pochetteURL" placeholder="lien de l'image" name="pochetteURL">
                <br>
                <button  type="submit" class="btn btn-success">Enregistrer</button>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>
</form>
@endrole
@endsection