<x-layout>
  <div class="container-fluid sfondo-auth vh-100">
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-5">
            <div class="form-container mt-5">
                <h3 class="title">Accedi</h3>
                <form class="form" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="">
                        <div class="forgot">
                            <a rel="noopener noreferrer" href="#">Forgot Password ?</a>
                        </div>
                    </div>
                    <button class="sign">Sign in</button>
                </form>
                <p class="signup">Don't have an account?
                    <a rel="noopener noreferrer" href="#" class="">Sign up</a>
                </p>
            </div>
        </div>
    </div>
  </div>
</x-layout>