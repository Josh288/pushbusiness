<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

@section('content')
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            body {
                font-family: "Nunito Sans", sans-serif;
            }

            .form-outline {
                font-family: "Nunito Sans", sans-serif;
                font-size: 22px;
                color: rgb(255, 255, 255);
            }

            .fw-bold {
                color: rgb(255, 255, 255);
            }

            .btn {
                font-size: 22px;
                color: rgb(255, 255, 255);
            }

            .btn-primary {
                background-color: #006F76;
                border-block-color: #006F76;
                border-block-end-color: #006F76;
                border-block-start-color: #006F76
            }

            .cascading-right {
                margin-right: -60px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-6">
            <div class="row g-0 align-items-center">
                <div class="col-lg-8 mb-2 mb-lg-0">
                    <div class="card cascading-right"
                        style="background: hsla(180, 69%, 29%, 0.767);backdrop-filter: blur(30px);">
                        <form method="POST">
                            @csrf

                            <div class="card-body p-6 shadow-5 text-center">
                                <h2 class="fw-bold mb-3">{{ __('Registrarse') }}</h2>
                                <form>
                                    <!--Nombres del usuario nuevo -->
                                    {{-- <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label" for="form3Example1">{{ __('Nombres') }}</< /label>
                                            <input type="name" id="form3Example1"
                                                class="form-control  @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                        </div>
                                    </div> --}}

                                    <!-- Contraseña -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1">{{ __('Nombres') }}
                                                </label>
                                                <input type="text" id="form3Example1" class="form-control"
                                                    @error('name') is-invalid @enderror" name="name" required
                                                    autocomplete="name" />
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    @enderror
                                            </div>
                                        </div>

                                        <!-- Confirmar contraseña -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example2">{{ __('Apellidos') }} </label>
                                                <input type="text" id="form3Example2" class="form-control" min="8"
                                                    max="35" name="last-name" required autocomplete="last-name" />
                                                @error('last-name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Correo del usuario -->
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="form3Example4">{{ __('Correo') }} </label>
                                        <input type="mail" id="form3Example4" class="form-control"
                                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                            required autocomplete="email" required autocomplete="username">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                    </div>

                                    <!-- Contraseña -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1">{{ __('Contraseña') }}
                                                </label>
                                                <input type="password" id="form3Example1" class="form-control"
                                                    @error('password') is-invalid @enderror" name="password" required
                                                    autocomplete="new-password" />
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    @enderror
                                            </div>
                                        </div>

                                        <!-- Confirmar contraseña -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label"
                                                    for="form3Example2">{{ __('Confirmar contraseña') }} </label>
                                                <input type="password" id="form3Example2" class="form-control"
                                                    min="8" max="35" name="password_confirmation" required
                                                    autocomplete="new-password" />
                                                @error('age')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Edad -->
                                    <div class="row">
                                        <div class="form-outline" mb-4>
                                            <label class="form-label" for="form3Example1">{{ __('Edad') }}</label>
                                            <input type="number" id="form3Example1" class="form-control" min="18"
                                                max="99" name="age" />
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <!-- Boton de inicio -->
                                    <button type="submit" class="btn btn-primary btn-ligth btn-block mb-4">
                                        {{ __('Registrarse') }}
                                    </button>

                                    <div class="form-outline mb-3">
                                        <a class="btn form-control" href="{{ route('login') }}">
                                            {{ __('¿Ya tienes alguna cuenta? Inicia sesión') }}
                                        </a>
                                    </div>

                                </form>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2 mb-lg-0">
                    <img src="../assets/img/log.png" class="w-100 rounded-4 shadow-4 " alt="" />
                </div>
            </div>
        </div>
    </section>
