@extends('layouts.app')

@section('title', "Zoom sur la personne")

@section('contenu')

<h1>{{$personne->nom}}</h1>
<h3>{{$personne->dateN}}</h3>

@endsection