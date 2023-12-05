@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

@auth
<br><br><br>

<div class="col-xl-12">
  
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      
      <div class="carousel-item active">
        <img src="https://wallpaperaccess.com/full/245635.jpg" class="d-block w-100" alt="..." width="500px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5>ALIEN</h5>
          <p>Bientôt disponible...</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://gamingbolt.com/wp-content/uploads/2012/07/aliens-colonial-marines-wallpaper.jpg" class="d-block w-100" alt="..." width="500px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5>ALIEN</h5>
          <p>Bientôt disponible...</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://getwallpapers.com/wallpaper/full/4/6/9/1015148-aliens-movie-wallpaper-1920x1200-for-ipad-pro.jpg" class="d-block w-100" alt="..." width="500px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5>ALIEN</h5>
          <p>Bientôt disponible...</p>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>


@role('admin')
<br>
<h2>ADMINISTRATEUR</h2>
@endrole

@role('normal')
<br>
<h2>NORMAL</h2>
@endrole

@role('enfant')
<br>
<H2>ENFANT</H2>
@endrole

@role('admin','normal')
<br>
<h2>ADMINISTRATEUR OU NORMAL</h2>
@endrole

<div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-1"></div>
      <div class="col-xl-10">
        <h1 id="">Popular on Netflix</h1>
            <div class="box">
            @if(count($films))
              @foreach($films as $film)
              <a href="{{route('film.show', [$film])}}">
                <img class="img-fluid" src="{{$film->pochetteURL}}" alt="" width="250px">
              </a>
              @endforeach
            @else
              <h3>Il n'y a pas de films</h3>
            @endif  
            </div>
      </div>
      <div class="col-xl-1"></div>
    </div>
    <div class="row">
      <div class="col-xl-1"></div>
      <div class="col-xl-10">
        <h1 id="movies">Action</h1>
          <div class="box">
            @if(count($actions))
              @foreach($actions as $action)
              <a href="{{route('film.show', [$action])}}">
                <img src="{{$action->pochetteURL}}" alt="" width="250px">
              </a>
              @endforeach
            @else
              <h3>Il n'y a pas de films</h3>
            @endif 
          </div>  
      </div>
      <div class="col-xl-1"></div>
    </div>
    <div class="row">
      <div class="col-xl-1"></div>
      <div class="col-xl-10">
        <h1 id="TvShows">Horreur</h1>
          <div class="box">
            @if(count($horreurs))
              @foreach($horreurs as $horreur)
              <a href="{{route('film.show', [$horreur])}}">
                <img src="{{$horreur->pochetteURL}}" alt="" width="250px">
              </a>
              @endforeach
            @else
              <h3>Il n'y a pas de films</h3>
            @endif
          </div>  
      </div>
      <div class="col-xl-1"></div>
    </div>
    <div class="row">
      <div class="col-xl-1"></div>
      <div class="col-xl-10">
        <h1 id="myList">Autres</h1>
        <div class="box">
          @if(count($documentaires))
            @foreach($documentaires as $documentaire)
            <a href="{{route('film.show', [$documentaire])}}">
              <img src="{{$documentaire->pochetteURL}}" alt="" width="250px">
            </a>
            @endforeach
          @else
            <h3>Il n'y a pas de films</h3>
          @endif  
          @if(count($animes))
            @foreach($animes as $anime)
            <a href="{{route('film.show', [$anime])}}">
              <img src="{{$anime->pochetteURL}}" alt="" width="250px">
            </a>
            @endforeach
          @else
            <h3>Il n'y a pas de films</h3>
          @endif
          @if(count($comedies))
            @foreach($comedies as $comedie)
            <a href="{{route('film.show', [$comedie])}}">
              <img src="{{$comedie->pochetteURL}}" alt="" width="250px">
            </a>
            @endforeach
          @else
            <h3>Il n'y a pas de films</h3>
          @endif
        </div>   
      </div>
      <div class="col-xl-1"></div>
    </div>
  </div>
</div>

@else
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-2"></div>
    <div class="col-xl-8 text-center">
      <br><br><br>
      <h1>Veuillez-vous connecter SVP</h1>
      <a href="{{route('showLoginForm')}}" class="btn btn-danger text-dark">Connect</a>
    </div>
    <div class="col-xl-2"></div>
  </div>
</div>
@endauth

@endsection