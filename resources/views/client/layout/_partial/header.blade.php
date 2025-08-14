<nav class=" navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-primary"  href="#">
        <img class="img img-fluid" src="{{ asset("images/logo.png") }}" alt="" style=" width: 150px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Route::is("home")) active-p @endif" aria-current="page" href="{{ route("home") }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is("born")) active-p @endif"  href="{{ route('born') }}">Nouveau née</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is("death")) active-p @endif" href="{{ route("death") }}">Décès</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is("arrange")) active-p @endif" href="{{ route("arrange") }}">Aménagement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is("demenage")) active-p @endif" href="{{ route("demenage") }}">Déménagement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is("job")) active-p @endif" href="{{ route("job") }}">Job</a>
          </li>

        </ul>
        @if (Auth::check())

        <a href="{{ route("profil") }}" class="btn btn-sm btn-outline-dark"><i class="bi bi-person-circle "></i> {{ Auth::user()->name }}</a>
        <form action="{{ route("logout") }}" method="post">
            @csrf
            <button class="btn btn-sm btn-danger mx-2">Se déconnecter</button>
        </form>
        @else
        <a href="{{ route('register') }}" class="btn btn-sm bg-p-violet text-white">
            Inscription
        </a>
        <a href="{{ route('login') }}" class="btn btn-sm btn-success mx-2">
            Connexion
        </a>
        @endif

      </div>
    </div>
  </nav>
