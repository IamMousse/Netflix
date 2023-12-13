@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

@role('normal', 'enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole

<br><br>
@role('admin')
<form method="post" action="{{route('usagers.store')}}">
    @csrf 
    <div class="container-fluid text-center">
    <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <h1>Formulaire pour ajouter un utilisateur</h1>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
                <br>
                <label class="form-label" for="nom_usager">Nom de l'utilisateur</label>
                <input type="text" class="form-control" id="nom_usager" placeholder="Yousouf8" name="nom_usager">
            </div>
            <div class="col-xl-3">
                <br>
                <label class="form-label" for="prenom">Prénom du client</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom du client" name="prenom">
            </div>
            <div class="col-xl-3">
                <br>
                <label class="form-label" for="nom">Nom du client</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom de la personne" name="nom">
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="email">Email de l'utilisateur</label>
                <input type="email" class="form-control" placeholder="patate@hotmail.com" id="email" name="email">
            </div>
            <div class="col-xl-4">
                <br>
                <label class="form-label" for="role">Assigner le role de votre utilisateur</label>
                <select class="form-control" id="id" name="id">
                    <option value="" selected>Veuillez choisir un role</option>
                    @foreach ($roleuser as $usager)
                    <option value="{{$usager->id}}">{{$usager->role}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <br>
                <label class="form-label" for="password">Inscrire un mot de passe</label>
                <input type="text" class="form-control" id="password" placeholder="inscrire votre password" name="password">
            </div>
            <div class="col-xl-3"></div>
        </div>
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <br>
                <label class="form-label" for="password">Confirmer votre mot de passe</label>
                <input type="text" class="form-control" id="password" placeholder="inscrire votre password" name="password">
            </div>
            <div class="col-xl-3"></div>
        </div>
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4">
                <br>
                <button  type="submit" class="btn btn-success">Enregistrer</button>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
</form>
@endrole
@endsection