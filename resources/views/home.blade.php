@extends('/partials/layout')


@section('content')

<style>
    .icones {
        display: inline-block;
        width: 20%;
    }

    .tile2 {
        justify-content: space-around;
    }


</style>

<div class="container">
    <div class="columns">
        <div class="column hero">
            <article class="has-background-grey-light">
                <p class="title ">Je suis diplômé du CFA</p>
                <p class="subtitle">Inscrivez-vous, complétez votre profil,
                    développez votre réseau, participez aux évènements du réseau.</p>
                <button class="button"><a href=" {{ route('login') }} ">Se connecter</a></button>
                <button class="button"><a href=" {{ route('register') }} ">S'inscrire</a></button>
            </article>
        </div>
    </div>
    <div class="tile2 is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box has-background-light">

                <p class="title ">Pourquoi rejoindre le réseau Alumni de la CCI?</p>
                <div class="icones has-text-centered">
                    <i class="fa fa-globe fa-5x has-text-warning" aria-hidden="true"></i>
                    <p class="slogan">Développer son réseau</p>
                </div>
                <div class="icones has-text-centered">
                    <i class="fa fa-suitcase fa-5x has-text-warning" aria-hidden="true"></i>
                    <p class="slogan">Faire évoluer sa carrière professionnelle</p>
                </div>
                <div class="icones has-text-centered">
                    <i class="fa fa-book fa-5x has-text-warning" aria-hidden="true"></i>
                    <p class="slogan">Se cultiver et s'informer</p>
                </div>
                <div class="icones has-text-centered">
                    <i class="fa fa-handshake fa-5x has-text-warning" aria-hidden="true"></i>
                    <p class="slogan">S'entraider, participer à la solidarité réseau</p>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
