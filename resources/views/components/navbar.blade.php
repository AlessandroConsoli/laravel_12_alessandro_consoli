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
            <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Archivio Articoli</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('article.create')}}">Crea un articolo</a>
          </li>
          @endauth
        </ul>

        @guest
        <div class="d-flex">
          <a class="btn btn-outline-info border-2 me-3" href="{{route('login')}}">Accedi</a>
          <a class="btn btn-outline-info border-2" href="{{route('register')}}">Registrati</a>
        </div>  
        @endguest

        @auth
        {{--? Stringa nome utente loggato --}}
        <div class="d-flex">
          <a class="btn btn-outline-info border-0 me-3 mt-2 p-0">Ciao {{Auth::user()->name}}</a>
        
        {{--? Tasto Logout --}}                  
          <form 
          action="{{route('logout')}}"
          method="POST">
          @csrf
          <button class="btn btn-outline-info border-2" type="submit">Logout</button>
          </form>
        </div>
        @endauth

      </div>
    </div>
  </nav>