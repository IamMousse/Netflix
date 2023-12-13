@extends('layouts.app')

@section('title', "Page d'acceuil Utilisateurs")

@section('contenu')

@role('normal', 'enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole

<br><br>
@role('admin')

<div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-10">
            <h1 id="">Liste d'utilisateur</h1>
            <div class="box">
                @if(count($usagers))
                @foreach($usagers as $usager)
                <a href="{{route('usager.show', [$usager])}}">
                    <h3>{{$usager->nom_usager}}</h3>
                </a>
                @endforeach
                @else
                <h3>Il n'y a pas d'usagers</h3>
                @endif
            </div>
        </div>
        <div class="col-xl-1"></div>
    </div>
</div>
@endrole
@endsection