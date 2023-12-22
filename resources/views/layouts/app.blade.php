<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('netflix.css')}}">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   </head>
<body class="black">
    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
        <a id="logo" href="/"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="/">Films</a>
      @role('admin', 'normal')
        <a href="/personnes">Personnes</a>
      @endrole
      @role('admin')
        <a href="/creation/personnes">Personne++</a>
        <a href="/creation/films">Film++</a>
        <a href="/lien">Acteur->Film</a>
      @endrole
        <a href="">Portfolio</a>        
      </nav>
      @role('admin')
      <nav class="sub">
        <!-- <a href="/creation/usagers">Usagers++</a> <a href="/usagers">Usagers</a> -->
        <div>
          <form method="get" action="{{route('usagers.create')}}">
            @csrf
            <button type="submit" class="btn btn-warning text-dark">Usagers++</button>
          </form> 
        </div>
      </nav>
      <nav class="sub">
        <div>
          <form method="get" action="{{route('usagers.index')}}">
            @csrf
            <button type="submit" class="btn btn-info text-dark">Usagers</button>
          </form> 
        </div>
      </nav>
      @endrole
      <nav class="sub">
        <div>
          <form method="post" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="btn btn-danger text-dark">Logout</button>
          </form> 
        </div>
      </nav>
      
@if(isset($errors) && $errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

      <!-- Alerte -->

    </header>
    <!-- END OF HEADER -->
  @yield('contenu')
    

    <!-- FOOTER -->
    <!-- LINKS -->
    <section class="link">
      <br><br><br><br>
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <br>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->
  
    <footer>
      <p>&copy 1997-2018 Netflix, Inc.</p>
      <p>Carlos Avila &copy 2018</p>
    </footer>
    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>