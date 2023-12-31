<x-layout>
    <div class="container-fluid sfondo-auth vh-100">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <div class="form-container mt-5">
                    <h3 class="title">Registrati</h3>
                    <form class="form" method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="">
                        </div>
                        <div class="input-group">
                            <label for="username">Username</label>
                            <input type="text" name="name" id="username" placeholder="">
                        </div>
                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="">
                        </div>
                        <div class="input-group">
                            <label for="password">Conferma Password</label>
                            <input type="password" name="password_confirmation" id="password" placeholder="">
                        </div>
                        <button class="sign my-4">Sign in</button>
                    </form>
                    <p class="signup">Hai gia un account?
                        <a rel="" href="{{route('login')}}" class="">Accedi</a>
                    </p>
                </div>
            </div>
        </div>
      </div>
</x-layout>