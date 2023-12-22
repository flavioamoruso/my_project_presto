<x-layout>
  <div class="container-fluid header">
    <div class="row h-100 align-items-top text-center">
      <div class="col-12 mt-5 pt-5">
        <div class="d-flex justify-content-center">
          <button class="btn btn-gradient text-decoration mt-5"><a class="text-dark text-decoration" href="{{route('products.create')}}">
          Inserisci film</a></button>
        </div>
        <h1 class="h1-custom titolo mt-4 text-dark">L'altadefinizione dei film a tua portata</h1>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-12 my-4">
        <h2>Film recenti</h2>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row justify-content-around text-center">
        @forelse($products as $product)
        <div class="col-10 col-md-3 my-3 mx-3">
            <x-card
            
            :product="$product"
            
            />
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-custom">

                <p class="p-2 text-dark">Non sono presenti film in questo momento</p>

            </div>
        </div>
        @endforelse
       
        
        
    </div>
</div>


<div class="container-fluid">
  <div class="row justify-content-center align-items-center">
    <div class="col-12 my-4 text-center">
      <h5>Lorem ipsum.</h5>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center mt-3">
      <div class="card">
        <img class="img-fluid" src="/img/sfondo2.jpg" alt="card">
        <div class="card__content">
          <p class="card__title">Card Title</p>
          <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
      </div>
      
    </div>
    <div class="col-12 col-md-6 mt-3 text-center">
      <h5>Lorem, ipsum dolor.</h5>
      <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, totam Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas atque earum dolorem molestias neque vitae sit labore debitis facere aspernatur in voluptatem, ipsa et officiis consequatur facilis laudantium odio recusandae.</p>
    </div>
  </div>
</div>

<div class="container-fluid mt-4">
  <div class="row justify-content-center align-items-center  text-center">
    <div class="col-12 col-md-6 mt-3">
      <h5>Lorem, ipsum dolor.</h5>
      <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, iure aliquid. Exercitationem vitae, eveniet sit facilis sed consectetur corporis? In praesentium, fuga nesciunt sit cum animi deleniti voluptatibus rem itaque?</p>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center mt-3">
      <div class="card">
        <img class="img-fluid" src="/img/sfondo.jpg" alt="card">
        <div class="card__content">
          <p class="card__title">Card Title</p>
          <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
      </div>
      
    </div>

  </div>
</div>



</x-layout>