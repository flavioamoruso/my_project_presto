  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-4">
      <a class="navbar-brand" href="/">
        <span class="{{route('homepage')}}"><h3>Il Grande Cinema</h3></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link p" href="{{route('homepage')}}">Home</a></li>
          <div class="btn-group">
            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </button>
            <ul class="dropdown-menu">
              @foreach($categories as $category)
              <li><a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">
              {{$category->name}}</a></li>
              @endforeach
            </ul>
          </div>
          <li class="nav-item"><a class="nav-link p" href="">La nostra storia</a></li>
          <li class="nav-item"><a class="nav-link p" href="{{route('contactUs')}}">Collabora con noi</a></li>
          <li class="nav-item"><a class="nav-link p" href="{{route('products.index')}}">Tutti i film</a></li>
          @guest
          <li class="nav-item p"><a class="nav-link text-warning" href="{{route('login')}}">Accedi</a></li>
          <li class="nav-item p"><a class="nav-link text-warning" href="{{route('register')}}">Registrati</a></li>
          @endguest
          @auth
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto {{Auth::user()->name}}
              </button>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="{{route('products.create')}}">Inserisci film</a></li>
                <li><form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button class="nav-link" type="submit">Logout</button>
                </form></li>
              </ul>
            </li>
          </ul>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
