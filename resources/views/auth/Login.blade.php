@extends('/partials/layout')

@section('content')
<div class="content is-large">
    <div class="row justify-content-center">
        <div class="col-md-8">
     
            <div class="card py-4">
            <h1 class="title has-text-centered">Se connecter</h1>

                <div class="content has-text-centered">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail:*') }}</label>

                            <div class="column is-half is-offset-one-quarter">
                                <input id="email" type="email" class="input is-normal @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-8 col-form-label text-md-right">{{ __('Mot de passe:*') }}</label>

                            <div class="column is-half is-offset-one-quarter">
                                <input id="password" type="password" class="input is-normal @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-4">
                            <div class="col-md-18 offset-md-4">
                                <a type="submit" class="button is-large is-primary">
                                    {{ __('Se connecter') }}
                                 </a>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link is-underlined" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-6">
                            <div class="col-md-8 offset-md-4 is-one-quarter">
                                @if (Route::has('register'))
                                    <a class="btn btn-link is-underlined" href="{{ route('register') }}">
                                        {{ __("Pas de compte ? S'inscrire") }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
