
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Session Status -->
    @section('content')

    <!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
              <form method="POST" action="{{ route('login') }}">
                @csrf

            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Iniciar Sesión</h2>
              <form>
                <!--Correo del usuario -->
                <div class="row">
                  <div class="form-outline mb-4">
                      <input type="email" id="form3Example1" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                      <label class="form-label" for="form3Example1">{{ __('Correo') }}</</label>
                    </div>
                  </div>

                <!-- Correo del usuario -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  <label class="form-label" for="form3Example4">{{ __('Contraseña') }}</</label>
                </div>

                <!-- Checkbox -->
                <div class="form-outline mb-4">
                  @if (Route::has('password.request'))
                  <a class="btn btn-link-dark form-control" href="{{ route('password.request') }}">
                      {{ __('¿Olvidaste tu contraseña?') }}
                  </a>
              @endif

                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    {{ __('Iniciar sesión') }}
                </button>

                <!-- Register buttons -->
                <div class="form-outline mb-4">
                    <a class="btn btn-link-dark form-control" href="{{ route('register') }}">
                        {{ __('¿Primera vez? Registrate aquí') }}
                    </a>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="../assets/img/loginlogo.png" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
