<x-layout>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12 mt-5 pt-5">
                <h1>Compra questo film</h1>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-around text-center mx-auto">
            <div class="card">
                <div class="card__corner"></div>
                <div class="card__img">
                  <span class="card__span">{{$product->category->name}}</span>
                  <img src="https://picsum.photos/200" alt="" class="img-fluid">
                </div>
                <div class="card-int">
                  <p class="card-int__title mt-2">{{$product->title}}</p>
                  <p class="excerpt">{{$product->body}}</p>
                  <div class="button d-flex justify-content-center" data-tooltip="Prezzo {{$product->price}} €">
                    <div class="button-wrapper">
                      <div class="text">Compra ora</div>
                      <span class="icon">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-cart2"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"
                          ></path>
                        </svg>
                      </span>
                    </div>
                  </div>
                  
                  <p class="card-footer">Inserito il {{$product->created_at->format('d/m/Y')}}</p>
                  <p class="card-text p-0 mb-1 ">Autore :  {{Auth::user()->name ?? ''}}</p>
                </div>
              </div>
        </div>
    </div>
</x-layout>