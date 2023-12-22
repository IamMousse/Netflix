@extends('layouts.app')

@section('title', "Page d'acceuil Netflix")

@section('contenu')

@auth
<br><br><br>

@role('enfant')
<div class="col-xl-12">
  
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      
      <div class="carousel-item active">
        <img src="https://th.bing.com/th/id/R.582c4dbca906882d68ebb7cf1062ccd2?rik=Tv0FNle6ax1Rlg&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fVs0X27X.jpg&ehk=G1wCjlyKJIL%2fKwdz%2fdGqIHJ6S9eTIpWfRqbrAddPAJ4%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="..." width="500px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Shrek 1</h5>
          <p>Bientôt disponible...</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://images2.alphacoders.com/609/609399.jpg" class="d-block w-100" alt="..." width="500px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ace Ventura 2 : When nature calls</h5>
          <p>Bientôt disponible...</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://m.media-amazon.com/images/S/pv-target-images/50145acc8b80d46a1d61dd0aec2566bf426e893c8f70a3cc3361619a9e0712c8._UR1920,1080_SX720_FMjpg_.jpg" class="d-block w-100" alt="..." width="500px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5>The spiderwick chronicles</h5>
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
@endrole

@role('admin', 'normal')
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
@endrole


@role('admin', 'normal')
<div class="wrapper">
  <div class="container-fluid">
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
        <h1 id="">Tous</h1>
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
    @endrole
    <div class="row">
      <div class="col-xl-1"></div>
      <div class="col-xl-10">
        <h1 id="TvShows">Anime</h1>
          <div class="box">
            @if(count($animes))
            @foreach($animes as $anime)
            <a href="{{route('film.show', [$anime])}}">
              <img src="{{$anime->pochetteURL}}" alt="" width="250px">
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
        <h1 id="TvShows">Science-Fiction</h1>
          <div class="box">
            @if(count($sciencefictions))
            @foreach($sciencefictions as $sciencefiction)
            <a href="{{route('film.show', [$sciencefiction])}}">
              <img src="{{$sciencefiction->pochetteURL}}" alt="" width="250px">
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
        <h1 id="myList">Comédie</h1>
        <div class="box">
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
    <div class="row">
      <div class="col-xl-1"></div>
      <div class="col-xl-10">
        <h1 id="myList">Aventure</h1>
        <div class="box">
          @if(count($aventures))
            @foreach($aventures as $aventure)
            <a href="{{route('film.show', [$aventure])}}">
              <img src="{{$aventure->pochetteURL}}" alt="" width="250px">
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
        <h1 id="myList">Romance</h1>
        <div class="box">
          @if(count($romances))
            @foreach($romances as $romance)
            <a href="{{route('film.show', [$romance])}}">
              <img src="{{$romance->pochetteURL}}" alt="" width="250px">
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
        <h1 id="myList">Criminels</h1>
        <div class="box">
          @if(count($criminels))
            @foreach($criminels as $criminel)
            <a href="{{route('film.show', [$criminel])}}">
              <img src="{{$criminel->pochetteURL}}" alt="" width="250px">
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
        <h1 id="myList">Image</h1>
        <div class="box">
          @if(count($criminels))
            @foreach($criminels as $criminel)
            <a href="{{route('film.show', [$criminel])}}">
              <img src="{{ asset('img/films/' . $criminel->pochetteURL) }}" alt="" width="300px" height="300px">
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