@extends('/partials/layout')

@section('content')

<style>
    .box {
        background: var(--card-bg);
    }

    .card {
        display: flex;
        overflow-y: auto;
        flex-direction: column;
    }

    .card.large {
        border-radius: 5px;
    }

    .overflow-visible {
        white-space: initial;
    }

</style>

<body>
    <div class="container">
        <div class="section">

            <div class="columns">

                <div class="column has-text-centered">
                    <h1 class="title">PROMOTION</h1><br>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <button class="button is-link is-rounded"><i class="fas fa-comments m-1"
                            aria-hidden="true"></i>Envoyer un message à la promo</button>
                </div>
            </div>

            <div id="app" class="row columns is-multiline is-centered">
                @foreach ($members as $rows)
                <div class="card column is-3 m-5">
                    <div class="card large has-background-grey-lighter">
                        <div class="card-image ">
                            <figure class="image is-16by9">
                                <img src="{{$rows->avatar}}" alt="Placeholder image alt=" Image">
                            </figure>
                        </div>
                        <div class="card-content" style="height:250px">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4 no-padding">{{$rows->last_name}} {{$rows->first_name}}</p>
                                    <p>
                                        <span class="title is-6">
                                            <a href="#">{{$rows->user->email}}</a>
                                </div>
                            </div>
                            <div class="content has-text-justified ">
                                {{$rows->description}}
                                <div class="background-icon"><span class="icon-twitter"></span></div>
                            </div>

                            <div>
                                <button class="button is-link is-small m-1"><i class="fas fa-comments m-1"
                                        aria-hidden="true"></i>Envoyer un message</button>
                                <button class="button is-danger is-small m-1"><i
                                        class="fas fa-exclamation-triangle is-large m-1" aria-hidden="true"></i>Signaler
                                    ce membre</button>
                                <form action="{{ route ('members.destroy') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-danger is-small m-1">Supprimer ce
                                        membre</button>
                            </div>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>

@endsection
