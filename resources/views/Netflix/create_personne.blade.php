@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

<form method="post" action="{{route('acteurs.store)}}">
    @csrf 
    <div class="form-group">
        <label for="nomActeur">Nom de l'acteur</label>
        <input type="text" class="form-control" id="nomActeur" placeholder="Nom de l'acteur" name="nom">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

@endsection