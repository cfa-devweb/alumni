@extends('/partials/layout')


@section('content')

<div class="hero is-light">
    <div class="columns">
        <div  class="column hero p-5">
            <article class="p-3">
                <p class="title ">Je suis diplômé du CFA</p>
                <p class="subtitle">Inscrivez-vous, complétez votre profil,
                    développez votre réseau, participez aux évènements du réseau.</p>
                <button class="button is-rounded is-primary"><a href=" {{ route('login') }} ">Se connecter</a></button>
                <button class="button is-rounded is-warning"><a href=" {{ route('register') }} ">S'inscrire</a></button>
            </article>
        </div>
    </div>
</div>
            <p class="title has-text-centered p-2">Pourquoi rejoindre le réseau Alumni de la CCI?</p>
        <article class="columns is-multiline">
            <div class="column icones has-text-centered">
                <i class="fa fa-globe fa-5x has-text-warning" aria-hidden="true"></i>
                <p class="slogan">Développer son réseau</p>
            </div>
            <div class="column icones has-text-centered">
                <i class="fa fa-suitcase fa-5x has-text-warning" aria-hidden="true"></i>
                <p class="slogan">Faire évoluer sa carrière professionnelle</p>
            </div>
            <div class="column icones has-text-centered">
                <i class="fa fa-book fa-5x has-text-warning" aria-hidden="true"></i>
                <p class="slogan">Se cultiver et s'informer</p>
            </div>
            <div class="column icones has-text-centered">
                <i class="fa fa-handshake fa-5x has-text-warning" aria-hidden="true"></i>
                <p class="slogan">S'entraider, participer à la solidarité réseau</p>
            </div>
        </article>
@endsection
