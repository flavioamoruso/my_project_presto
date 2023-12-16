<x-layout>
    <div class="background mt-3">
    <div class="container-fluid myhead">
        <div class="row h-100 align-items-center text-center">
            <div class="col-12">
                <h1 class="title-show">Esplora la categoria "{{$category->name}}"</h1>
            </div>
        </div>
    </div>
    
    
    <div class="container mt-2">
        <div class="row justify-content-around text-center">
                    @forelse($category->products as $product)
                    <div class="col-12 col-md-3">
                        <x-card :product="$product"/>
                    </div>
                        @empty
                        <div class="col-12">
                            <p>Non sono presenti annunci per questa categoria</p>
                            <p>Pubblicane uno : <a href="{{route('products.create')}}" class="btn btn-gradient">Nuovo annuncio</a> </p>
                        </div>
                        @endforelse
        </div>
    </div>

</x-layout>