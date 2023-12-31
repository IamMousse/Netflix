@extends('layouts.app')

@section('title', "Page de modification d'un film Netflix")

@section('contenu')

@role('normal', 'enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole

<br><br>
@role('admin')
<div class="row">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
        <h1>Formulaire pour modifier un film {{$film->titre}}</h1>
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
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="trailer">Trailer du film</label>
                <input type="text" class="form-control" id="trailer" placeholder="Trailer du film" name="trailer" value="{{old('trailer', $film->trailer)}}">
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
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
            @if($film->realisateur != null)
                <br>
                <label class="form-label" for="realisateur_id">Réalisateur ID</label>
                <select class="form-control" name="realisateur_id" id="realisateur_id">
                    <option value="{{$realisateur->id}}"> {{$realisateur->nom}} </option>
                    @foreach ($personnes_nom as $personne_nom)
                        @if($personne_nom->id!=$realisateur->id)
                            <option value="{{old('id', $personne_nom->id)}}">{{$personne_nom->nom}}</option>
                        @endif
                    @endforeach
                </select>
            @endif
            </div>
            <div class="col-xl-2">
            @if($film->producteur != null)
                <br>
                <label class="form-label" for="producteur_id">Producteur ID</label>
                <select class="form-control" name="producteur_id" id="producteur_id">
                    <option value="{{$producteur->id}}"> {{$producteur->nom}} </option>
                    @foreach ($personnes_nom as $personne_nom)
                        @if($personne_nom->id!=$producteur->id)
                            <option value="{{old('id', $personne_nom->id)}}">{{$personne_nom->nom}}</option>
                        @endif
                    @endforeach
                </select>
            @endif
            </div>
            <div class="col-xl-2">
            @if($acteur != null)
                <br>
                <label class="form-label" for="acteur">Acteur ID</label>
                <select class="form-control" name="acteur_id" id="acteur_id">
                    <option value="{{$acteur->id}}"> {{$acteur->nom}} </option>
                    @foreach ($personnes_nom as $personne_nom)
                        @if($personne_nom->id!=$acteur->id)
                            <option value="{{old('id', $personne_nom->id)}}">{{$personne_nom->nom}}</option>
                        @endif
                    @endforeach
                </select>
                @endif
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="type_id">Type du film</label>
                <!-- doublons du type de film -->
                <select class="form-control" name="type_id" id="type_id">
                    <option value="{{$type->id}}"> {{$type->genre}} </option>
                    @foreach ($types as $type)
                    @if($type->id!=$type->genre)
                        <option value="{{old('id', $type->id)}}">{{$type->genre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="resumer">Résumer du film</label>
                <input type="text" class="form-control" id="resumer" placeholder="Résumer du film" name="resumer" value="{{old('resumer', $film->resumer)}}">
                <br>
                <label class="form-label" for="pochetteURL">Pochette URL du film</label>
                <input type="text" class="form-control" id="pochetteURL" placeholder="lien de l'image" name="pochetteURL" value="{{old('pochetteURL', $film->pochetteURL)}}">
                <br>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <button  type="submit" class="btn btn-success">Modifier</button>
            </form>
            </div>
            <div class="col-xl-4">
                <form method="POST" action="{{route('films.destroy',[$film->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>


@if(isset($errors) && $errors->any())
<div class="alert alert-danger">
    @foreach ($errors as $error)
        <p>{{$error}}</p>   
    @endforeach
</div>
@endif
@endif

@endrole
@endsection