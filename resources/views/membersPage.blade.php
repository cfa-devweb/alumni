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
        background: ghostwhite;      
        height: 70%;
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
                </div>
            </div>

            <div id="app" class="row columns is-multiline">
                @foreach ($members as $rows)
                <div class="card column is-3 mx-5">
                    <div class="card large has-background-grey-lighter">
                        <div class="card-image ">
                            <figure class="image is-16by9">
                                <img src="{{$rows->avatar}}" alt="Placeholder image alt=" Image">
                            </figure>
                        </div>
                        <div class="card-content overflow-visible">
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
                            <footer class="card-footer">
                            <div class="level-left">
                                <a class="level-item" aria-label="reply">
                                    <span class="icon is-small">
                                        <i class="fas fa-comments" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <a class="level-item" aria-label="retweet">
                                    <span class="icon is-small">
                                        <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </footer>
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
