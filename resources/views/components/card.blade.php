<div class="card">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40,112H216a0,0,0,0,1,0,0v88a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V112A0,0,0,0,1,40,112Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M40,112,210,66.4l-8.3-30.9a7.9,7.9,0,0,0-9.8-5.6L37.4,71.3a8,8,0,0,0-5.7,9.8Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="130.1" y1="46.4" x2="179.1" y2="74.7" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="60.6" y1="65.1" x2="109.5" y2="93.4" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
  <div class="card__content">
    <h2 class="card__title text-warning">{{$product->title}}</h2>
    <p class="body">{{$product->body}}</p>
    <h4 class="text-warning body">{{$product->category->name}}</h4>
    <button class="shadow__btn bg-warning">
      Dettagli
  </button>
  </div>
</div>
