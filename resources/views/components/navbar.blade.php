<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="text-decoration mr-5" href="{{route('homepage')}}"><h2 class="p-2 text-white">Il Grande Cinema</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="p nav-link text-primary" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="p nav-link text-primary" href="{{route('contactUs')}}">Collabora con noi</a>
        </li>
        <li class="nav-item">
          <a class="p nav-link text-primary" href="">La nostra storia</a>
        </li>
        <li class="nav-item">
          <a class="p nav-link text-primary" href="{{route('products.index')}}">Tutti i film</a>
        </li>
            @guest
            <li class="nav-item">
              <a class="p nav-link text-primary" href="{{route('login')}}">Accedi</a>
            </li>
            <li class="nav-item">
              <a class="p nav-link text-primary" href="{{route('register')}}">Registrati</a>
            </li>
            @endguest
            @auth
            <li class="nav-item dropdown me-3 p">
              <a class="nav-link dropdown-toggle text-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('products.create')}}">Inserisci Film</a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li><form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button class="nav-link text-white" type="submit">Logout</button>
                </form></li>
              </ul>
            </li> 
            @endauth
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>