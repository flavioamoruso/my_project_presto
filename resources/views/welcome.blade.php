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
</x-layout>