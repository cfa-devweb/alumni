@extends('/partials/layout')

@section('content')
   
<x-guest-layout>
    <div class="card">
    <div class="card-content">
    <div class="content is-large ">   
    <div class="content has-text-centered"> 
    <div>
    <h1 class="title mb-8">Se connecter</h1>
    </div> 
</div>
    <x-auth-card>
    <div class="column is-half is-offset-one-quarter">
        <x-slot name="logo">
            <!-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </a>
        </x-slot>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email:*')" />
                </div>
                <div>

                <x-input id="email" class="input is-medium" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="align-self mt-4">
                <x-label for="password" :value="__('Mot de passe:*')" />
</div>
<div>
                <x-input id="password" class="input is-large"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            </div>
            <div class="content has-text-centered"> 
            <!-- Remember Me -->
            <!-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> -->
            
            <div>
                <x-button class="mt-4 button is-primary is-large">
                    {{ __('Se connecter') }}
                </x-button>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="is-underlined" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="is-underlined" href="{{ route('password.request') }}">
                        {{ __('Pas de compte ? S\'inscrire') }}
                    </a>
                @endif
                </div>
                
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</div>
</div>
</div>

@endsection
