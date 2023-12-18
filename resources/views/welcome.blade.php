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
  
  <div class="container">
    <div class="row justify-content-around text-center">
      <div class="col-12 mt-5">
        <h3>Film recenti</h3>
      </div>
        @foreach($products as $product)
        <div class="col-10 col-md-3 my-3 mx-auto">
            <x-card
            
            :product="$product"
            
            />
        </div>
        @endforeach
    </div>
</div>
</x-layout>