<x-layout>
    <div>
        <div class="container-fluid">
            <div class="row text-center justify-content-center">
                <div class="col-12 mt-5 pt-5">
                    <h1 class="text-warning">Ecco tutti i film che vuoi!</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-2">
            <div class="row justify-content-center text-center">
              <div class="col-6 mt-5 text-center pt-3">
                
                @if (session('message'))
                <div class="alert alert-warning">
                  {{ session('message') }}
                </div>
                @endif
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
    </div>
    <div class="d-flex justify-content-center">
        {{$products->links()}}
    </div>
    
</x-layout>