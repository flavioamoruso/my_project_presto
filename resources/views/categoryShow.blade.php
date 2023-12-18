<x-layout>
    <div class="background bg-dark">
    <div class="container-fluid myhead vh">
        <div class="row h-100 align-items-center text-center">
            <div class="col-12 mt-5 pt-5">
                <h1 class="title-show">Esplora la categoria "{{$category->name}}"</h1>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container mt-3">
        <div class="row justify-content-around text-center">
                    @forelse($category->products as $product)
                    <div class="col-10 col-md-3 my-3 mx-3">
                        <x-card :product="$product"/>
                    </div>
                        @empty
                        <div class="col-12">
                            <p class="p-2 h5">Non sono presenti film per questa categoria</p>
                            <p class="p-2 h5">Inseriscine uno : <a href="{{route('products.create')}}" class="btn btn-gradient">Nuovo annuncio</a> </p>
                        </div>
                        @endforelse
        </div>
    </div>

</x-layout>