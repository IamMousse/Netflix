@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

@role('normal', 'enfant')
<h1>Vous n'avez pas accès à cette Page...</h1>
@endrole

<br><br>
@role('admin')

@endrole
@endsection