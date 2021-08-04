@extends('/partials/layout')

@section('content')

    <style>
        .author-image {
            position: absolute;
            top: -30px;
            left: 50%;
            width: 60px;
            height: 60px;
            margin-left: -30px;
            border: 3px solid #ccc;
            border-radius: 50%;
        }

        .hero-body {
            background-image: url();
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 500px;
        }

        .card {
            background-color: #f7f7f7;
        }

        .article-body {
            text-align: justify;
        }
    </style>

    <div class="container">
        <section class="articles">
            <div class="column is-8 is-offset-2">

                <section class="hero is-info is-bold is-small promo-block">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">{{ $blog_post->title }}</h1>
                            <span class="tag is-black is-medium is-rounded">{{ $blog_post->category }}</span>
                        </div>
                    </div>
                </section>

                <div class="card article">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-center">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="author-image" alt="Placeholder image">
                            </div>
                            <div class="media-content has-text-centered">
                                <p class="subtitle is-6 article-subtitle"><br>
                                    <small>Par <a href="#">{{ $blog_post->username }}</a>, le {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog_post->created_at)->format('d/m/Y') }}</small>
                                </p>
                            </div>
                        </div>
                        <div class="content article-body">

                        {{ $blog_post->content }}

                        </div>
                    </div>
                    <footer class="card-footer">
                        <span class="card-footer-item">Visibilité : {!! $blog_post->visibility === 1 ? "&#10004;" : "&#10006;" !!}</span>
                        <span class="card-footer-item">A la une : {!! $blog_post->sticky_post === 1 ? "&#10004;" : "&#10006;" !!}</span>
                        <a class="card-footer-item" href="{{ route('actualites.edit',$blog_post->id) }}" class="card-footer-item">Modifier</a>
                        <form class="card-footer-item" action="{{ route('actualites.destroy',$blog_post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')      
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </footer>
                </div>
            <br>
                <div style="text-align:end;">
                    <a class="button is-dark is-right" href="{{ route('actualites.index') }}">Retour</a>
                </div>
            </div>
        </section>
    </div>

@endsection