<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand pp" href="{{route('homepage')}}">Il Grande Cinema</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0  mx-auto">
        <li class="nav-item">
          <a class="nav-link p" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p" href="{{route('contactUs')}}">Contattaci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p" href="{{route('products.index')}}">Tutti i film</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link p text-dark" href="{{route('login')}}">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p text-dark" href="{{route('register')}}">Registrati</a>
        </li>
        @endguest
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pp" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('products.create')}}">Inserisci film</a></li>
            <li><form action="{{route('logout')}}" method="POST">
              @csrf
             <li><a class="dropdown-item" href=""><button type="submit" class="nav-link text-dark p">Logout</button></a></li>
            </form></li>
          </ul>
        </li>
        @endauth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pp" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            @foreach($categories as $category)
            <li><a class="dropdown-item pp" href="{{route('categoryShow',compact('category'))}}">
            {{$category->name}}</a></li>
            @endforeach
          </ul>
        </li>
      </ul>
      <form action="{{route('products.search')}}" method="GET" class="d-flex">
        <input name="searched" class="form-control me-2" type="search" placeholder="Cerca film" aria-label="Search">
        <button class="btn btn-gradient" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top border-bottom" id="navbar">
    <div class="container px-4">
      <a class="navbar-brand" href="/">
        <span class="{{route('homepage')}}"><h3>Il Grande Cinema</h3></span>
      </a>
      <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon bg-dark"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link p" href="{{route('homepage')}}">Home</a></li>
          <div class="btn-group">
            <a class="btn text-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              @foreach($categories as $category)
              <li><a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">
              {{$category->name}}</a></li>
              @endforeach
            </ul>
          </div>
          <li class="nav-item"><a class="nav-link p" href="{{route('contactUs')}}">Contattaci</a></li>
          <li class="nav-item"><a class="nav-link p" href="{{route('products.index')}}">Tutti i film</a></li>
          @guest
          <li class="nav-item p"><a class="nav-link text-warning" href="{{route('login')}}">Accedi</a></li>
          <li class="nav-item p"><a class="nav-link text-warning" href="{{route('register')}}">Registrati</a></li>
          @endguest
          @auth
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="btn text-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="{{route('products.create')}}">Inserisci film</a></li>
                <li><form action="{{route('logout')}}" method="POST">
                  @csrf
                 <li><a class="dropdown-item" href=""><button type="submit" class="nav-link text-white">Logout</button></a></li>
                </form></li>
              </ul>
            </li>
          </ul>
          @endauth
        </ul>
      </div>
    </div>
  </nav> --}}
