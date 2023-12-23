<x-layout>
  <div class="container-fluid sfondo-auth vh-100 mt-5">
    <div class="row justify-content-center text-center">
        <div class="col-6 mt-5 text-center pt-3">
          
            @if (session('message'))
            <div class="alert alert-warning">
              {{ session('message') }}
            </div>
            @endif
            
            
          </div>
        <div class="col-12 d-flex justify-content-center mt-5">
            <div class="form-container mt-5">
                <h3 class="title">Contattaci</h3>
                <form action="{{route('submit')}}" method="POST" class="form">
                    @csrf
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="">
                    </div>
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="">
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="floatingTextarea" class="text-white"><h6>Descrizione</h6></label>
                        <textarea name="body" class="form-control text-warning category-padding" placeholder=""></textarea>
                      </div>
                      <button class="sign my-4">Invia</button>
            </div>
        </div>
    </div>
  </div>
</x-layout>