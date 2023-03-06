<nav class="navbar navbar-expand-lg navbar-scroll shadow-0 py-4" style="background-color: #0A2640">
    <div class="container">
      <img src="/img/Mediamodifier-Design.svg" height="65px" width="65px">
      <p class="text-white ms-2 align-self-center" style="font-size: 30px; padding-top:13px;">Othello</p>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}" style="color: #5EE4A3">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white nav" href="{{ route('rules') }}" style="color:FFFFFF;">Como jugar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('team') }}" style="color:FFFFFF;">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('tournaments.index') }}" style="color:FFFFFF;">Torneos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('contact') }}" style="color:FFFFFF;">Contacto</a>
          </li>

          @guest
            <button type="button" class="btn btn-light text-body ms-3 rounded-pill">
              <a href="{{ route('login.index') }}" class="text-decoration-none text-body">Iniciar Sesión</a> 
            </button>
          @endguest

          @auth
            <form action="{{ route('logout') }}" method="POST">
              @csrf

              <button type="submit" class="btn btn-danger text-white ms-3 rounded-pill">Logout</button>

            </form>
            
          @endauth
        </ul>
      </div>
    </div>
</nav>