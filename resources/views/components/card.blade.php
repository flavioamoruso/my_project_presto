<div class="card">
  <div class="card__corner"></div>
  <div class="card__img">
    <span class="card__span">{{$product->category->name}}</span>
    <img src="https://picsum.photos/200" alt="" class="img-fluid">
  </div>
  <div class="card-int">
    <p class="card-int__title mt-2">{{$product->title}}</p>
    <p class="excerpt">{{$product->body}}</p>
    <p class="card-footer">Inserito il {{$product->created_at->format('d/m/Y')}}</p>
    <button class="card-int__button">Mostra</button>
  </div>
</div>