@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __("Connexion") }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf

                        <div class="input-group input-group-outline my-3">
                            <label for="email" class="form-label"></label>

                            <input id="email" type="email" placeholder="{{ __('Addresse mail') }}" class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label for="password" class="form-label"></label>

                            <input id="password" type="password" placeholder="{{ __('Mot de passe') }}"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check form-switch d-flex align-items-center mb-3">
                            <input class="form-check-input" type="checkbox" id="rememberMe"
                                   name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label mb-0 ms-3"
                                   for="rememberMe">{{ __('Se rappeller de moi') }}</label>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                                {{ __('Connexion') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
