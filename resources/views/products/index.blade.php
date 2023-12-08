<x-layout>
    <div class="container-fluid mt-5 py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1>Ecco tutti i film che vuoi!</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-around text-center">
            @foreach($products as $product)
            <div class="col-12 col-md-4 my-3">
                <x-card

                :product="$product"
                
                />
            </div>
            @endforeach
        </div>
    </div>

</x-layout>