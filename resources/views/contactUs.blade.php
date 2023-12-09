<x-layout>
    <div class="container-fluid mt-5 pt-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="text-warning">Compila il form!</h1>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <div class="form-container">
                    <form class="form">
                      <div class="form-group">
                        <label class="text-white" for="email">La tua email</label>
                        <input type="text" id="email" name="email" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white" for="textarea">Quali requisiti hai?</label>
                        <textarea name="textarea" id="textarea" rows="10" cols="50" required=""></textarea>
                      </div>
                      <button class="form-submit-btn text-dark" type="submit">Invia</button>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</x-layout>