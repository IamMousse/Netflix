@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

<br><br>
<form method="post" action="{{route('personnes.store')}}">
    @csrf 
    <div class="container-fluid text-center">
    <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <h1>Formulaire pour ajouter un acteur</h1>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="nomPersonne">Nom de l'acteur</label>
                <input type="text" class="form-control" id="nomPersonne" placeholder="Nom de la personne" name="nom">
            </div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="dateNaissance">Date de naissance</label>
                <input type="date" class="form-control" id="dateNaissance" name="dateN">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="photo">Photo de la personne</label>
                <input type="text" class="form-control" id="photo" placeholder="lien de l'image" name="photo">
                <br>
                <button  type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>
</form>

@endsection