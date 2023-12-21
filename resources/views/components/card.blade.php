<div class="card">
  <div class="card__corner"></div>
  <div class="card__img">
    <span class="card__span">{{$product->category->name}}</span>
    <img src="{{Storage::url($product->img)}}" alt="card" class="img-fluid" width="165" height="200">
  </div>
  <div class="card-int">
    <p class="card-int__title mt-3">{{$product->title}}</p>
    <p class="excerpt">{{$product->body}}</p>
    <p class="card-footer">Inserito il {{$product->created_at->format('d/m/Y')}}</p>
    <a class="text-decoration text-warning" href="{{route('products.show',compact('product'))}}"><button type="submit" class="card-int__button">Mostra</button></a>
  </div>
</div>