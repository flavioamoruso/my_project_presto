<x-layout>


    <div class="container-fluid mt-5">
      <div class="row justify-content-center text-center">
        <div class="col-6 mt-5 text-center pt-3">
          
          @if (session('message'))
          <div class="alert alert-warning">
            {{ session('message') }}
          </div>
          @endif
          
          
        </div>
          <div class="col-12 d-flex justify-content-center">
              <div class="form-container p-3">
                  <h3 class="title">Modifica film</h3>
                  <form class="form" method="POST" action="{{route('products.update',compact('product'))}}" enctype="multipart/form-data">
                    @method('PUT')
                      @csrf
                      <div class="input-group">
                          <label for="title">Titolo</label>
                          <input type="text" value="{{$product->title}}" name="title">
                          @error('title') <span class="error text-danger">{{ $message }}</span> @enderror 
                      </div>
                      <div class="input-group">
                          <label for="price">Prezzo</label>
                          <input type="number" value="{{$product->price}}" name="price">
                          @error('price') <span class="error text-danger">{{ $message }}</span> @enderror 
                      </div>
                      <select class="form-select my-4 category-padding text-secondary" name="category" aria-label="Default select example">
                        <option selected>Categoria</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @error('category_id') <span class="error">{{ $message }}</span> @enderror 
                        @endforeach
                      </select>
                      <div class="mb-3">
                        <label for="floatingTextarea" class="text-white"><h6>Descrizione</h6></label>
                        <textarea name="body" class="form-control text-warning category-padding" placeholder="">{{$product->body}}</textarea>
                        @error('body') <span class="error text-danger">{{ $message }}</span> @enderror 
                      </div>
                      <div class="input-group">
                        <label class="text-center" for="img">Film attuale:</label>
                        <img class="mt-4 mb-2" src="{{Storage::url($product->img)}}" alt="card" height="200">
                    </div>
                      <div class="input-group">
                        <label for="img">Inserisci immagine</label>
                        <input class="category-padding" type="file" name="img">
                    </div>
                      <button class="sign my-4">Invia</button>
                  </form>
              </div>
          </div>
      </div>
    </div>

  </div>
</x-layout>









































  {{-- <div class="container-fluid my-5 py-5">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="login-box">
          <p class="p">Inserisci film</p>
          <form method="POST" action="{{route('products.store')}}">
            @csrf
            <div class="user-box">
              <input name="title" type="text">
              <label><h6>Titolo</h6></label>
            </div>
            <div class="user-box">
              <input name="price" type="number" step="0.5" id="price">
              <label for="price"><h6>Prezzo</h6></label>
            </div>
            <select class="form-select mb-2" name="category" aria-label="Default select example">
              <option selected>Categoria</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
            <div class="mb-3">
              <label for="floatingTextarea" class="text-white"><h6>Descrizione</h6></label>
              <textarea name="body" class="form-control text-white" placeholder="" id="floatingTextarea"></textarea>
            </div>
            <button class="button" type="submit">
              Invia
              <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
   {{-- <div class="container">
    <div class="row text-center">
      <div class="col-12">
        
        @if (session('message'))
        <div class="alert alert-primary">
          {{ session('message') }}
        </div>
        @endif
        
        
      </div>
    </div>
  </div> --}}
  
  