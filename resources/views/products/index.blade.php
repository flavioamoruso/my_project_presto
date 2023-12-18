<x-layout>
    <div class="sfondo-index">
        <div class="container-fluid">
            <div class="row text-center justify-content-center">
                <div class="col-12 mt-5 pt-5">
                    <h1 class="text-warning">Ecco tutti i film che vuoi!</h1>
                </div>
            </div>
        </div>
        
        
        <div class="container">
            <div class="row justify-content-around text-center">
                @foreach($products as $product)
                <div class="col-10 col-md-3 my-3 mx-3">
                    <x-card
                    
                    :product="$product"
                    
                    />
                </div>
                @endforeach
               
                
                
            </div>
            <div class="position-relative div-pagination">
                {{$products->links()}}
            </div>
        </div>
    </div>
</x-layout>