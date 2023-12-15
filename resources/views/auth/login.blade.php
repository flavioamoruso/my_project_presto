<x-layout>
  <div class="container-fluid sfondo-auth vh-100">
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-5">
            <div class="form-container">
                <h3 class="title">Accedi</h3>
                <form class="form">
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="">
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