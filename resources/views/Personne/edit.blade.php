@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

@role('normal', 'enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole

<br><br>
@role('admin')
<div class="row">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
        <h1>Formulaire pour modifer une personne {{$personne->nom}}</h1>
    </div>
    <div class="col-xl-2"></div>
</div>
<form method="post" action="{{route('personnes.update', [$personne])}}">
    @csrf 
    @method('PATCH')
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
            <br>
                <label class="form-label" for="nom">Nom de la personne</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom', $personne->nom)}}">
            </div>
            <div class="col-xl-2">
            <br>
                <label class="form-label" for="sexe">Sexe de la personne</label>
                <input type="text" class="form-control" id="sexe" name="sexe" value="{{old('sexe', $personne->sexe)}}">
            </div>
            <div class="col-xl-2">
            <br>
                <label class="form-label" for="metier">Métier de la personne</label>
                <input type="text" class="form-control" id="metier" name="metier" value="{{old('metier', $personne->metier)}}">
            </div>
            <div class="col-xl-2">
            <br>
                <label class="form-label" for="genre_id">Genre de la personne</label>
                <input type="text" class="form-control" id="genre_id" name="genre_id" value="{{old('genre_id', $personne->genre_id)}}">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="dateN">Date de naissance de la personne</label>
                <input type="date" class="form-control" id="dateN" name="dateN" value="{{old('dateN', $personne->dateN)}}">
            </div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="dateDece">Date de décès de la personne</label>
                <input type="date" class="form-control" id="dateDece" name="dateDece" value="{{old('dateDece', $personne->dateDece)}}">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="photo">Photo de la personne</label>
                <input type="text" class="form-control" id="photo" name="photo" value="{{old('photo', $personne->photo)}}">
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
                <form method="POST" action="{{route('films.destroy', [$personne->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>


@endrole
@endsection