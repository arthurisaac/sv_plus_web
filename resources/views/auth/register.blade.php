@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __("Inscription") }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group input-group-outline my-3">
                            <label for="nom" class="form-label">{{ __('Nom') }}</label>

                            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror"
                                   name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                            @error('nom')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label for="prenom" class="form-label">{{ __('Prénom') }}</label>

                            <input id="prenom" type="text"
                                   class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                   value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                            @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label for="telephone"
                                   class="form-label">{{ __('N° Téléphone') }}</label>

                                <input id="telephone" type="text"
                                       class="form-control @error('telephone') is-invalid @enderror" name="telephone"
                                       value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label for="email"
                                   class="form-label">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label for="password"
                                   class="form-label">{{ __('Mot de passe') }}</label>

                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label for="password-confirm"
                                   class="form-label">{{ __('Confirmer le mot de passe') }}</label>

                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                        </div>

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
