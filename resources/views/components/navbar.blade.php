<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">The Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Archivio Articoli</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('articles.create')}}">Crea un articolo</a>
          </li>
          @endauth
        </ul>

        @guest
        <div class="d-flex">
          <a class="btn btn-outline-info border-2" href="{{route('login')}}">Accedi</a>
        </div>
        <div class="d-flex">
          <a class="btn btn-outline-info border-2 ms-3" href="{{route('register')}}">Registrati</a>
        </div>  
        @endguest

        @auth
        {{--? Stringa nome utente loggato --}}
        <div class="d-flex">
          <a class="btn btn-outline-info border-0 ms-3">Ciao {{Auth::user()->name}}</a>
        </div>
        {{--? Tasto Logout --}}
        <div class="d-flex">          
          <form 
          action="{{route('logout')}}"
          method="POST">
          @csrf
          <button class="btn btn-outline-info border-2 mx-3" type="submit">Logout</button>
          </form>
        </div>
        @endauth

      </div>
    </div>
  </nav>