<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img class="logo"  src="\media\logo-removebg-preview.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('presentation')}}">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">I nostri articoli</a>
          </li>
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto ospite
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
            </ul>
          </li>
         @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto
                {{Auth::user()->name}}
               </a>
              <ul class="dropdown-menu  border-info">
                <li><a class="dropdown-item" href="{{route('careers')}}">Lavora con noi</a></li>
                @if (Auth::user()->is_admin)
                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
                @endif
                @if(Auth::user()->is_revisor)
                <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisor</a></li>
                @endif
                <hr class="m-0">
                @if(Auth::user()->is_writer)
                <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard Writer</a></li>
                <li><a class="dropdown-item" href="{{route('article.create')}}">Inserisci un articolo</a></li>
                @endif
                <hr class="m-0">
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(),document.querySelector('#form-logout').submit()">Logout</a></li>
             <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
              </ul>
            </li>
            @endguest
          </ul>
          <form class="d-flex ms-auto me-5" role="search" method="GET" action="{{route('article.search')}}">
            <input class="searchForm ps-2 bg-transparent text-white me-1" id="myInput" name="query" type="search" placeholder="Cosa stai cercando?" aria-label="Search">
            <button class="btn btn-outline-info border-info nav-link" type="submit">Cerca</button>
          </form>
      </div>
    </div>
  </nav>