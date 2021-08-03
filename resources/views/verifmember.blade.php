@extends('/partials/layout')

@section('content')

<div class="hero is-fullheight">
    <div class="container">
        <article class="message is-primary">
            <div class="message-header">
                <p>Créer mon Compte</p>
            </div>
            <div class="message-body">
                <p>Veuillez entrer vos informations afin que nous puissions vous identifier et accéder à l'inscription</p><br>
                <p>Veuillez entrer vos informations au moment de l'obtention de votre diplôme <p><br>
                <p>*Si votre diplôme est antérieur à l'année 2006, veuillez nous contacter par téléphone au : 24 31 45 ou par email : cfa@cci.nc</p><br>
                <p>*Si vous êtes renvoyé vers l'accueil, c'est que vous n'êtes pas enregistré, veuillez nous contacter</p>
            </div>
        </article>

        <div class="is-one-third">
            <form method="post" action="{{ route('verifmember') }}">
                @csrf
                <div class="field is-horizontal is-justify-content-space-between">
                    <div class="control has-icons-left">
                        <label for="last_name" class="">{{ __('Nom') }}</label>
                        <input id="last_name" type="text" class="input" name="last_name" value="{{ old('last_name') }}">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user mt-6"></i>
                        </span>
                    </div>
                </div>
                <div class="field is-horizontal is-justify-content-space-between">
                    <div class="control has-icons-left">
                        <label for="first_name" class="">{{ __('Prenom') }}</label>
                        <input id="first_nae" type="text" class="input" name="first_name" value="{{ old('first_name') }}">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user mt-6"></i>
                        </span>                                
                    </div>
                </div>
                <div class="field is-horizontal is-justify-content-space-between">
                    <div class="control has-icons-left">
                        <label for="birth_date" class="">{{ __('Date de Naissance') }}</label>
                        <input id="" type="date" class="input" name="birth_date" value="{{ old('birth_date') }}">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user mt-6"></i>
                        </span>                                
                    </div>  
                </div>
                <div class="field is-horizontal is-justify-content-space-between">
                    <div class="control has-icons-left offset-md-4">
                        <button type="submit" class="btn button is-primary">Valider mes informations</button>
                    </div> 
                </div>  
            </form>
        </div> 
    </div>
</div>
@endsection

