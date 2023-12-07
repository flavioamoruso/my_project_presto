<x-layout>
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="login-box">
                    <p class="p">Login</p>
                    <form method="POST" action="{{route('login')}}">
                      @csrf
                      <div class="user-box">
                        <input name="email" type="text">
                        <label>Email</label>
                      </div>
                      <div class="user-box">
                        <input name="password" type="password">
                        <label>Password</label>
                      </div>
                      <button class="button" type="submit">
                        Invia
                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                          <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                        </svg>
                      </button>
                    </form>
                    <p class="a2 text-white">Non hai un account?<a href="{{route('register')}}" class="a2">Registrati!</a></p>
                  </div>
            </div>
        </div>
    </div>
</x-layout>