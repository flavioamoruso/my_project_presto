<x-layout>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
               
            </div>
        </div>
    </div>
        <div class="container-fluid mt-3 pt-3">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="login-box">
                        <p class="p">Inserisci film</p>
                        <form method="POST" action="{{route('register')}}">
                          @csrf
                          <div class="user-box">
                            <input name="title" type="text">
                            <label>Titolo</label>
                          </div>
                          <div class="user-box">
                            <input name="price" type="number">
                            <label>Prezzo</label>
                          </div>
                          <div>
                            <textarea name="body" class="form-control" placeholder="" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea" class="text-white">Descrizione</label>
                          </div>
                          <div class="user-box mt-3">
                                <input class="mt-4 file" name="price" type="file">
                                <label class="mt-2">Immagine</label>
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
</x-layout>