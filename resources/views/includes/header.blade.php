<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark elegant-color-dark">
    <a class="navbar-brand" href="/">
      <strong>
        UTFDogs
      </strong>
    </a>
    <button 
      class="navbar-toggler" 
      type="button" 
      data-toggle="collapse" 
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" 
      aria-expanded="false" 
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="/">
            Início 
            <span class="sr-only"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dogs">
            Dogs
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ajude-nos">
            Ajude-nos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sobre">
            Sobre
          </a>
        </li>
      </ul>
      <div class="dropdown justify-content-end">

        @if(auth()->check())
          <button 
            class="btn yellow dropdown-toggle" 
            type="button" 
            id="drop-login" 
            data-toggle="dropdown"
            aria-haspopup="true" 
            aria-expanded="false"
          >
            {{auth()->user()->name}} 
            <i class="fas fa-user"></i>
          </button>
          <div class="dropdown-menu yellow-hover" aria-labelledby="drop-login">
            <a class="dropdown-item " href="/dashboard">
              DashBoard
            </a>
            <a class="dropdown-item " href="/logout" id="sair">
              Sair
            </a>
          </div>
        @else
          <button 
            class="btn yellow" 
            type="button" 
            id="drop-login" 
            aria-haspopup="true" 
            aria-expanded="false"
          >
          <a class="text-dark" href="/logout"> 
            ENTRAR 
          </a>
          <i class="fas fa-user"></i>
          </button>
        @endif
      </div>
    </div>
  </nav>
</header>