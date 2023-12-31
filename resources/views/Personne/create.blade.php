@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

@role('normal', 'enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole

<!-- À modifier -->
<br><br>
@role('admin')
<form method="post" action="{{ route('personnes.store') }}" enctype="multipart/form-data">
    @csrf 
    <div class="container-fluid text-center">
    <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <h1>Formulaire pour ajouter une personne</h1>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="nom">Nom de la personne</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom de la personne" name="nom">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="dateN">Date de naissance</label>
                <input type="date" class="form-control" id="dateN" name="dateN">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="dateDece">Date de décès</label>
                <input type="date" class="form-control" id="dateDece" name="dateDece">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="sexe">Sexe de la personne</label>
                <input type="text" class="form-control" id="sexe" placeholder="Homme" name="sexe">
            </div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="metier">Métier de la personne</label>
                <input type="text" class="form-control" id="metier" placeholder="realisateur" name="metier">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <br>
                <label class="form-label" for="photo">Photo de la personne</label>
                <input type="file" class="form-control" id="photo" placeholder="lien de l'image" name="photo">
                <br>
                <button  type="submit" class="btn btn-success">Enregistrer</button>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>
</form>

@endrole
@endsection