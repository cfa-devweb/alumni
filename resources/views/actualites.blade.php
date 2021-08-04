@extends('/partials/layout')

@section('content')

<style>
    .card {
        background-color: #f7f7f7;
        min-height: 650px;
    }
    .card-image {
        min-width: 368px;
        min-height: 207px;
    }
</style>

<section class="blog-posts">
    <div class="container">
        <br>
        <div class="row columns is-multiline">
          @foreach ($posts as $post)
            <hr>
           
                <div class="column post is-4">
                    <div class="card">
                        <article class="columns is-multiline">
                            <div class="column card-image">
                                <figure class="image is-16by9">
                                    <img src="https://cdn.emk.dev/templates/post-img.png" min-width=368 min-height=207 alt="Featured Image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <h3 class="heading post-category">{{ $post->category->name }}</h3>
                                <h2 class="title post-title">{{ $post->title }}</h2>
                                <p class="post-excerpt">{{ \Illuminate\Support\Str::limit($post->content, $limit=120, $end='...') }}</p>
                                <br>
                                <a href="{{ route('actualites.show', $post->id) }}" class="button is-primary">Lire plus...</a>
                            </div>
                        </article>
                    </div> 
                </div>
           @endforeach 
        </div>
        
    </div>
</section>

@endsection