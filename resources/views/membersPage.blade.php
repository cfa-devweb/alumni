@extends('/partials/layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CListe membres</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>

<style>
    .box {
        background: var(--card-bg);
    }

    .button {
        margin: 5px;
    }


    /* Card start*/
    .card {
        overflow: hidden;
        background: ghostwhite;      
        height: 70%;
    }

    .card.large {
        border-radius: 5px;
    }

    .is-text-overflow {
    flex: 1;
    overflow-y: auto;
    text-overflow: ellipsis;
    white-space: nowrap;
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
                    <div class="card large has-background-grey-lighter ">
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
