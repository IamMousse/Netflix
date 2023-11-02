@extends('layouts.app')

@section('title', "Zoom sur le film")

@section('contenu')

<h1>{{$personne->nom}}</h1>
<h3>{{$personne->dateN}}</h3>

@endsection